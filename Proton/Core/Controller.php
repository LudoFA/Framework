<?php 

namespace Core;

use \Core\Bootstrap;

/**
* 
*/
class Controller extends Object{

	private $theme = "Admin";
	public $view;
	public $app;

	function __construct()
	{
		$this->app = Application::getSlim();
		$this->view = new View($this->app);
		$this->view->controller = $this;
	}

	static function loadController($module,$name)
	{
		$nameControler = ucfirst($name).'Controller';
		$file = 'App'.DS.'modules'.DS.$module.DS.'controllers'.DS.$name.'.php';
		if (!file_exists($file)) {
			self::error("Le controller $nameControler n'existe pas");
		}
		require $file;
		$nameControler = "App\\".$nameControler;
		return $nameControler;
	}

	protected function set($key,$value=null)
	{
		
		if (is_array($key)) {
			$this->view->vars += $key;
		}
		else{
			$this->view->vars[$key] = $value;	
		}
		if (isset($this->request)) {
			$this->view->vars["module"] = ucfirst(substr_replace($this->request->controller, '', -1));	
		}
	}

	public function getEntityManager()
	{
		return Bootstrap::getEntityManager();
	}
	
	private function error($message)
	{
		$view = new View();
		$view->error($message);
	}


}

