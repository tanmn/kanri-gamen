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
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
     */
    public function index()
    {

    }



    /**
     * Show upload form
     *
     * @author Mai Nhut Tan
     * @since 2013/08/23
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
     * @since 2013/08/23
     */
    function saveToDatabase($array)
    {
        $data = array();

        //prepare data mask from user-defined default fields
        /*
        $mask = array();
        foreach($this->HospitalDatum->defaultFields as $name){
            $name = str_replace('HospitalDatum.', '', $name);
            $mask[$name] = null;
        }
        */

        //define data mask
        $mask = array(
            'id' => NULL,
            'rw_id' => NULL,
            'outline' => NULL,
            'subject' => NULL,
            'feature_1' => NULL,
            'feature_t_1' => NULL,
            'feature_2' => NULL,
            'feature_t_2' => NULL
        );

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
        }
    }

}
