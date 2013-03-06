<?php
App::uses('AppController', 'Controller');
/**
 * SetMenus Controller
 *
 * @property SetMenu $SetMenu
 */
class SetMenusController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SetMenu->recursive = 0;
		$this->set('setMenus', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		$this->set('setMenu', $this->SetMenu->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SetMenu->create();
			if ($this->SetMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The set menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set menu could not be saved. Please, try again.'));
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
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The set menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set menu could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SetMenu->read(null, $id);
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
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		if ($this->SetMenu->delete()) {
			$this->Session->setFlash(__('Set menu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Set menu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SetMenu->recursive = 0;
		$this->set('setMenus', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		$this->set('setMenu', $this->SetMenu->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SetMenu->create();
			if ($this->SetMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The set menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set menu could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SetMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The set menu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The set menu could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SetMenu->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->SetMenu->id = $id;
		if (!$this->SetMenu->exists()) {
			throw new NotFoundException(__('Invalid set menu'));
		}
		if ($this->SetMenu->delete()) {
			$this->Session->setFlash(__('Set menu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Set menu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
