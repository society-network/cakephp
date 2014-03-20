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
		$this->set('documentTranslations', $this->paginate());
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
        $document_id = isset($this->request->params['named']['document_id']) ? $this->request->params['named']['document_id'] : null;
        $locale_id = isset($this->request->params['named']['locale_id']) ? $this->request->params['named']['locale_id'] : null;
        $this->set(compact('document_id', 'locale_id'));

		if ($this->request->is('post')) {
			$this->DocumentTranslation->create();
            $this->request->data['DocumentTranslation']['user_id'] = $this->Auth->user('id');
            if ($document_id) {
                $this->request->data['DocumentTranslation']['document_id'] = $document_id;
            }
            if ($locale_id) {
                $this->request->data['DocumentTranslation']['locale_id'] = $locale_id;
            }
			if ($this->DocumentTranslation->save($this->request->data)) {
				$this->Session->setFlash(__('The document translation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document translation could not be saved. Please, try again.'), 'flash/error');
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
        $this->loadModel('Document');
        $this->DocumentTranslation->id = $id;
		if (!$this->DocumentTranslation->exists($id)) {
			throw new NotFoundException(__('Invalid document translation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentTranslation->save($this->request->data)) {
				$this->Session->setFlash(__('The document translation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document translation could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('DocumentTranslation.' . $this->DocumentTranslation->primaryKey => $id));
			$this->request->data = $this->DocumentTranslation->find('first', $options);
		}
        $options = array('conditions' => array('Document.id' => $this->request->data['DocumentTranslation']['document_id']),
            'recursive' => 0,
            'fields' => array('Document.id', 'Document.locale_id'));
		$parentDocuments = $this->Document->find('first', $options);
		$documents = $this->DocumentTranslation->Document->find('list');
		$locales = $this->DocumentTranslation->Locale->find('list');
		$users = $this->DocumentTranslation->User->find('list');
		$this->set(compact('parentDocuments', 'documents', 'locales', 'users'));

        $options = array('conditions' => array('DocumentTranslation.document_id' => $this->request->data['DocumentTranslation']['document_id']),
            'recursive' => 0,
            'fields' => array('DocumentTranslation.id', 'DocumentTranslation.locale_id'));
        $documentTranslations = $this->DocumentTranslation->find('all', $options);
        $available_locales = array();
        foreach ($documentTranslations as $translate) {
            $available_locales[$translate['DocumentTranslation']['locale_id']] = $translate['DocumentTranslation']['id'];
        }
        $this->set('available_locales', $available_locales);
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
		$this->DocumentTranslation->id = $id;
		if (!$this->DocumentTranslation->exists()) {
			throw new NotFoundException(__('Invalid document translation'));
		}
		if ($this->DocumentTranslation->delete()) {
			$this->Session->setFlash(__('Document translation deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document translation was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
