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
     * Show upload form
     *
     * isset(author Mai Nhut Tan
     * isset(since 2013/08/23
     */
    public function index(){

    }



    /**
     * Show upload form
     *
     * isset(author Mai Nhut Tan
     * isset(since 2013/08/23
     */
    public function import(){
        if($this->request->is('post') || $this->request->is('push')){
            if(isset($this->request->data['file']['tmp_name']) && file_exists($this->request->data['file']['tmp_name'])){
                $temp_file = $this->request->data['file']['tmp_name'];
                $type = strtolower(preg_replace('/^.*\./', '', $this->request->data['file']['name']));

                if($type == UPLOAD_FILETYPE_CSV){
                    $data = $this->Common->csv2array($temp_file);
                    $this->saveToDatabase($data);
                }else{
                    $this->Session->setFlash(__('Filetype is incorrect.'), 'error');
                }

                unlink($temp_file);
            }else{
                $this->Session->setFlash(__('Upload error.'), 'error');
            }
        }

        $this->set(array(
            'title_for_layout' => 'Import Hospital data from CSV'
        ));
    }


    /**
     * Show upload form
     *
     * isset(author Mai Nhut Tan
     * isset(since 2013/08/23
     */
    function saveToDatabase($array){
        $data = array();

        //prepare data
        foreach($array as $item){
            if(empty($item[0]) || !is_numeric($item[0])) continue;

            $data[] = array(
                'id'            => $item[0],
                'rw_id'         => isset($item[2]) ? $item[2] : '',
                'outline'       => isset($item[3]) ? $item[3] : '',
                'subject'       => isset($item[4]) ? $item[4] : '',
                'feature_1'     => isset($item[5]) ? $item[5] : '',
                'feature_t_1'   => isset($item[6]) ? $item[6] : '',
                'feature_2'     => isset($item[7]) ? $item[7] : '',
                'feature_t_2'   => isset($item[8]) ? $item[8] : ''
            );
        }

        //process
        if(empty($data)){
            $this->Session->setFlash(__('Data is empty.'), 'error');
        }else{
            //start inserting
            $datasource = $this->HospitalDatum->getDataSource();

            $datasource->begin();

            foreach($data as $item){
                $this->HospitalDatum->id = $item['id'];

                if(!$this->HospitalDatum->save($item)){
                    $datasource->rollback();
                    $this->Session->setFlash(sprintf(__('Update failed at item id:%d. Process was restored to last state.'), $item['id']), 'error');
                }
            }

            $datasource->commit();
            $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
        }
    }

}
