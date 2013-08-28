<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * @package     app.Controller
 * @author      Mai Nhut Tan
 * @since       2013-08-16
 */
class HospitalsController extends AppController {
    public $scaffold;
    public $uses = array('HospitalDatum');

    public function beforeFilter() {
        parent::beforeFilter();
        $action = $this->request->params['action'];
        if($action == 'index') {
            $defaultFields = array('id', 'hospital_name', 'hospital_name_kana', 'insert_date', 'update_date');
        } else {
            $defaultFields = $this->HospitalDatum->defaultFields;
            foreach($defaultFields as $key => $value) {
                $defaultFields[$key] = str_replace('HospitalDatum.', '', $defaultFields[$key]);
            }
        }
        $this->set('defaultFields', $defaultFields);
    }
}