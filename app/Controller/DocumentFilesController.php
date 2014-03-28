<?php
App::uses('AppController', 'Controller');
/**
 * DocumentFiles Controller
 *
 * @property DocumentFile $DocumentFile
 * @property PaginatorComponent $Paginator
 */
class DocumentFilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to home.
        $this->Auth->allow('get');
    }

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
