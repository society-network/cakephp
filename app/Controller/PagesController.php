<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to home.
        $this->Auth->allow('display', 'home');
    }

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

    public function home() {
        $this->loadModel('Document');
        $this->loadModel('DocumentTranslation');
        $this->loadModel('DynamicRoute.DynamicRoute');
        $options = array('conditions' => array('DynamicRoute.slug' => '/home'));
        $dynamicRoute = $this->DynamicRoute->find('first', $options);
        if ($dynamicRoute) {
            $options = array('conditions' => array('Document.' . $this->Document->primaryKey => $dynamicRoute['DynamicRoute']['document_id'])
            , 'recursive' => -1);
            $homepage= $this->Document->find('first', $options);

            $language = $this->Session->read('Config.current_language');
            $language_id = $language['id'];
            $options = array('conditions' => array('DocumentTranslation.document_id' => $homepage['Document']['id']
            , 'DocumentTranslation.language_id' => $language_id)
            , 'recursive' => -1);
            $homepage_tran = $this->Document->DocumentTranslation->find('first', $options);
            $this->set('title_for_layout', isset($homepage_tran['DocumentTranslation']['name'])?$homepage_tran['DocumentTranslation']['name']:$homepage['Document']['name']);
            $cover_img = isset($homepage_tran['DocumentTranslation']['cover_img'])?$homepage_tran['DocumentTranslation']['cover_img']:$homepage['Document']['cover_img'];
            if ($cover_img) {
                $cover_img = explode(',', $cover_img);
            } else {
                $cover_img = array();
            }
            $this->set('cover_img', $cover_img);
            $this->set('body', isset($homepage_tran['DocumentTranslation']['body'])?$homepage_tran['DocumentTranslation']['body']:$homepage['Document']['body']);
        } else {
            throw new NotFoundException(__('Invalid document file'));
        }
    }
}
