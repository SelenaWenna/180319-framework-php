<?php 

namespace engine\service;

use engine\service\AbstractProvider;
use engine\core\router\Router;

/**
* 
*/
class RouterProvider extends AbstractProvider
{
	public $serviceName = 'router';
	
/*	function __construct(argument)
	{
		# code...
	}
*/
	public function init()
	{
		$router = new Router('http://uts.i');

		$this->di->set($this->serviceName, $router);
	}
}

?>