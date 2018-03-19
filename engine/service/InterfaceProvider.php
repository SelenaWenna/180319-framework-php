<?php 

namespace engine\service;

use engine\service\AbstractProvider;
use engine\core\interfaces\Environ;

/**
* 
*/
class InterfaceProvider extends AbstractProvider
{
	public $serviceName = 'interface';
	
/*	function __construct(argument)
	{
		# code...
	}
*/
	public function init()
	{
		$interface = new Environ();

		$this->di->set($this->serviceName, $interface);
	}
}

?>