<?php 

namespace engine\DI;

/**
* 
*/
class DI
{
	private $contaner = [];

	public function set($key, $value)
	{
		$this->contaner[$key] = $value;

		return $this;
	}

	public function get($key)
	{
		return $this->has($key);
	}

	public function has($key)
	{
		$tmp = $this->contaner[$key];

		return isset($tmp) ? $tmp : null;
	}
}

?>