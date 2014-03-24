<?php
App::uses('AppController', 'Controller');
/**
 * Locales Controller
 *
 * @property Locale $Locale
 * @property PaginatorComponent $Paginator
 */
class LocalesController extends AppController {

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
		$this->Locale->recursive = 0;
		$this->set('locales', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locale->exists($id)) {
			throw new NotFoundException(__('Invalid locale'));
		}
		$options = array('conditions' => array('Locale.' . $this->Locale->primaryKey => $id));
		$this->set('locale', $this->Locale->find('first', $options));
	}

    public function set_by_code($code = null) {
        $this->autoRender = false;
        if ($code) {
            $options = array('conditions' => array('Locale.code'=> $code), 'recursive' => -1);
            $locale = $this->Locale->find('first', $options);
            if (!empty($locale['Locale'])) {
                $this->Session->write('Config.locale', $locale['Locale']);
            }
        }
        $this->redirect($this->request->referer());
    }

}
