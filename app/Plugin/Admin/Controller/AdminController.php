<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * Admin Controller,
 */
class AdminController extends AdminAppController {

    public function index() {
        $this->redirect(array('controller'=>'documents', 'action' => 'index'));
    }

}
