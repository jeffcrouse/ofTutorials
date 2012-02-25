<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{


	/**
	*
	*
	*/
	protected function _initConfig()
	{
		$config = new Zend_Config($this->getOptions());
		Zend_Registry::set('config', $config);
		return $config;
	}
	

	/**
	*
	*/
	protected function _initPhpActiveRecord()
	{
        $appConfig = $this->config;
        $dbParams = $appConfig->resources->db->params;
        $dsn = sprintf("mysql://%s:%s@%s/%s", $dbParams->username, $dbParams->password, $dbParams->host, $dbParams->dbname);
        Zend_Loader::loadFile('ActiveRecord.php', '../library/php-activerecord', TRUE);
        ActiveRecord\Config::initialize(
	        function($cfg) use ($dsn) {
	            $cfg->set_model_directory(APPLICATION_PATH . '/models');
	            $cfg->set_connections(array('development' => $dsn));	                
			    @include("Log.php");
				if(class_exists("Log")) {
					$file = sprintf("%s/logs/phpar.log", APPLICATION_PATH);
					$logger = Log::singleton('file', $file, 'ident', array('mode' => 0664, 'timeFormat' =>  '%Y-%m-%d %H:%M:%S'));
					$cfg->set_logging(true);
					$cfg->set_logger($logger);
				}   
	        }
        );
	}
	
	

	/**
	*
	*
	*/
	public function _initRouter()
	{		
		$routes = array(
			'postreceive' => new Zend_Controller_Router_Route('postreceive',
				array('controller' => 'index', 'action' => 'postreceive')
			),
		);
		
		$router = Zend_Controller_Front::getInstance()->getRouter();
		$router->addRoutes($routes);
		return $router;
	}
}

