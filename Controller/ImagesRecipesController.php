<?php
App::uses('AppController', 'Controller');
/**
 * ImagesRecipes Controller
 *
 * @property ImagesRecipe $ImagesRecipe
 */
class ImagesRecipesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ImagesRecipe->recursive = 0;
		$this->set('imagesRecipes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImagesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid images recipe'));
		}
		$options = array('conditions' => array('ImagesRecipe.' . $this->ImagesRecipe->primaryKey => $id));
		$this->set('imagesRecipe', $this->ImagesRecipe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ImagesRecipe->create();
			if ($this->ImagesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The images recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images recipe could not be saved. Please, try again.'));
			}
		}
		$recipes = $this->ImagesRecipe->Recipe->find('list');
		$this->set(compact('recipes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ImagesRecipe->exists($id)) {
			throw new NotFoundException(__('Invalid images recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ImagesRecipe->save($this->request->data)) {
				$this->Session->setFlash(__('The images recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The images recipe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImagesRecipe.' . $this->ImagesRecipe->primaryKey => $id));
			$this->request->data = $this->ImagesRecipe->find('first', $options);
		}
		$recipes = $this->ImagesRecipe->Recipe->find('list');
		$this->set(compact('recipes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ImagesRecipe->id = $id;
		if (!$this->ImagesRecipe->exists()) {
			throw new NotFoundException(__('Invalid images recipe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ImagesRecipe->delete()) {
			$this->Session->setFlash(__('Images recipe deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Images recipe was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
