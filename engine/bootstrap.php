<?php 

require_once ROOT_DIR.'/vendor/autoload.php';

use \engine\Cms;
use \engine\DI\DI;

try{
	$di = new DI();

	//Здесь добавляются зависимости
	$services = require ROOT_DIR.'/engine/config/Service.php';

	foreach ($services as $service) {
		$provider = new $service($di);
		$provider->init();
	}

	$cms = new Cms($di);
	$cms->run();

} catch (\ErrorExeption $e){
	echo $e->getMessage();
}

?>