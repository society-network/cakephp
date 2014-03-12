<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * DocumentFiles Controller
 *
 * @property DocumentFile $DocumentFile
 * @property PaginatorComponent $Paginator
 */
class DocumentFilesController extends AdminAppController {

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
		$this->DocumentFile->recursive = 0;
		$this->set('documentFiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentFile->exists($id)) {
			throw new NotFoundException(__('Invalid document file'));
		}
		$options = array('conditions' => array('DocumentFile.' . $this->DocumentFile->primaryKey => $id));
		$this->set('documentFile', $this->DocumentFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentFile->create();
			if ($this->DocumentFile->save($this->request->data)) {
				$this->Session->setFlash(__('The document file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document file could not be saved. Please, try again.'));
			}
		}
		$documents = $this->DocumentFile->Document->find('list');
		$documentTranslations = $this->DocumentFile->DocumentTranslation->find('list');
		$this->set(compact('documents', 'documentTranslations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocumentFile->exists($id)) {
			throw new NotFoundException(__('Invalid document file'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocumentFile->save($this->request->data)) {
				$this->Session->setFlash(__('The document file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentFile.' . $this->DocumentFile->primaryKey => $id));
			$this->request->data = $this->DocumentFile->find('first', $options);
		}
		$documents = $this->DocumentFile->Document->find('list');
		$documentTranslations = $this->DocumentFile->DocumentTranslation->find('list');
		$this->set(compact('documents', 'documentTranslations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocumentFile->id = $id;
		if (!$this->DocumentFile->exists()) {
			throw new NotFoundException(__('Invalid document file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DocumentFile->delete()) {
			$this->Session->setFlash(__('The document file has been deleted.'));
		} else {
			$this->Session->setFlash(__('The document file could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
