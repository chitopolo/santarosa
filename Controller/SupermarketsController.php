<?php
App::uses('AppController', 'Controller');
/**
 * Supermarkets Controller
 *
 * @property Supermarket $Supermarket
 */
class SupermarketsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Supermarket->recursive = 0;
		$this->set('supermarkets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Supermarket->exists($id)) {
			throw new NotFoundException(__('Invalid supermarket'));
		}
		$options = array('conditions' => array('Supermarket.' . $this->Supermarket->primaryKey => $id));
		$this->set('supermarket', $this->Supermarket->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Supermarket->create();
			if ($this->Supermarket->save($this->request->data)) {
				$this->Session->setFlash(__('The supermarket has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supermarket could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Supermarket->exists($id)) {
			throw new NotFoundException(__('Invalid supermarket'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Supermarket->save($this->request->data)) {
				$this->Session->setFlash(__('The supermarket has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supermarket could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Supermarket.' . $this->Supermarket->primaryKey => $id));
			$this->request->data = $this->Supermarket->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Supermarket->id = $id;
		if (!$this->Supermarket->exists()) {
			throw new NotFoundException(__('Invalid supermarket'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Supermarket->delete()) {
			$this->Session->setFlash(__('Supermarket deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Supermarket was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
