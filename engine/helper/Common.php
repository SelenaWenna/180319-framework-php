<?php 

namespace engine\helper;

/**
* 
*/
class Common
{
	
	public static function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public static function getMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	public static function getPathUrl()
	{
		$pathUrl = $_SERVER['REQUEST_URI'];

		if ($pathUrl{strlen($pathUrl)-1} != '/') {
			$pathUrl .= '/';
		}

		if ($position = strpos($pathUrl, '?')) {
			$pathUrl = substr($pathUrl, 0, $position);
		} 
		return $pathUrl;
	}
}

?>