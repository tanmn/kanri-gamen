<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 */
class ReviewsController extends AppController {

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
            $defaultFields = array('id', 'hospital_id', 'name', 'title', 'insert_date', 'update_date');
            $this->set('defaultFields', $defaultFields);
        }
    }

}
