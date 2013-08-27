<?php
App::uses('AppController', 'Controller');
/**
 * RecruitingData Controller
 *
 * @property RecruitingDatum $RecruitingDatum
 */
class RecruitingDataController extends AppController
{

    public $uses = array('RecruitingDatum');
    public $components = array('Common');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->set('defaultFields', $this->RecruitingDatum->defaultFields);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = array(
            'fields' => $this->RecruitingDatum->defaultFields
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
    public function view($id = null)
    {
        $this->RecruitingDatum->id = $id;
        if (!$this->RecruitingDatum->exists()) {
            throw new NotFoundException(__('Invalid ID.', 'error'));
        }
        $this->set('recruitingDatum', $this->RecruitingDatum->find('first', array(
            'fields' => $this->RecruitingDatum->defaultFields,
            'conditions' => array(
                'id' => $id
            )
        )));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->RecruitingDatum->id = $id;
        if (!$this->RecruitingDatum->exists()) {
            throw new NotFoundException(__('Invalid ID.'), 'error');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->RecruitingDatum->save($this->request->data)) {
                $this->Session->setFlash(__('Data has been saved.'), 'success');
                $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
            }
        } else {
            $this->request->data = $this->RecruitingDatum->find('first', array(
                'fields' => $this->RecruitingDatum->defaultFields,
                'conditions' => array(
                    'id' => $id
                )
            ));
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
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        $this->RecruitingDatum->id = $id;
        if (!$this->RecruitingDatum->exists()) {
            throw new NotFoundException(__('Invalid ID.'), 'error');
        } else if ($this->RecruitingDatum->delete()) {
            $this->Session->setFlash(__('Data has been deleted.'), 'success');
        } else {
            $this->Session->setFlash(__('Cannot delete data.'), 'error');
        }

        $this->redirect(array(
            'action' => 'index'
        ));
    }



    /**
     * Show upload form
     *
     * isset(author Mai Nhut Tan
     * isset(since 2013/08/27
     */
    public function import()
    {
        if ($this->request->is('post') || $this->request->is('push')) {
            if (isset($this->request->data['file']['tmp_name']) && file_exists($this->request->data['file']['tmp_name'])) {
                $temp_file = $this->request->data['file']['tmp_name'];
                $type = strtolower(preg_replace('/^.*\./', '', $this->request->data['file']['name']));

                if ($type == UPLOAD_FILETYPE_CSV) {
                    $data = $this->Common->csv2array($temp_file);
                    $this->saveToDatabase($data);
                } else {
                    $this->Session->setFlash(__('Filetype is incorrect.'), 'error');
                }

                unlink($temp_file);
            } else {
                $this->Session->setFlash(__('Upload error.'), 'error');
            }
        }

        $this->set(array(
            'title_for_layout' => 'Import Hospital data from CSV'
        ));
    }


    /**
     * Show upload form
     *
     * isset(author Mai Nhut Tan
     * isset(since 2013/08/27
     */
    function saveToDatabase($array)
    {
        $data = array();

        //prepare data
        foreach ($array as $item) {
            if (empty($item[0]) || !is_numeric($item[0]))
                continue;

            $data[] = array(
                'id' => $item[0]
            );
        }

        //process
        if (empty($data)) {
            $this->Session->setFlash(__('Data is empty.'), 'error');
        } else {
            //start inserting
            $datasource = $this->RecruitingData->getDataSource();

            $datasource->begin();

            foreach ($data as $item) {
                $this->RecruitingData->id = $item['id'];

                if (!$this->RecruitingData->save($item)) {
                    $datasource->rollback();
                    $this->Session->setFlash(sprintf(__('Update failed at item id:%d. Process was restored to last state.'), $item['id']), 'error');
                }
            }

            $datasource->commit();
            $this->Session->setFlash(sprintf(__('%d row(s) updated successfully.'), count($data)), 'success');
        }
    }
}
