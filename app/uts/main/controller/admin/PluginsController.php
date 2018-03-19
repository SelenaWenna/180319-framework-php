<?php 

namespace app\uts\main\controller\admin;

use engine\core\controller\AbstractController;

/**
* 
*/
class PluginsController extends AbstractController
{
	
/*	public function __construct($di)
	{
		parent::__construct($di);
	}
*/
	public function pluginsList()
	{
		$data = [
			'name' => 'Sergey',
			'interface' => $this->environ->getEnviron()
		];
//		echo "HomeController@index <br>";
		$this->view->render('plugins', $data);
	}

	public function news($id)
	{
		echo "News page ".$id. "<br>";
	}
}

?>