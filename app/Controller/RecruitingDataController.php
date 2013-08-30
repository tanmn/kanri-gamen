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

        $this->set(array(
            'defaultFields' => $defaultFields
        ));
    }

    public function beforeRender($options = null){
        parent::beforeRender($options);

        $this->set('title_for_layout', 'Recruiting Management');
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
                    $data = $this->Common->csv2assocArray($temp_file);
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

        //prepare data mask
        $mask = array();
        foreach($this->RecruitingDatum->defaultFields as $name){
            $name = str_replace('RecruitingDatum.', '', $name);
            $mask[$name] = null;
        }

        //add extra mask columns
        $mask['haizoku_recruiting'] = NULL;
        $mask['recruiting_work_system'] = NULL;
        $mask['recruiting_working_style_time1'] = NULL;
        $mask['recruiting_working_style_time2'] = NULL;
        $mask['recruiting_working_style_time3'] = NULL;
        $mask['recruiting_working_style_time4'] = NULL;
        $mask['recruiting_benefits1'] = NULL;
        $mask['recruiting_benefits2'] = NULL;
        $mask['recruiting_benefits3'] = NULL;
        $mask['recruiting_benefits4'] = NULL;

        //prepare data
        foreach ($array as $item) {
            if (empty($item['id']) || !is_numeric($item['id']))
                continue;

            $new_item = $this->Common->array_extend($mask, $item);
            $data[] = array_filter($new_item);
        }

        //process
        if (empty($data)) {
            $this->Session->setFlash(__('Data is empty.'), 'info');
        } else{
            $dbo = $this->RecruitingDatum->getDatasource();
            $dbo->begin();

            foreach ($array as $item) {
                $flag = $this->saveRecruitingData($item);

                if($flag === false){
                    $dbo->rollback();
                    $this->Session->setFlash(__('Update failed. Process was restored to last state.'), 'error');
                    break;
                }
            }

            $dbo->commit();
            $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
        }
    }


    /**
     * Save single row
     *
     * @author Mai Nhut Tan
     * @since 2013/08/29
     */
    function saveRecruitingData($item){
        $lastID = $item['id'];
        $updated = $this->RecruitingDatum->escapeValuesForUpdate($item);
        if(!$this->RecruitingDatum->updateAll($updated, array('RecruitingDatum.id' => $lastID))) return false;

        $this->saveRecursiveData($item, $lastID);

        return $lastID;
    }


    /**
     * Save recursive data for each Recruiting data
     *
     * @author Mai Nhut Tan
     * @since 2013/08/29
     */
    function saveRecursiveData($item, $lastID){
        //prepare data to be inserted
        $haizoku_recruiting_array = array();
        $recruiting_work_system_array = array();
        $recruiting_working_style_time_array = array();
        $recruiting_benefits_array = array();

        //prepare data for haizoku_recruiting
        if(isset($item['haizoku_recruiting'])){
            $data = explode('|', $item['haizoku_recruiting']);

            foreach($data as $v){
                if(empty($v)) continue;

                $haizoku_recruiting_array[] = array(
                    'recruiting_id' => $lastID,
                    'haizoku' => $v,
                    'status' => 1
                );
            }
        }

        //prepare data for recruiting_work_system
        if(isset($item['recruiting_work_system'])){
            $data = explode('|', $item['recruiting_work_system']);

            foreach($data as $v){
                if(empty($v)) continue;

                $recruiting_work_system_array[] = array(
                    'hospital_data_id' => $item['hospital_data_id'],
                    'recruiting_data_id' => $lastID,
                    'work_system' => $v,
                    'status' => 1
                );
            }
        }

        //prepare data for recruiting_working_style_time
        for($i = 1; $i <= 4; $i++){
            if(isset($item['recruiting_working_style_time'.$i])){
                $data = explode('|', $item['recruiting_working_style_time'.$i]);

                $recruiting_working_style_time_array[] = array(
                    'hospital_data_id' => $item['hospital_data_id'],
                    'recruiting_data_id' => $lastID,
                    'working_style' => isset($data[0]) ? $data[0] : NULL,
                    'start_hour' => isset($data[1]) ? $data[1] : NULL,
                    'start_minute' => isset($data[2]) ? $data[2] : NULL,
                    'end_hour' => isset($data[3]) ? $data[3] : NULL,
                    'end_minute' => isset($data[4]) ? $data[4] : NULL,
                    'status' => 1
                );
            }
        }

        //prepare data for recruiting_benefits
        for($i = 1; $i <= 4; $i++){
            if(isset($item['recruiting_benefits'.$i])){
                $data = explode('|', $item['recruiting_benefits'.$i]);

                $recruiting_benefits_array[] = array(
                    'hospital_data_id' => $item['hospital_data_id'],
                    'recruiting_data_id' => $lastID,
                    'benefits' => isset($data[0]) ? $data[0] : NULL,
                    'brow' => isset($data[1]) ? $data[1] : NULL,
                    'status' => 1,
                    'benefits_detail' => isset($data[2]) ? $data[2] : NULL,
                    'brow_min' => isset($data[3]) ? $data[3] : NULL
                );
            }
        }

        //init models
        $model_array = array('HaizokuRecruiting','RecruitingWorkSystem','RecruitingWorkingStyleTime','RecruitingBenefit');
        foreach($model_array as $model){
            $this->$model = ClassRegistry::init($model);
        }

        //do insert data
        $this->HaizokuRecruiting->saveMany($haizoku_recruiting_array);
        $this->RecruitingWorkSystem->saveMany($recruiting_work_system_array);
        $this->RecruitingWorkingStyleTime->saveMany($recruiting_working_style_time_array);
        $this->RecruitingBenefit->saveMany($recruiting_benefits_array);
    }
}
