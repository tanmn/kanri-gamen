<?php
App::uses('AppController', 'Controller');
/**
 * RecruitingData Controller
 *
 * @property RecruitingDatum $RecruitingDatum
 */
class RecruitingDataController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('defaultFields', $this->RecruitingDatum->defaultFields);
    }
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = array(
            'fields' => $this->RecruitingDatum->defaultFields,
        );
        $this->RecruitingDatum->recursive = -1;
		$this->set('recruitingData', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RecruitingDatum->id = $id;
		if (!$this->RecruitingDatum->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$this->set('recruitingDatum', $this->RecruitingDatum->find('first',
                array('fields' => $this->RecruitingDatum->defaultFields,
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
		$this->RecruitingDatum->id = $id;
		if (!$this->RecruitingDatum->exists()) {
			throw new NotFoundException(__('Invalid RecruitingDatum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecruitingDatum->save($this->request->data)) {
				$this->Session->setFlash(__('The RecruitingDatum has been saved.'));
                $this->redirect(array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->RecruitingDatum->find('first',
                array('fields' => $this->RecruitingDatum->defaultFields,
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
		$this->RecruitingDatum->id = $id;
		if (!$this->RecruitingDatum->exists()) {
			throw new NotFoundException(__('Invalid recruiting datum'));
		}
		if ($this->RecruitingDatum->delete()) {
			$this->Session->setFlash(__('Recruiting datum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recruiting datum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
