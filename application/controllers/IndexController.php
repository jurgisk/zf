<?php

class IndexController extends Zend1_Abstract_Controller
{

    public function init()
    {
       parent::init();
    }

    public function indexAction()
    {
        $this->view->headTitle('You are cool man', true);
    }


}

