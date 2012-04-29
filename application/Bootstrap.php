<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function _initConfig()
    {
	$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV);
	Zend_Registry::set('config', $config);
    }

    /**
     * Init namespaces (basically point to Library folders where to look for classes)
     */
    public function _initAutoLoadNamespaces()
    {
	$namespaces = $this->getOption('namespaces');
	if (is_array($namespaces) && !empty($namespaces)) {
	    $autoloader = Zend_Loader_Autoloader::getInstance();
	    foreach($namespaces as $namespace) {
		$autoloader->registerNamespace($namespace);
	    }
	}
    }

}

