<?php 

namespace Core;

use Core\Helper;
use \App\Config\Config;

/**
* 
*/
class Application extends Object
{
	static public $config = '';
	public static $slim = "";
	public $router = "";

	function __construct($config = 'default')
	{
		self::$config = $config;

		$this->request = new Request();
		self::$slim = new \Slim\Slim();
		self::$slim->config('debug',false);
		$this->router = new Router(self::$slim);
		
		// $routes = self::$slim->router->getNamedRoutes();
		// foreach($routes as $route) { 
		// 	$result[$route->getName()] = $route->getPattern(); 
		// } 
		// var_dump($result);

		self::$slim->run();
	}

	public static function getSlim()
	{
		return self::$slim;
	}

	private function error($message)
	{
		$view = new View();
		$view->error($message);
	}
	


}


 ?>