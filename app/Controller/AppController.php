<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $theme = "Cakestrap";

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
            ),
//            'loginRedirect' => array(
//                'controller' => 'pages',
//                'action' => 'home'
//            ),
//            'logoutRedirect' => array(
//                'controller' => 'pages',
//                'action' => 'home',
//            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email'),
                )
            )
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('*');
        if (!$this->Session->check('Config.current_language')) {
            $this->Session->write('Config.current_language',  Configure::read('Config.current_language'));
            Configure::write('Config.language', Configure::read('Config.current_language.code'));
        } else {
            Configure::write('Config.language', $this->Session->read('Config.current_language.code'));
        }

        // load menu
        $this->loadModel('Menu');
        $language_id = $this->Session->read('Config.current_language.id');
        $options = array('conditions' => array('Menu.active' => 1,
            'Menu.language_id' => $language_id
        ), 'order' => array('Menu.lft ASC'), 'recursive' => -1);
        $main_menu_items = $this->Menu->find('threaded', $options);
        $url = $this->request->here(false);
        if (strpos($url, '/languages/set_by_code') === false && strpos($url, '/admin') === false) {
            $options = array('conditions' => array('Menu.url' => $url,
                'Menu.language_id' => $language_id, 'Menu.active' => 1), 'recursive' => 0);
            $current_menu = $this->Menu->find('first', $options);
            if ($current_menu) {
                $sub_menus = $this->Menu->children($current_menu['Menu']['parent_id']);
            } else {
                $sub_menus = null;
            }
            $this->set(compact('main_menu_items', 'current_menu', 'sub_menus'));
        }
    }
}
