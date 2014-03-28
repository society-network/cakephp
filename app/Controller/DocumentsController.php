<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 */
class DocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('view');
    }

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
        $language_id = $this->Session->read('Config.current_language.id');
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
        $document = $this->Document->find('first', $options);
        $tran_count = count($document['DocumentTranslation']);
        for ($i = 0; $i < $tran_count; $i++) {
            if ($document['DocumentTranslation'][$i]['language_id'] != $language_id) {
                unset($document['DocumentTranslation'][$i]);
            }
        }
        if ($document['DocumentTranslation']) {
            $document['DocumentTranslation'] = $document['DocumentTranslation'][0];
        }
        //debug($document);
        $cover_img = !empty($document['DocumentTranslation']['cover_img'])?$document['DocumentTranslation']['cover_img']:$document['Document']['cover_img'];
        if ($cover_img) {
            $cover_img = explode(',', $cover_img);
        } else {
            $cover_img = array();
        }
        $this->set('cover_img', $cover_img);
        $this->set('is_login_required', $document['Document']['is_login_required']);
		$this->set('name', !empty($document['DocumentTranslation']['name'])?$document['DocumentTranslation']['name']:$document['Document']['name']);
		$this->set('body', !empty($document['DocumentTranslation']['body'])?$document['DocumentTranslation']['body']:$document['Document']['body']);
		$this->set('files', $document['DocumentFile']);
	}

}
