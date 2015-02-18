<?php 
namespace Core;
use App\Config\Config;

class Router extends Object
{

	public $app;

	function __construct()
	{
		$this->app = Application::getSlim();

		// On integre l'ensemble des routes
		$this->addRoutes(Config::$routes);
		// Integration des routes provenant des différents modules
		foreach (Config::$modules as $key => $value) {
			$path = (isset($value['path'])) ? $value['path'] : 'modules';
			$routes_file = (isset($value['routes'])) ? $value['routes'] : 'routes.php';
			$file = "App".DS.$path.DS.$key.DS.$routes_file;
			if (file_exists($file)) {
				require $file;
				$this->addRoutes($routes);
			}
		}

		// Intégration des handler routes (error, notFound) qui son en fait des pages spécifique du thème
		$this->addHandlerRoutes(Config::$handlerRoute);

	}


	
	public function call($method,$url,$action,$prefix = false,$options = array())
	{
		return $this->app->$method($url,function() use ($action,$prefix,$options){
			list($module,$rest) = explode(':', $action);
			list($controller,$action) = explode('@', $rest);
			$controller_name = Controller::loadController($module,$controller);
			$controller = new $controller_name();
			$controller->view->module = $module;
			if ($prefix) {
				// ON verifie que le prefixe exites bien dans les clé du Config::prefixes
				if (array_key_exists($prefix, Config::$prefixes)) {
					if (Config::$prefixes[$prefix]['authentification']) {
						$security = new Security(Config::$prefixes[$prefix]['authentification']);
						$security->checkSecurity();
					}
					$action = $prefix.'_'.$action;
					$controller->view->layout = Config::$prefixes[$prefix]['theme'];
				}	
				else{
					  throw new ProtonException("Le prefix n'est pas correcte");
				}
			}
			call_user_func_array(array($controller,$action),func_get_args());
            if($options == NULL) $options = array();
			if (array_key_exists('headers', $options)) {
				$controller->view->renderWithHeader($action,$options);
			}
			else{
			    $controller->view->render($action);
			}
		});
	}

	public function get($url,$action,$prefix = false,$options = array())
	{	
		return $this->call('get',$url,$action,$prefix,$options );
	}


	public function post($url,$action,$prefix = false,$options = array())
	{
		return $this->call('post',$url,$action,$prefix,$options);
 	}
	
	public function notFound($theme,$file)
	{
		return $this->callHandler('notFound',$theme,$file);
	}
	public function error($theme,$file)
	{
		return $this->callHandler('error',$theme,$file);
	}


	public function callHandler($handler,$theme,$file)
	{
		return $this->app->$handler(function(\Exception $e = null) use ($theme,$file){
			if (Config::$debug) {
				$debug_bar = Debug\Debug::affDebug();
			}
			if ($e) {
				$error = $e;
			}
			// On insert le layout (a modifier ici l'admin par defaut)
			$layout = 'App'.DS."Themes".DS.$theme.DS.$file.'.php';
			require $layout;		
		});
	}


	private function addRoutes($tab)
	{
		foreach ($tab as $k => $v) {
			$type = (isset($v['type'])) ? $v['type'] : "";
			$action = (isset($v['action'])) ? $v['action'] : "";
			$route = (isset($v['route'])) ? $v['route'] : "";
			$prefix = (isset($v['prefix'])) ? $v['prefix'] : "";
			$options = (isset($v['options'])) ? $v['options'] : "";
			if ($prefix) {
				if (array_key_exists($prefix, Config::$prefixes)) {	
					$route = '/'.Config::$prefixes[$prefix]['prefix'].$route;
				}
			}
			$this->$type($route,$action,$prefix,$options)->name($k);
		}
	}

	private function addHandlerRoutes($tab)
	{
		foreach ($tab as $k => $v) {
			$this->$k($v['theme'],$v['file']);
		}
	}

}

 ?>