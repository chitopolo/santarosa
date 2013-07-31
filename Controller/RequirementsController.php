<?php
App::uses('AppController', 'Controller');
/**
 * Requirements Controller
 *
 * @property Requirement $Requirement
 */
class RequirementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Requirement->recursive = 0;
		$this->set('requirements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
		$this->set('requirement', $this->Requirement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requirement->create();
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		}
		$branches = $this->Requirement->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Requirement->exists($id)) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Requirement->save($this->request->data)) {
				$this->Session->setFlash(__('The requirement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requirement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requirement.' . $this->Requirement->primaryKey => $id));
			$this->request->data = $this->Requirement->find('first', $options);
		}
		$branches = $this->Requirement->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requirement->id = $id;
		if (!$this->Requirement->exists()) {
			throw new NotFoundException(__('Invalid requirement'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Requirement->delete()) {
			$this->Session->setFlash(__('Requirement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Requirement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
