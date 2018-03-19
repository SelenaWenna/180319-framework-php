<?php
			$this->router->add('home', '/', 'HomeController@index');
			$this->router->add('plugins', '/admin/plugins', 'PluginsController@pluginsList');
//			$this->router->add('news_single', '/news/(id:int)', 'HomeController@news');
