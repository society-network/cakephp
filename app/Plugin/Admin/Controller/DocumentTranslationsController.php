<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * DocumentTranslations Controller
 *
 * @property DocumentTranslation $DocumentTranslation
 * @property PaginatorComponent $Paginator
 */
class DocumentTranslationsController extends AdminAppController {

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
		$this->DocumentTranslation->recursive = 0;
		$this->set('documentTranslations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentTranslation->exists($id)) {
			throw new NotFoundException(__('Invalid document translation'));
		}
		$options = array('conditions' => array('DocumentTranslation.' . $this->DocumentTranslation->primaryKey => $id));
		$this->set('documentTranslation', $this->DocumentTranslation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentTranslation->create();
			if ($this->DocumentTranslation->save($this->request->data)) {
				$this->Session->setFlash(__('The document translation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document translation could not be saved. Please, try again.'));
			}
		}
		$documents = $this->DocumentTranslation->Document->find('list');
		$locales = $this->DocumentTranslation->Locale->find('list');
		$users = $this->DocumentTranslation->User->find('list');
		$this->set(compact('documents', 'locales', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocumentTranslation->exists($id)) {
			throw new NotFoundException(__('Invalid document translation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocumentTranslation->save($this->request->data)) {
				$this->Session->setFlash(__('The document translation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document translation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentTranslation.' . $this->DocumentTranslation->primaryKey => $id));
			$this->request->data = $this->DocumentTranslation->find('first', $options);
		}
		$documents = $this->DocumentTranslation->Document->find('list');
		$locales = $this->DocumentTranslation->Locale->find('list');
		$users = $this->DocumentTranslation->User->find('list');
		$this->set(compact('documents', 'locales', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocumentTranslation->id = $id;
		if (!$this->DocumentTranslation->exists()) {
			throw new NotFoundException(__('Invalid document translation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DocumentTranslation->delete()) {
			$this->Session->setFlash(__('The document translation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The document translation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
