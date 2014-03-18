<?php

App::uses('AppController', 'Controller');

class AdminAppController extends AppController {
    public $theme = "Cakestrap";

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
                'plugin' => 'admin',
            ),
//            'loginRedirect' => array(
//                'controller' => 'documents',
//                'action' => 'index',
//                'plugin' => 'admin'
//            ),
            'logoutRedirect' => array(
                'controller' => 'documents',
                'action' => 'index',
                'plugin' => 'admin'
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email'),
                )
            )
        )
    );

}
