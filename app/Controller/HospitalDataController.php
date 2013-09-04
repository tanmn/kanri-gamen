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

    //update mode using CSV, initialized true for update data only
    public $updateOnly = true;

    /**
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function index()
    {

    }

    /**
     * Show upload form for updating data from CSV
     *
     * @author Mai Nhut Tan
     * @since 2013/09/04
     */
    public function update()
    {
        //enable upload only mode, then call import
        $this->updateOnly = true;
        $this->doImport();

        $this->view = 'import';
        $this->set(array(
            'title_for_layout' => 'Update Hospital data from CSV',
            'title_for_upload' => 'Update Hospital data',
            'upload_description' => 'Choose a CSV file to upload. All data from CSV will be updated only. Data which does not exist in DB won\'t be created.'
        ));
    }



    /**
     * Show upload form for inserting data from CSV
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function import()
    {
        //disable upload only mode, then call import
        $this->updateOnly = false;
        $this->doImport();

        $this->set(array(
            'title_for_layout' => 'Import Hospital data from CSV',
            'title_for_upload' => 'Import Hospital data',
            'upload_description' => 'Choose a CSV file to upload. All data from CSV will be insert as new rows. All provided IDs will be ignored.'
        ));
    }


    /**
     * Perform uploading CSV and saving data
     *
     * @author Mai Nhut Tan
     * @since 2013/09/04
     */
    function doImport(){
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
    }


    /**
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    function saveToDatabase($array)
    {
        //define data mask
        $mask = array();

        //modified on 2013/09/04
        if($this->updateOnly == true){
            $mask = array(
                'id' => false,
                'rw_id' => false,
                'outline' => false,
                'subject' => false,
                'feature_1' => false,
                'feature_t_1' => false,
                'feature_2' => false,
                'feature_t_2' => false
            );
        }else{
            //prepare data mask from user-defined default fields
            $mask = array();
            foreach($this->HospitalDatum->defaultFields as $name){
                $name = str_replace('HospitalDatum.', '', $name);
                $mask[$name] = false;
            }

            //unset id for inserting only, updated on 2013/09/04
            unset($mask['id']);
        }


        $data = $this->filterData($array, $mask);

        //process
        if (empty($data)) {
            $this->Session->setFlash(__('Data is empty.'), 'info');
        } else{

            //modified on 2013/09/04
            if($this->updateOnly == true){
                $dbo = $this->HospitalDatum->getDatasource();
                $dbo->begin();

                foreach($data as $item){
                    $id = $item['id'];
                    $updated = $this->HospitalDatum->escapeValuesForUpdate($item);

                    if (!$this->HospitalDatum->updateAll($updated, array('HospitalDatum.id' => $id))) {
                        $this->Session->setFlash(__('Update failed. Process was restored to last state.'), 'error');
                        $dbo->rollback();
                        break;
                    }
                }

                $dbo->commit();
                $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
            }else{
                if(!$this->HospitalDatum->saveMany($data)){
                    $this->Session->setFlash(__('Update failed. Process was restored to last state.'), 'error');
                }else{
                    $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
                }
            }
        }
    }


    /**
     * Filter fields for saving
     *
     * @author Mai Nhut Tan
     * @since 2013/09/04
     * @param array $items
     * @return array
     */
    function filterData($items = array(), $mask = array()){
        $data = array();

        //prepare data
        foreach ($items as $item) {
            if (empty($item['id']) || !is_numeric($item['id']))
                continue;

            $new_item = $this->Common->array_extend($mask, $item);

            //filter blank fields
            foreach($new_item as $k => $item){
                if($item === false) unset($new_item[$k]);
            }

            $data[] = $new_item;
        }

        return $data;
    }
}
