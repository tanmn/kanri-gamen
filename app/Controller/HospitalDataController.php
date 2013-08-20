<?php

App::uses('AppController', 'Controller');

/**
 * HospitalData Controller
 *
 */
class HospitalDataController extends AppController
{

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
    function upload()
    {
        if ($this->request->is("post")) {
            APP::import("Model", array("Photo"));

            $this->Photo = new Photo();
            $data        = $this->request->data;
            $this->Photo->set($data['Photo']);

            if ($this->Photo->createValidate()) {
                $valueHospital = $this->HospitalDatum->find("list", array(
                    'fields' => array(
                        'HospitalDatum.id',
                        'HospitalDatum.id'
                    )
                ));

                $filePath      = PATH_FILE_UPLOAD_CSV . $data['Photo']["file"]["name"];

                if (move_uploaded_file($data['Photo']["file"]["tmp_name"], $filePath)) {
                    $common  = $this->Components->load('Common');
                    $dataCSV = $common->convertCsvFileDefault($filePath);
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
                                    'feature_t_2' => $value[8]
                                );
                            }
                        }

                        $this->HospitalDatum->create();

                        if (!empty($dataHospotal)) {
                            $this->HospitalDatum->saveMany($dataHospotal);
                            $this->Session->setFlash(__("upload data success"));
                            return;
                        }

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

}
