<?php
App::uses('AdminAppController', 'Admin.Controller');
App::uses('File', 'Utility');
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
		$this->set('documentFiles', $this->paginate());
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
				$this->Session->setFlash(__('The document file has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document file could not be saved. Please, try again.'), 'flash/error');
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
        $this->DocumentFile->id = $id;
		if (!$this->DocumentFile->exists($id)) {
			throw new NotFoundException(__('Invalid document file'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DocumentFile->save($this->request->data)) {
				$this->Session->setFlash(__('The document file has been saved'), 'flash/success');
                //$this->redirect($this->request->referer());
			} else {
				$this->Session->setFlash(__('The document file could not be saved. Please, try again.'), 'flash/error');
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->DocumentFile->id = $id;
        $deletable = false;
		if (!$this->DocumentFile->exists()) {
			throw new NotFoundException(__('Invalid document file'));
		} else {
            $options = array('conditions' => array('DocumentFile.' . $this->DocumentFile->primaryKey => $id));
            $file =$this->DocumentFile->find('first', $options);
            if (isset($file['DocumentFile']['path']) && file_exists($file['DocumentFile']['path'])) {
                $to_delete = new File($file['DocumentFile']['path']);
                $deletable = $to_delete->writable();
            } else {
                $deletable = true;
            }
        }
		if ($deletable && $this->DocumentFile->delete()) {
			$this->Session->setFlash(__('Document file deleted'), 'flash/success');
            if (strpos($this->request->referer(), $this->request->here) !== false) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->redirect($this->request->referer());
            }
		}
		$this->Session->setFlash(__('Document file was not deleted'), 'flash/error');
        $this->redirect($this->request->referer());
	}

}
