<?php
App::uses('AppController', 'Controller');
/**
 * MsFoci Controller
 *
 */
class MsFociController extends AppController {

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
            $defaultFields = array('id', 'col_name', 'focus', 'disp_name', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }
}
