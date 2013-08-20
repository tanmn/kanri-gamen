<?php

App::uses('AppController', 'Controller');

/**
 * HospitalData Controller
 *
 */
class HospitalDataController extends AppController {

    public $uses = array('HospitalDatum');
    public $components = array('Common');

    /**
     * upload file csv and edit data 
     *
     * @method upload
     * @param null
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function upload() {
        $this->HospitalDatum->updatePostCode();
        if ($this->request->is("post")) {
            $valueHospital = $this->HospitalDatum->find("list", array(
                'fields' => array('HospitalDatum.id', 'HospitalDatum.id')
                    ));
            APP::import("Model", array("HospitalDatum"));
            $this->HospitalDatum = new HospitalDatum();
            $data = $this->request->data;
            $this->HospitalDatum->set($data['HospitalDatum']);
            if ($this->HospitalDatum->createValidate()) {
                $filePath = PATH_FILE_UPLOAD_CSV . $data['HospitalDatum']["file"]["name"];
                //echo SAVED_FILE_UPLOAD_CSV_PHOTO;
                if (move_uploaded_file($data['HospitalDatum']["file"]["tmp_name"], $filePath)) {
                    $common = $this->Components->load('Common');
                    $dataCSV = $common->convertCsvFileDefault($filePath);
                    unset($dataCSV[0]);
                    $result = array();
                    for ($i = 1; $i <= count($dataCSV); $i++) {
                        if (!empty($dataCSV[$i][0]) && !empty($valueHospital[$dataCSV[$i][0]]))
                            $result[] = $dataCSV[$i];
                    }
                    if (!empty($result)) {
                        foreach ($result as $value) {
                            if (!empty($value[0])) {
                                $dataHospotal[] = array(
                                    'id' => $value[0],
                                    'rw_id' => intval($value[2]),
                                    'outline' => $value[3],
                                    'subject' => $value[4],
                                    'feature_1' => $value[5],
                                    'feature_t_1' => $value[6],
                                    'feature_2' => $value[7],
                                    'feature_t_2' => $value[8],
                                );
                            }
                        }
                        $this->HospitalDatum->create();
                        if (!empty($dataHospotal)) {
                            $this->HospitalDatum->saveMany($dataHospotal);
                            return;
                        }
                        $this->Session->setFlash("Can not upload data");
                    }
                } else {
                    $this->Session->setFlash("Can not upload data");
                }
            } else {
                $this->Session->setFlash("Can not upload data");
            }
        }
    }

}
