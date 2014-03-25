<?php
App::uses('AdminAppController', 'Admin.Controller');
App::uses('HtmlHelper', 'View/Helper');
App::uses('Folder', 'Utility');
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
            $this->request->data['Document']['user_id'] = $this->Auth->user('id');
			if ($this->Document->save($this->request->data)) {
                $new_id = $new_id = $this->Document->getLastInsertId();
				$this->Session->setFlash(__('The document has been saved'), 'flash/success');
				$this->redirect(array('action' => 'edit', $new_id));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$users = $this->Document->User->find('list');
		$locales = $this->Document->Locale->find('list');
		$categories = $this->Document->Category->find('list');
		$this->set(compact('users', 'locales', 'categories'));
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
        $this->loadModel('DocumentTranslation');
        $this->loadModel('DocumentFile');
        $spec = array('plugin' => null, 'controller' => 'documents', 'action' => 'view', $id);
        $spec = json_encode($spec);

        $this->Document->id = $id;
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
        if (isset($this->request->data['DocumentFile']['new_file'])) {
            $new_file = $this->request->data['DocumentFile']['new_file'];
            if ($this->request->is('post') && $new_file['tmp_name'] && is_uploaded_file($new_file['tmp_name']) && $new_file['error'] == UPLOAD_ERR_OK) {
                $dir = new Folder(WWW_ROOT . UPLOAD_FOLDER, true, 0775);
                $this->DocumentFile->create();
                $path = $dir->pwd() . DS . time() . '_' . $new_file['name'];
                $new_doc_file = array('DocumentFile' => array(
                    'user_id' => $this->Auth->user('id'),
                    'document_id' => $id,
                    'name' => $new_file['name'],
                    'type' => $new_file['type'],
                    'size' => $new_file['size'],
                    'path' => $path,
                    'is_login_required' => $this->request->data['DocumentFile']['is_login_required'],
                ));
                if (move_uploaded_file($new_file['tmp_name'], $path) && $this->DocumentFile->save($new_doc_file)) {
                    chmod($path, 0664);
                    $this->Session->setFlash(__('File uploaded successful'), 'flash/success');
                } else {
                    $this->Session->setFlash(__('File cannot be saved. Please, try again.'), 'flash/error');
                }
            } elseif ($new_file['error'] != UPLOAD_ERR_NO_FILE && $new_file['error'] != UPLOAD_ERR_OK) {
                $this->Session->setFlash(__('File upload failed, error %s.',AdminAppController::$upload_errors[$new_file['error']]), 'flash/error');
            }
        }
		elseif (($this->request->is('post') || $this->request->is('put'))
            && !isset($this->request->data['DocumentFile']['new_file'])) {
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
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'flash/error');
			}
		}// else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
            $default_slug = Inflector::slug(strtolower(trim($this->request->data['Document']['name'])), '-');
            $this->set('default_slug', $default_slug);
		//}
		$users = $this->Document->User->find('list');
		$locales = $this->Document->Locale->find('list');
		$categories = $this->Document->Category->find('list');
        $options = array('conditions' => array('DynamicRoute.document_id' => $id));
        $dynamicRoutes = $this->DynamicRoute->find('first', $options);
		$this->set(compact('users', 'locales', 'categories', 'dynamicRoutes'));

        $options = array('conditions' => array('DocumentTranslation.document_id' => $id), 'recursive' => -1,
            'fields' => array('DocumentTranslation.id', 'DocumentTranslation.locale_id'));
        $documentTranslations = $this->DocumentTranslation->find('all', $options);
        $available_locales = array();
        foreach ($documentTranslations as $translate) {
            $available_locales[$translate['DocumentTranslation']['locale_id']] = $translate['DocumentTranslation']['id'];
        }
        $this->set('available_locales', $available_locales);

        $options = array('conditions' => array('DocumentFile.document_id' => $id), 'recursive' => -1);
        $documentFiles = $this->DocumentFile->find('all', $options);
        $this->set('documentFiles', $documentFiles);
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
        $files = array();
        $file_ids = array();
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		} else {
            $documentFiles = $this->Document->DocumentFile->find('all');
            foreach ($documentFiles as $docFile) {
                $files[] = $docFile['DocumentFile'];
            }
        }
		if ($this->Document->delete()) {
            if ($files) {
                foreach ($files as $file) {
                    $to_delete = new File($file['path']);
                    $to_delete->delete();
                    $file_ids[] = $file['id'];
                }
                $this->Document->DocumentFile->deleteAll(array('DocumentFile.id' => $file_ids), false);
            }
            $this->Document->DocumentTranslation->deleteAll(array('DocumentTranslation.document_id' => $id), false);
			$this->Session->setFlash(__('Document deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Document was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
