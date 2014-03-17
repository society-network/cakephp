<?php
App::uses('AdminAppController', 'Admin.Controller');
App::uses('HtmlHelper', 'View/Helper');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 */
class DocumentsController extends AdminAppController {

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
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$parentDocuments = $this->Document->ParentDocument->find('list');
		$users = $this->Document->User->find('list');
		$locales = $this->Document->Locale->find('list');
		$categories = $this->Document->Category->find('list');
		$this->set(compact('parentDocuments', 'users', 'locales', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->loadModel('DynamicRoute.DynamicRoute');
        $spec = array('plugin' => null, 'controller' => 'documents', 'action' => 'view', $id);
        $spec = serialize($spec);

        $this->Document->id = $id;
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Document->save($this->request->data)) {
                if (isset($this->request->data['DynamicRoute']['slug'])) {
                    $slug = strtolower(trim($this->request->data['DynamicRoute']['slug']));
                    if ($slug && $slug[0] == '/') {
                        $slug = substr($slug, 1);
                    }
                    $slug = '/' . Inflector::slug($slug, '-');
                    $data = array('DynamicRoute' => $this->request->data['DynamicRoute']);
                    $data['DynamicRoute']['document_id'] = $id;
                    $data['DynamicRoute']['slug'] = $slug;
                    $data['DynamicRoute']['spec'] = $spec;
                    if ($data['DynamicRoute']['id']) {
                        $this->DynamicRoute->save($data);
                    } else {
                        unset($data['id']);
                        $this->DynamicRoute->create();
                        $this->DynamicRoute->save($data);
                    }
                } else {

                }
				$this->Session->setFlash(__('The document has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
            $default_slug = Inflector::slug(strtolower(trim($this->request->data['Document']['name'])), '-');
            $this->set('default_slug', $default_slug);
		}
		$users = $this->Document->User->find('list');
		$locales = $this->Document->Locale->find('list');
		$categories = $this->Document->Category->find('list');
        $dynamicRoutes = $this->DynamicRoute->find('first');
		$this->set(compact('users', 'locales', 'categories', 'dynamicRoutes'));
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
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->Document->delete()) {
			$this->Session->setFlash(__('Document deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
