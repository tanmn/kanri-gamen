<?php
App::uses('AppController', 'Controller');
/**
 * MsEmergencySpecifications Controller
 *
 */
class MsEmergencySpecificationsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
    
    public function beforeFilter() {
        parent::beforeFilter();
        $action = $this->request->params['action'];
        if($action == 'index') {
            $defaultFields = array('id', 'emergency_specification', 'status', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }
}
