<?php

App::uses('AppController', 'Controller');
App::uses('File', 'Utility');

/**
 * Static content controller
 *
 * @package     app.Controller
 * @author      Mai Nhut Tan
 * @since       2013-08-16
 */
class PhotosController extends AppController {

    public $components = array('Common');
    public $uses = array('Photo', 'HospitalPhoto');
    public $Sender = null;
    public $success = array();
    public $errors = array();
    public $queues = array();
    private $hospital_id_shift = 23;


    /**
     * Photo management
     *
     * @author Mai Nhut Tan
     * @since 2013/08/22
     */
    public function index(){
        //check enabled or disabled
        if(!ENABLE_PHOTO_MANAGEMENT){
            throw new ForbiddenException(__('This feature is disabled.'));
        }

        //handle submit action
        if($this->request->is('post') || $this->request->is('push')){
            if(isset($this->request->data['delete'])){
                $data = $this->request->data['delete'];
                $image_link = $this->Photo->find('list', array('conditions' => array('Photo.id' => $data)));

                //delete in DB
                if($this->Photo->deleteAll(array('Photo.id' => $data))){
                    //delete files
                    foreach($image_link as $path){
                        $path = SAVED_PHOTO_DIR . $path;

                        $file = new File($path);
                        $file->delete();
                    }

                    $this->Session->setFlash(sprintf(__('%d photo(s) deleted successfully.'), count($image_link)), 'success');
                }else{
                    $this->Session->setFlash(__('Cannot delete photo(s).'), 'error');
                }
            }
        }

        //setup paginate
        $this->paginate = array('Photo' => array(
            'fields' => array(
                'Photo.id',
                'Photo.filename',
                'Photo.update_date',
                'Photo.target_id',
                'Photo.target_flag'
            ),
            'conditions' => array(
                'Photo.target_flag' => DEFAULT_PHOTO_TARGET_FLAG
            ),
            'limit' => PHOTO_LIMIT,
            'recursive' => -1,
            'order' => array(
                'update_date' => 'DESC'
            )
        ));

        $all_photo = $this->paginate('Photo');

        $this->set(array(
            'title_for_layout' => __('Photo management'),
            'data' => $all_photo
        ));
    }





    /**
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function import(){
        if($this->request->is('post') || $this->request->is('push')){
            if(isset($this->request->data['file']['tmp_name']) && file_exists($this->request->data['file']['tmp_name'])){
                $temp_file = $this->request->data['file']['tmp_name'];
                $type = strtolower(preg_replace('/^.*\./', '', $this->request->data['file']['name']));

                if($type == UPLOAD_FILETYPE_CSV){
                    $raw = $this->Common->csv2array($temp_file);

                    //create hash to store data on session
                    $hash = md5($temp_file);

                    //prepare data
                    $data = array();
                    foreach($raw as $item){
                        if(empty($item[0]) || !is_numeric($item[0])) continue;

                        $data[] = array(
                            'hash'          => $hash,
                            'hospital_id'   => $item[0],
                            'filename'      => isset($item[1]) ? $item[1] : '',
                            'disp_no'        => isset($item[2]) ? $item[2] : '',
                            'comment_of_photo' => isset($item[3]) ? $item[3] : ''
                        );
                    }

                    $this->Session->write(CSV_BUFFER_SESSION_NAME . '.' .$hash, $data);
                }else{
                    $this->Session->setFlash(__('Filetype is incorrect.'), 'error');
                }

                unlink($temp_file);
            }else{
                $this->Session->setFlash(__('Upload error.'), 'error');
            }
        }

        $this->set(array(
            'title_for_layout' => 'Import photos from CSV',
            'title_for_upload' => 'Import photos from CSV',
            'upload_description' => '',
            'hash' => isset($hash) ? $hash : NULL
        ));
    }





    /**
     * Process after upload
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function process($hash = ''){
        ob_start();
        $data = $this->Session->read(CSV_BUFFER_SESSION_NAME . '.' .$hash);
        session_write_close();

        if(!empty($data)){
            try{
                //initializing
                set_time_limit(MAX_PROCESS_TIMEOUT);
                $this->initSender();

                //process
                foreach($data as $item){
                    $fileurl = $item['filename'];

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

                //start fetching URLs
                $this->success = array();
                $this->errors = array();
                $this->queues = array();
                $this->Sender->execute();

                //save Hospital Photo queues
                $this->HospitalPhoto->saveMany($this->queues, array('validate' => false, 'atomic' => false));

            }catch(Exception $e){
                $this->Session->setFlash(__('Update fail.'), 'error');
            }

            //output information
            @session_start();
            $data = $this->Session->read(CSV_BUFFER_SESSION_NAME . '.Info.' .$hash);
            header('Content-type: text/json');
            echo json_encode($data);

            //cleanup
            $this->Session->delete(CSV_BUFFER_SESSION_NAME . '.' .$hash);
            $this->Session->delete(CSV_BUFFER_SESSION_NAME . '.Info.' .$hash);

            $msg_class = 'info';
            if(count($this->errors) == 0){
                $msg_class = 'success';
            }else if(count($this->success) == 0){
                $msg_class = 'error';
            }

            $this->Session->setFlash(sprintf(__('%d row(s) updated successfully, %d row(s) error.'), count($this->success), count($this->errors)), $msg_class);
            ob_end_flush();

            die();
        }else{
            $this->Session->setFlash(__('Data is empty.'), 'info');
        }

        $this->redirect(array('action' => 'import'));
    }




    /**
     * Update import process information
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    protected function setProcessInfo($hash){
        @session_start();
        $total = count($this->Session->read(CSV_BUFFER_SESSION_NAME . '.' . $hash));
        $complete = count($this->success);
        $percent = $complete / $total * 100;

        $this->Session->write(CSV_BUFFER_SESSION_NAME . '.Info.' . $hash, array(
            'error' => count($this->errors),
            'complete' => $complete,
            'error_data' => $this->errors,
            'total' => $total,
            'percent' => $percent
        ));
        @session_write_close();
    }




    /**
     * Read import process information
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function processInfo($hash){
        $this->autoLayout = false;
        $this->autoRender = false;

        $data = $this->Session->read(CSV_BUFFER_SESSION_NAME . '.Info.' .$hash);

        header('Content-type: text/json');
        echo json_encode($data);
        exit;
    }



    /**
     * Init request sender
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function initSender() {
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
     * Init request sender
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    function on_request_done($content, $info, $request) {
        //get processed item
        $item = $request->user_var;

        //generate file path
        $fileext  = preg_replace('/^.+\./', '', $info['url']);
        $filename = $this->getName($item) . (empty($fileext) ? '' : '.' . $fileext);


        //check http code for success
        if($info['http_code'] == 200){
            //store content to disk
            $filepath = SAVED_PHOTO_FULLPATH . ($item['hospital_id'] + $this->hospital_id_shift) . DS . $filename;
            $this->saveContent($content, $filepath);
        }

        //save to database
        $photo_id = $this->saveToDB(array(
            'filename' => SAVED_PHOTO_PATH . ($item['hospital_id'] + $this->hospital_id_shift) . DS . $filename,
            'target_id' => $item['hospital_id'],
            'target_flag' => DEFAULT_PHOTO_TARGET_FLAG
        ));

        if(!$photo_id || $info['http_code'] != 200){
            $this->errors[] = $item;
        }else{
            $this->success[] = $item;

            $this->queues[$item['hospital_id']] = array(
                'hospital_data_id' => $item['hospital_id'],
                'photo_id' => $photo_id,
                'disp_no' => $item['disp_no'],
                'comment_of_photo' => @$item['comment_of_photo']
            );
        }

        $this->setProcessInfo($item['hash']);
    }





    /**
     * Init request sender
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
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
     * Save Photo data
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    function saveToDB($photoObject){
        $this->Photo->create();
        if(!$this->Photo->save($photoObject)) return false;

        return $this->Photo->getLastInsertID();
    }




    /**
     * Save Photo data
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    function saveHospitalPhotoToDB($photoObject){
        $this->HospitalPhoto->create();
        if(!$this->HospitalPhoto->save($photoObject)) return false;

        return $this->HospitalPhoto->getLastInsertID();
    }





    /**
     * Get unique file name
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    function getName($item){
        return md5($item['hospital_id'] . '-' . $item['filename']);
    }

}

