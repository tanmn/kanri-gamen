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
    //public $scaffold;
    public $uses = array('HospitalDatum');
    
    public function index() {
        $this->HospitalDatum->recursive = -1;
		$this->set('hospitalData', $this->paginate());
	}
    
}
