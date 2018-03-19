<?php 

namespace engine\service;

use \engine\DI\DI;

abstract class AbstractProvider
{
	protected $di;

	public function __construct(DI $di)
	{
		$this->di = $di;
	}

	abstract function init();
}

?>