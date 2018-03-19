<?php 

namespace Engine;

use engine\helper\Common;
use engine\core\router\DispatchedRoute;
use engine\core\interfaces\Environ;

/**
* 
*/
class Cms
{
	private $di;

	public $router;

//	private $environ;

	function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

	public function run()
	{
		try{
			require_once ROOT_DIR.'/app/uts/Routes.php';

			$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

			$env = '';
			if ($routerDispatch == null) {
				$env = 'default';
				$routerDispatch = new DispatchedRoute('ErrorController@page404');
			}
			
			list($class, $action) = explode('@', $routerDispatch->getController(), 2);

			$environ = new Environ();
			$currentEnviron = $environ->getEnvironFolder($env);
			$controller = '\\app\\uts\\main\\'.'controller\\'.$currentEnviron . '\\' . $class;

			$parameters = $routerDispatch->getParameters();

			call_user_func_array([new $controller($this->di), $action], $parameters);

		} catch (\Exeption $e) {

			echo $e->getMessage();

			exit;
		}
	}
}

?>