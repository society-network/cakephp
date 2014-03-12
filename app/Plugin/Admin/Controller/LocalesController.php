<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * Locales Controller
 *
 * @property Locale $Locale
 * @property PaginatorComponent $Paginator
 */
class LocalesController extends AdminAppController {

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
		$this->Locale->recursive = 0;
		$this->set('locales', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locale->exists($id)) {
			throw new NotFoundException(__('Invalid locale'));
		}
		$options = array('conditions' => array('Locale.' . $this->Locale->primaryKey => $id));
		$this->set('locale', $this->Locale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locale->create();
			if ($this->Locale->save($this->request->data)) {
				$this->Session->setFlash(__('The locale has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locale could not be saved. Please, try again.'), 'flash/error');
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
        $this->Locale->id = $id;
		if (!$this->Locale->exists($id)) {
			throw new NotFoundException(__('Invalid locale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Locale->save($this->request->data)) {
				$this->Session->setFlash(__('The locale has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locale could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Locale.' . $this->Locale->primaryKey => $id));
			$this->request->data = $this->Locale->find('first', $options);
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
		$this->Locale->id = $id;
		if (!$this->Locale->exists()) {
			throw new NotFoundException(__('Invalid locale'));
		}
		if ($this->Locale->delete()) {
			$this->Session->setFlash(__('Locale deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Locale was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
