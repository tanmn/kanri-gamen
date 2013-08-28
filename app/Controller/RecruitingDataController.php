<?php
App::uses('AppController', 'Controller');
/**
 * RecruitingData Controller
 *
 * @property RecruitingDatum $RecruitingDatum
 */
class RecruitingDataController extends AppController
{
    public $scaffold;
    public $uses = array('RecruitingDatum');
    public $components = array('Common');

    public function beforeFilter() {
        parent::beforeFilter();
        $action = $this->request->params['action'];
        if($action == 'index') {
            $defaultFields = array('id', 'hospital_data_id', 'qualification_id', 'working_style_id', 'recruitment_start_date', 'recruitment_end_date');
        } else {
            $defaultFields = $this->RecruitingDatum->defaultFields;
            foreach($defaultFields as $key => $value) {
                $defaultFields[$key] = str_replace('RecruitingDatum.', '', $defaultFields[$key]);
            }
        }
        $this->set('defaultFields', $defaultFields);
    }

    /**
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/27
     */
    public function import()
    {
        if ($this->request->is('post') || $this->request->is('push')) {
            if (isset($this->request->data['file']['tmp_name']) && file_exists($this->request->data['file']['tmp_name'])) {
                $temp_file = $this->request->data['file']['tmp_name'];
                $type = strtolower(preg_replace('/^.*\./', '', $this->request->data['file']['name']));

                if ($type == UPLOAD_FILETYPE_CSV) {
                    $data = $this->Common->csv2array($temp_file);
                    $this->saveToDatabase($data);
                } else {
                    $this->Session->setFlash(__('Filetype is incorrect.'), 'error');
                }

                unlink($temp_file);
            } else {
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
     * @author Mai Nhut Tan
     * @since 2013/08/27
     */
    function saveToDatabase($array)
    {
        $data = array();

        //prepare data
        foreach ($array as $item) {
            if (empty($item[0]) || !is_numeric($item[0]))
                continue;

            $data[] = array(
                'id' => $item[0]
            );
        }

        //process
        if (empty($data)) {
            $this->Session->setFlash(__('Data is empty.'), 'error');
        } else {
            //start inserting
            $datasource = $this->RecruitingData->getDataSource();

            $datasource->begin();

            foreach ($data as $item) {
                $this->RecruitingData->id = $item['id'];

                if (!$this->RecruitingData->save($item)) {
                    $datasource->rollback();
                    $this->Session->setFlash(sprintf(__('Update failed at item id:%d. Process was restored to last state.'), $item['id']), 'error');
                }
            }

            $datasource->commit();
            $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
        }
    }
}
