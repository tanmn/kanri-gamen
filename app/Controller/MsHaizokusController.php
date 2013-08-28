<?php
App::uses('AppController', 'Controller');
/**
 * MsHaizokus Controller
 *
 */
class MsHaizokusController extends AppController {
    public $uses = array('MsHaizoku');
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
            $defaultFields = array('id', 'haizoku_name', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }

}
