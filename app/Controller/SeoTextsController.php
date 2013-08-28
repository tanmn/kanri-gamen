<?php
App::uses('AppController', 'Controller');
/**
 * SeoTexts Controller
 *
 */
class SeoTextsController extends AppController {

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
            $defaultFields = array('id', 'type', 'key', 'title', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }
}
