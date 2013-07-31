<?php
App::uses('AppController', 'Controller');
/**
 * BranchesImages Controller
 *
 * @property BranchesImage $BranchesImage
 */
class BranchesImagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BranchesImage->recursive = 0;
		$this->set('branchesImages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BranchesImage->exists($id)) {
			throw new NotFoundException(__('Invalid branches image'));
		}
		$options = array('conditions' => array('BranchesImage.' . $this->BranchesImage->primaryKey => $id));
		$this->set('branchesImage', $this->BranchesImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BranchesImage->create();
			if ($this->BranchesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The branches image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The branches image could not be saved. Please, try again.'));
			}
		}
		$branches = $this->BranchesImage->Branch->find('list');
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
		if (!$this->BranchesImage->exists($id)) {
			throw new NotFoundException(__('Invalid branches image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BranchesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The branches image has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The branches image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BranchesImage.' . $this->BranchesImage->primaryKey => $id));
			$this->request->data = $this->BranchesImage->find('first', $options);
		}
		$branches = $this->BranchesImage->Branch->find('list');
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
		$this->BranchesImage->id = $id;
		if (!$this->BranchesImage->exists()) {
			throw new NotFoundException(__('Invalid branches image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BranchesImage->delete()) {
			$this->Session->setFlash(__('Branches image deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Branches image was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
