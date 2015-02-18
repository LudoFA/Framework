<?php 

namespace Core;

use \Core\Debug as Debug;
use \App\Config\Config;
use App\Helper\Helper;

/**
* 
*/
class View extends Object
{
	public $layout;
	public $vars;
	public $module;
	protected $app;
    public $helper;

    private $tabCss;
    private $tabJs;

	function __construct($app) {
		$this->layout = Config::$layout;
		$this->vars = array();
		$this->app = $app;
        $this->helper = new Helper();
        $this->tabCss = array();
        $this->tabJs = array();
	}

	public function render($action)
	{	
		$this->vars['app'] = $this->app;
		$this->vars['Helper'] = $this->helper;
		$this->vars['View'] = $this;
		extract($this->vars);
		
		// On defini le repoertoire du template qui est celui du modules en cours
		$this->app->view->setTemplatesDirectory('App'.DS.'modules'.DS.$this->module.DS.'views');
		// On associe les variables
		$this->app->view->setData($this->vars);
		
		// On capture dans content_for_layout le contenu du rendu de la page de l'action
		$content_for_layout = $this->app->view->fetch($action.'.php');
		// die($content_for_layout);
		if (Config::$debug) {
			$debug_bar = Debug\Debug::affDebug();
		}
		// On insert le layout (a modifier ici l'admin par defaut)
		$layout = 'App'.DS."Themes".DS.$this->layout.DS.'layout.php';
		// die($layout);
		require $layout;
	}	

	public function renderWithHeader($action,$options)
	{
		// $this->preRender();
		$this->vars['app'] = $this->app;
		$this->vars['view'] = $this;
		extract($this->vars);
		
		// On defini le repoertoire du template qui est celui du modules en cours
		$this->app->view->setTemplatesDirectory('App'.DS.'modules'.DS.$this->module.DS.'views');
		// On associe les variables
		$this->app->view->setData($this->vars);
		foreach ($options['headers'] as $key => $value) {
			$this->app->response->headers->set($key,$value);
		}

		// On capture dans content_for_layout le contenu du rendu de la page de l'action
		$this->app->render($action.'.php');
	}

	public function renderController($action)
	{
		// $this->request = new Request();
		// Router::parse($action,$this->request);
		$tab = explode("/", $action);
		$controller = Controller::loadController($tab[0],$tab[1]);
		$controller->$tab[2]();
		extract($controller->view->vars);
		require 'App'.DS.'modules'.DS.$tab[0].DS.'views'.DS.$tab[2].'.php';
	}


	public function setLayout($layout)
	{
		$this->layout = $layout;
	}
	public function getApp()
	{
		return $this->app;
	}
	public function error($value)
	{
		// $this->layout = 'error';
		// $layout = 'app'.DS.Application::$config.DS.'layout'.DS.$this->layout.'.lyt.php';
		// header("HTTP/1.0 404 Not Found");
		// $content_for_layout = $value;
		// require $layout;
		// 
		die("Error : $value");
	}


	public function addCss($path)
	{
        $this->tabCss[] = $path;
	}


	public function css($file)
	{

		return  '<link href="'.BASE_URL.'/'.'App/Themes/'.$this->layout.$file.'" rel="stylesheet">';
	}

	public function js($file)
	{
        return '<script src="'.BASE_URL.'/'.'App/Themes/'.$this->layout.$file.'"></script>';
	}


	public function includeCSS()
	{
        $str = "";
        foreach($this->tabCss as $k => $v){
            $str .= '<link href="'.BASE_URL.'/'.$v.'" rel="stylesheet">';
        }
        return $str;

	}
	public function includeJS()
	{
        $str = "";
        foreach($this->tabCss as $k => $v){
            $str .='<script src="'.BASE_URL.'/'.$v.'"></script>';
		}
		return $str;
	}
}

 ?>