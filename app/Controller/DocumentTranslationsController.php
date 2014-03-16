<?php
App::uses('AppController', 'Controller');
/**
 * DocumentTranslations Controller
 *
 * @property DocumentTranslation $DocumentTranslation
 * @property PaginatorComponent $Paginator
 */
class DocumentTranslationsController extends AppController {

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

}
