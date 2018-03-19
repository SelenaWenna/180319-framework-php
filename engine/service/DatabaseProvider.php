<?php 

namespace engine\service;

use engine\service\AbstractProvider;
use engine\core\database\Connection;

/**
* 
*/
class DatabaseProvider extends AbstractProvider
{
	public $serviceName = 'db';
	
/*	function __construct(argument)
	{
		# code...
	}
*/
	public function init()
	{
		$db = new Connection();

		$this->di->set($this->serviceName, $db);
	}
}

?>