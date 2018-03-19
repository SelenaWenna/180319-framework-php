<?php 

namespace app\uts\main\controller\guest;

use engine\core\controller\AbstractController;

/**
* 
*/
class ErrorController extends AbstractController
{
	
/*	public function __construct($di)
	{
		parent::__construct($di);
	}
*/
	public function page404()
	{
		echo "404 page";
	}

}

?>