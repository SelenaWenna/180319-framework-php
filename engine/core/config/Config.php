<?php 

namespace engine\core\config;

/**
* 
*/
class Config
{
	
	public static function getConfigByGroup($key, $group = 'main')
	{
		$groupItems = static::loadConfig($group);

		$tmp = $groupItems[$key];

		return isset($tmp) ? $tmp : null;
	}

	public static function loadConfig($group)
	{
		$path = ROOT_DIR . '/app/uts/config/' . $group . '.php';

		if (file_exists($path)) {
			
			$items = require_once $path;

			if (is_array($items)) {
				return $items;
			} else {
				throw new \Exception(
					sprintf('Файл %s не является конфигурационным.', $path)
				);
			}

		} else {
			
			throw new \Exception(
				sprintf('Невозможно загрузить файл конфигурации. Файл %s не найден.', $path)
			);
		}
	}
}

?>