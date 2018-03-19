<?php 

namespace engine\core\router;

/**
* 
*/
class DispatchedRoute
{
	private $controller;
	private $parameters;

	public function __construct($controller, $parameters = [])
	{
		$this->controller = $controller;
		$this->parameters = $parameters;
	}

	public function getController()
	{
		return $this->controller;
	}

/*	public function getInterface()
	{
		return $this->controller[1];
	}
*/
	public function getParameters()
	{
		return $this->parameters;
	}

}

?>