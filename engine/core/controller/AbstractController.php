<?php 

namespace engine\core\controller;

use engine\DI\DI;
/**
* 
*/
abstract class AbstractController
{
	protected $di;

	protected $view;

	protected $environ;

	protected $config;

	public function __construct(DI  $di)
	{
		$this->di 		= $di;
		$this->view 	= $this->di->get('view');
		$this->environ 	= $this->di->get('interface');
		$this->config 	= $this->di->get('config');
	}
}

?>