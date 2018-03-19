<?php 

namespace engine\service;

use engine\service\AbstractProvider;
use engine\core\config\Config;

/**
* 
*/
class ConfigProvider extends AbstractProvider
{
	public $serviceName = 'config';
	
/*	function __construct(argument)
	{
		# code...
	}
*/
	public function init()
	{
		$config['main'] = Config::loadConfig('main');
		$config['defaults'] = Config::loadConfig('defaults');
		$config['database'] = Config::loadConfig('database');

		$this->di->set($this->serviceName, $config);
	}
}

?>