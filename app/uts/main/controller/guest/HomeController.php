<?php 

namespace app\uts\main\controller\guest;

use engine\core\controller\AbstractController;

/**
* 
*/
class HomeController extends AbstractController
{
	
/*	public function __construct($di)
	{
		parent::__construct($di);
	}
*/
	public function index()
	{
		$data = ['name' => 'Artem'];

//		echo "HomeController@index <br>";
		$this->view->render('index', $data);
	}

	public function news($id)
	{
		echo "News page ".$id. "<br>";
	}
}

?>