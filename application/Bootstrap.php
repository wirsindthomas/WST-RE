<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    public function _initAppAutoloader()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Application_',
            'basePath'  => APPLICATION_PATH,
            ));
        return $autoloader;
    }


}

