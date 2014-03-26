<?php
App::uses('AppController', 'Controller');
/**
 * Languages Controller
 *
 * @property Language $Language
 * @property PaginatorComponent $Paginator
 */
class LanguagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('set_by_code');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Language->recursive = 0;
		$this->set('languages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Language->exists($id)) {
			throw new NotFoundException(__('Invalid language'));
		}
		$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
		$this->set('language', $this->Language->find('first', $options));
	}

    public function set_by_code($code = null) {
        $this->autoRender = false;
        if ($code) {
            $options = array('conditions' => array('Language.code'=> $code), 'recursive' => -1);
            $language = $this->Language->find('first', $options);
            if (!empty($language['Language'])) {
                $this->Session->write('Config.current_language', $language['Language']);
            }
        }
        $this->redirect($this->request->referer());
    }

}
