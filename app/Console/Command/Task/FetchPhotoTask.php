<?php

App::uses('AppShell', 'Console/Command');
App::uses('File', 'Utility');

/**
 * Task for fetching remote photo URLs
 *
 * @author      Mai Nhut Tan
 * @since       2013/08/19
 * @package     app.Console.Command.Task
 */
class FetchPhotoTask extends AppShell {

    public $uses = array('PhotoKo', 'Photo', 'HospitalPhoto');
    public $queues = array();
    public $errors = array();

    private $hospital_id_shift = 23;

    /**
     * Run initializing
     */
    public function initialize() {
        parent::initialize();

        App::import('Vendor', 'RollingCurl/RollingCurl');

        $this->Sender = new RollingCurl(array($this, 'on_request_done'));
        $this->Sender->window_size = MAX_REQUEST_THREAD;
        $this->Sender->options = array(
            CURLOPT_USERAGENT => 'Kanri Gamen system',
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_TIMEOUT => 30
        );
    }

    /**
     * Execution method always used for tasks
     *
     * @return void
     */
    public function execute() {
        $this->out('================================================');
        $this->out('   FETCH QUEUED PHOTOS AND SAVE TO THE SERVER   ');
        $this->out('================================================');
        $this->out();

        //prepair for errors
        $this->errors = array();

        //looking for queued photos
        $KO_photos = $this->findPhotos();
        $KO_photos_count = count($KO_photos);

        //trace photo count
        $this->out(sprintf(__d('cake_console', '%s photo(s) found.'), $KO_photos_count));
        $this->out();
        if($KO_photos_count < 1) return;

        //process confirmation
        $response = $this->in(__d('cake_console', 'It will take a few minutes to an hour to complete this task. Continue?'), array('y', 'n'), 'y');
        if(strtolower($response) == 'n'){
            $this->out();
            return;
        }

        //init requests
        $this->out("\n" . __d('cake_console', 'Initializing request...'));
        foreach($KO_photos as $item){
            if(empty($item['PhotoKo']['filename'])) continue;

            $fileurl = $item['PhotoKo']['filename'];

            //if it's an url without protocol then add default photo source
            if(!preg_match('/^http/i', $fileurl)){
                if(!preg_match('/^\//', $fileurl)){
                    $fileurl = '/' . $fileurl;
                }

                $fileurl = PHOTO_SOURCE_URL . $fileurl;
            }

            //making request
            $request = new RollingCurlRequest($fileurl);
            $request->user_var = $item;
            $this->Sender->add($request);
        }

        //tracking time
        $start_time = microtime(true);

        //start process
        $this->out(sprintf("\n" . __d('cake_console', '%s request(s) initialized. Please wait until the task complete...'), count($this->Sender->requests)) . "\n");
        $this->Sender->execute();

        //save Hospital Photo queues
        $this->HospitalPhoto->saveMany($this->queues, array('validate' => false, 'atomic' => false));

        //destructor and output
        $total_time = microtime(true) - $start_time;
        $this->hr();
        $this->out(__d('cake_console', 'Task has been completed.'));
        $this->out(sprintf(__d('cake_console', '%d error(s) found over %d item(s).'), count($this->errors), $KO_photos_count));
        $this->out(sprintf(__d('cake_console', 'Total process time: %0.2fs.'), $total_time));
        $this->hr();
    }

    /**
     *
     * @return array
     */
    public function findPhotos(){
        return $this -> PhotoKo -> find(
            'all',
            array(
                'fields' => array(
                'PhotoKo.id',
                'PhotoKo.filename',
                'PhotoKo.target_id',
                'PhotoKo.target_flag'
            ),
            'conditions' => array(
                'PhotoKo.target_flag' => 1
            ),
            'recursive' => 1
            )
        );
    }


    /**
     *
     */
    function on_request_done($content, $info, $request) {
        //get processed item
        $item = $request->user_var;

        //trace procecced item id
        $this->out(sprintf(__d('cake_console', 'Item: #%s'), $item['PhotoKo']['id']));

        //check http code for error
        if($info['http_code'] != 200){
            $this->errors[] = $item;
            $this->out(sprintf(__d('cake_console', '<error>Error downloading file: %s.</error>'), $info['url']));
            $this->out();

            return;
        }

        //trace download info
        $this->out(sprintf(__d('cake_console', 'Downloaded: %s bytes (took %ss).'), $info['size_download'], $info['total_time']));

        //generate file path
        $fileext  = preg_replace('/^.+\./', '', $info['url']);
        $filename = $this->getName($item) . (empty($fileext) ? '' : '.' . $fileext);
        $filepath = SAVED_PHOTO_FULLPATH . ($item['PhotoKo']['target_id']+$this->hospital_id_shift) . DS . $filename;

        //store content to disk
        if($this->saveContent($content, $filepath)){
            $this->out(sprintf(__d('cake_console', 'File has been saved: %s.'), $filepath));

            //save to database
            $photo_id = $this->saveToDB(array(
                'id' => $item['PhotoKo']['id'],
                'filename' => SAVED_PHOTO_PATH . ($item['PhotoKo']['target_id']+$this->hospital_id_shift) . DS . $filename,
                'target_id' => $item['PhotoKo']['target_id'],
                'target_flag' => DEFAULT_PHOTO_TARGET_FLAG
            ));

            if($photo_id){
                $this->queues[$item['PhotoKo']['target_id']] = array(
                    'hospital_data_id' => $item['PhotoKo']['target_id'],
                    'photo_id' => $photo_id,
                    'disp_no' => 1
                );
            }
        }else{
            $this->out(sprintf(__d('cake_console', '<error>Error writing file: %s.</error>'), $filepath));
        }

        //leave blank line
        $this->out();
    }

    /**
     *
     */
    function saveContent($content, $filepath){
        $dir = basename($filepath);
        $file = new File($filepath, true, 0777);

        if(!$file->write($content)){
            return false;
        }
        return true;
    }

    /**
     *
     */
    function saveToDB($photoObject){
        $this->Photo->create();
        if(!$this->Photo->save($photoObject)) return false;

        return $this->Photo->getLastInsertID();
    }

    /**
     * Get randomized 32 character name
     */
    function getName($item){
        return md5($item['PhotoKo']['id'] . '-' . $item['PhotoKo']['target_id']);
    }
}
