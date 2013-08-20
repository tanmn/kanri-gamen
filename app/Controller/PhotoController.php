<?php

App::uses('AppController', 'Controller');
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');

/**
 * Static content controller
 *
 * @package     app.Controller
 * @author      Mai Nhut Tan
 * @since       2013-08-16
 */
class PhotoController extends AppController {

    public $dataPhoto = array();
    public $dataHospital = array();
    public $photo_id = 0;
    public $components = array('Common');

    public function beforeFilter() {
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
     * multithread call action request 
     */
    function on_request_done($content, $info, $request) {
        $item = $request->user_var;
        if ($info['http_code'] != 200) {
            $this->Session->setFlash(__("Can not upload data"));
            return;
        }
        $fileext = preg_replace('/^.+\./', '', $info['url']);
        $filename = $this->getName($item) . '.' . $fileext;
        $pathFileName = PATH_SAVE_FILENAME . $item[0] . DS . $filename;
        $filepath = SAVED_PHOTO_FULLPATH . $pathFileName;
        //store content to disk
        if ($this->saveContent($content, $filepath)) {
            $this->photo_id++;
            $this->dataPhoto[] = array(
                'id' => $this->photo_id,
                'filename' => $pathFileName,
                'target_id' => intval($item[0]),
                'target_flag' => TARGET_FLAG,
            );
            $this->dataHospital[] = array(
                'hospital_data_id' => intval($item[0]),
                'photo_id' => $this->photo_id,
                'disp_no' => intval($item[2]),
                'comment_of_photo' => $item[3],
            );
        }
    }

    /**
     * upload file csv and insert data 
     *
     * @method upload
     * @param null
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function upload() {
        if ($this->request->is("post")) {
            $data = $this->request->data;
            $this->Photo->set($data['Photo']);
            if ($this->Photo->createValidate()) {
                $filePath = PATH_FILE_UPLOAD_CSV . $data['Photo']["file"]["name"];
                //echo SAVED_FILE_UPLOAD_CSV_PHOTO;
                if (move_uploaded_file($data['Photo']["file"]["tmp_name"], $filePath)) {
                    $photo = $this->Photo->find("first", array(
                        'fields' => "Photo.id",
                        'order' => array("Photo.id DESC")
                            ));
                    $this->photo_id = $photo['Photo']['id'];
                    $result = $this->actionUpload($filePath);
                    if ($result) {
                        $this->Session->setFlash("upload data Success");
                        if (!empty($this->dataPhoto) && !empty($this->dataHospital)) {
                            APP::import("model", array("Photo", "HospitalPhoto"));
                            $this->Photo = new Photo();
                            $this->Photo->begin();
                            $this->Photo->create();
                            if (!$this->Photo->saveMany($this->dataPhoto)) {
                                $this->Photo->rollback();
                                return;
                            } else {
                                $this->HospitalPhoto = new HospitalPhoto();
                                $this->HospitalPhoto->create();
                                if (!$this->HospitalPhoto->saveMany($this->dataHospital)) {
                                    $this->Photo->rollback();
                                    return;
                                } else {
                                    $this->Photo->commit();
                                }
                            }
                        }
                    } else {
                        $this->Session->setFlash(__("Can not upload data"));
                    }
                } else {
                    $this->Session->setFlash(__("Can not upload data"));
                }
            } else {
                $this->Session->setFlash(__("Can not upload data"));
            }
        }
    }

    /**
     * action uload file
     *
     * @method actionUpload
     * @param path file uploads
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function actionUpload($filePath) {
        if (!empty($filePath)) {
            $common = $this->Components->load('Common');
            $result = $common->convertCsvFileDefault($filePath);
            unset($result[0]);
            foreach ($result as $value) {
                if (!empty($value[0])) {
                    $request = new RollingCurlRequest($value[1]);
                    $request->user_var = $value;
                    $this->Sender->add($request);
                }
            }
            $this->Sender->execute();
            return TRUE;
        }
        return FALSE;
    }

    /**
     * save File 
     *
     * @method saveContent
     * @param path file uploads
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function saveContent($content, $filepath) {
        $file = new File($filepath, true, 0644);
        if (!$file->write($content)) {
            return false;
        }
        return true;
    }

    /**
     * Get randomized 32 character name
     */
    function getName($item) {
        return md5($item[0]);
    }

}
