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
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('defaultFields', $this->HospitalDatum->defaultFields);
    }

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->paginate = array(
            'fields' => $this->HospitalDatum->defaultFields,
        );
        $this->HospitalDatum->recursive = -1;
		$this->set('hospitalData', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->HospitalDatum->id = $id;
		if (!$this->HospitalDatum->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$this->set('hospitalDatum', $this->HospitalDatum->find('first',
                array('fields' => $this->HospitalDatum->defaultFields,
                      'conditions' => array('id' => $id))
            ));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HospitalDatum->id = $id;
		if (!$this->HospitalDatum->exists()) {
			throw new NotFoundException(__('Invalid HospitalDatum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HospitalDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The HospitalDatum has been saved.'));
                $this->redirect(array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->HospitalDatum->find('first',
                array('fields' => $this->HospitalDatum->defaultFields,
                      'conditions' => array('id' => $id))
            );
		}
	}
    
/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->HospitalDatum->id = $id;
		if (!$this->HospitalDatum->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		if ($this->HospitalDatum->delete()) {
			$this->Session->setFlash(__('Photo deleted'));
		}
		$this->Session->setFlash(__('Photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}