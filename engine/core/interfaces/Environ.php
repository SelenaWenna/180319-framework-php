<?php 

namespace engine\core\interfaces;

/**
* 
*/
class Environ
{
	private $interfaces = [
		'default'	 => ['folder' => 'guest'     , 'description'	 =>'Интерфейс по умолчанию для стороннего пользователя.'],
		'programmer' => ['folder' => 'programmer', 'description'	 => 'Интерфейс программиста.'],
		'admin'		 => ['folder' => 'admin'	 , 'description'	 => 'Интерфейс администратора.'],
		'manager'	 => ['folder' => 'manager'	 , 'description'	 => 'Интерфейс контент-менеджера.'],
	];

	public function getEnviron()
	{
		$url = explode('/', $_SERVER['REQUEST_URI']);
		$keyCurrentInterface = $url[1];

		if (array_key_exists($keyCurrentInterface, $this->interfaces)) {
			return $this->interfaces[$keyCurrentInterface];
		}
	return $this->interfaces['default'];		
	}

	public function getEnvironFolder($env ='')
	{
		if ($env == '') {
			$environ = $this->getEnviron();
			return $environ['folder'];
		} else {
			if (array_key_exists($env, $this->interfaces)) {
				return $this->interfaces[$env]['folder'];
			}
		}
	}
}

?>