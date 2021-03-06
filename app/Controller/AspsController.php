<?php
App::uses('AppController', 'Controller');
/**
 * Asps Controller
 *
 */
class AspsController extends AppController {

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
            $defaultFields = array('id', 'media_id', 'af_asp_id', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }
}
