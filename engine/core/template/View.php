<?php

namespace engine\core\template;

use engine\core\template\Theme;
use engine\core\Interfaces\Environ;

/**
* 
*/
class View
{
	private $theme;

	public function __construct()
	{
		$this->theme = new Theme();
	}

	public function render($template, $vars = [])
	{
		$environ = new Environ();
		
		$templatePath = ROOT_DIR.'/app/uts/main/view/'.$environ->getEnvironFolder().'/'.$template.'.php';

		if (!is_file($templatePath)) {
			$templatePath = ROOT_DIR.'/templates/default/'.$template.'.php';
		}

		if (!is_file($templatePath)) {
			throw new \InvalidArgumentException(
				sprintf('Template "%s" not found in "%s"', $template, $templatePath)
			);
		}

		$this->theme->setData($vars);
		extract($vars);

		ob_start();

		ob_implicit_flush(0);

		try{
			require $templatePath;
		} catch (\Exception $e) {
			ob_end_clean();
			throw $e;
		}

		echo ob_get_clean();

	}
}

?>