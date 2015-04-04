<?php

class StagesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $layout = 'x';

    public function index() {
        $this->set('stages', $this->Stage->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Stage intouvable'));
        }

        $stage = $this->Stage->findById($id);
        if (!$stage) {
            throw new NotFoundException(__('Stage intouvable'));
        }
        $this->set('stage', $stage);
    }

    public function beforeFilter() {
        if ($this->Session->read('auth') != 'true') {
            $this->redirect('/index');
        }
    }

    

}
