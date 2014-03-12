<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * UserGroups Controller
 *
 * @property UserGroup $UserGroup
 * @property PaginatorComponent $Paginator
 */
class UserGroupsController extends AdminAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserGroup->recursive = 0;
		$this->set('userGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserGroup->exists($id)) {
			throw new NotFoundException(__('Invalid user group'));
		}
		$options = array('conditions' => array('UserGroup.' . $this->UserGroup->primaryKey => $id));
		$this->set('userGroup', $this->UserGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserGroup->create();
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The user group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group could not be saved. Please, try again.'));
			}
		}
		$parentUserGroups = $this->UserGroup->ParentUserGroup->find('list');
		$this->set(compact('parentUserGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserGroup->exists($id)) {
			throw new NotFoundException(__('Invalid user group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The user group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserGroup.' . $this->UserGroup->primaryKey => $id));
			$this->request->data = $this->UserGroup->find('first', $options);
		}
		$parentUserGroups = $this->UserGroup->ParentUserGroup->find('list');
		$this->set(compact('parentUserGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserGroup->id = $id;
		if (!$this->UserGroup->exists()) {
			throw new NotFoundException(__('Invalid user group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserGroup->delete()) {
			$this->Session->setFlash(__('The user group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
