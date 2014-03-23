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
            }
        }
		if ($deletable && $this->DocumentFile->delete()) {
			$this->Session->setFlash(__('Document file deleted'), 'flash/success');
            if (strpos($this->request->referer(), $this->request->here) !== false) {
                $this->redirect($this->request->referer());
            } else {
                $this->redirect(array('action' => 'index'));
            }
		}
		$this->Session->setFlash(__('Document file was not deleted'), 'flash/error');
        $this->redirect($this->request->referer());
	}

    public function get($id = null) {
        $this->autoRender = false;
        $this->DocumentFile->id = $id;
        if (!$this->DocumentFile->exists()) {
            throw new NotFoundException(__('Invalid document file'));
        }
        $documentFile = $this->DocumentFile->find('first');
        $is_login_required = $documentFile['DocumentFile']['is_login_required'];
        $filename = $documentFile['DocumentFile']['name'];
        $file_path = $documentFile['DocumentFile']['path'];

        header("Pragma: public");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Content-Type: application/octet-stream");

        $ua = $_SERVER["HTTP_USER_AGENT"];
        $encoded_filename = urlencode($filename);
        $encoded_filename = str_replace("+", "%20", $encoded_filename);
        if (preg_match("/MSIE/", $ua)) {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        } else if (preg_match("/Firefox/", $ua)) {
            header("Content-Disposition: attachment; filename*=\"utf8''" . $filename . '"');
        } else {
            header('Content-Disposition: attachment; filename="' . $filename . '"');
        }

        set_time_limit(0);
        $file = @fopen($file_path, "rb");
        while(!feof($file))
        {
            print(@fread($file, 1024*8));
            ob_flush();
            flush();
        }

        exit();
    }

}
