<?php 

namespace engine\service;

use engine\service\AbstractProvider;
use engine\core\template\View;

/**
* 
*/
class ViewProvider extends AbstractProvider
{
	public $serviceName = 'view';
	
/*	function __construct(argument)
	{
		# code...
	}
*/
	public function init()
	{
		$view = new View();

		$this->di->set($this->serviceName, $view);
	}
}

?>