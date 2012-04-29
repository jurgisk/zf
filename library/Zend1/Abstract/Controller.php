<?php

abstract class Zend1_Abstract_Controller extends Zend_Controller_Action
{

    public function init()
    {

	$doctypeHelper = new Zend_View_Helper_Doctype();
	$doctypeHelper->doctype('HTML5');

	$this->view->headTitle('Education Project');
	$this->view->headLink()->appendStylesheet('/css/layout.css', 'screen,print');

	$this->view->headScript()->appendFile('/js/jquery.js');

	/*$this->view->headMeta()
		->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8')
		->appendHttpEquiv('Content-Language', 'en-US');*/

	$this->view->headMeta()->setCharset('UTF-8');


	

	
	

    }

    


}

