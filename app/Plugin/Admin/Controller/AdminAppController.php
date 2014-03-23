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

    static $upload_errors = array(
        UPLOAD_ERR_OK => 'OK',
        UPLOAD_ERR_INI_SIZE => 'File Too Big',
        UPLOAD_ERR_FORM_SIZE => 'File Too Big',
        UPLOAD_ERR_PARTIAL => 'Upload Interrupted',
        UPLOAD_ERR_NO_FILE => 'No File',
        UPLOAD_ERR_NO_TMP_DIR => 'No Temp Folder',
        UPLOAD_ERR_CANT_WRITE => 'No Writable',
        UPLOAD_ERR_EXTENSION => 'Bad File Extension',
    );

}
