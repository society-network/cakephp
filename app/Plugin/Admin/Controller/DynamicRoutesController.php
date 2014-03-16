<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * DynamicRoutes Controller
 *
 * @property DynamicRoute $DynamicRoute
 * @property PaginatorComponent $Paginator
 */
class DynamicRoutesController extends AdminAppController {

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
		$this->DynamicRoute->recursive = 0;
		$this->set('dynamicRoutes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DynamicRoute->exists($id)) {
			throw new NotFoundException(__('Invalid dynamic route'));
		}
		$options = array('conditions' => array('DynamicRoute.' . $this->DynamicRoute->primaryKey => $id));
		$this->set('dynamicRoute', $this->DynamicRoute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DynamicRoute->create();
			if ($this->DynamicRoute->save($this->request->data)) {
				$this->Session->setFlash(__('The dynamic route has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dynamic route could not be saved. Please, try again.'), 'flash/error');
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
        $this->DynamicRoute->id = $id;
		if (!$this->DynamicRoute->exists($id)) {
			throw new NotFoundException(__('Invalid dynamic route'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DynamicRoute->save($this->request->data)) {
				$this->Session->setFlash(__('The dynamic route has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dynamic route could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('DynamicRoute.' . $this->DynamicRoute->primaryKey => $id));
			$this->request->data = $this->DynamicRoute->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->DynamicRoute->id = $id;
		if (!$this->DynamicRoute->exists()) {
			throw new NotFoundException(__('Invalid dynamic route'));
		}
		if ($this->DynamicRoute->delete()) {
			$this->Session->setFlash(__('Dynamic route deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dynamic route was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
