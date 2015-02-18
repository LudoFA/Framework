<?php 

namespace Core;

/**
* Security
*/
class Security extends Object
{
	private $config;
	private $users = array('admin' => 'mypass', 'guest' => 'guest');

	function __construct($config)
	{
		$this->config = $config;
	}

	public function checkSecurity()
	{	
		switch ($this->config['type']) {
			case 'http':
				$this->HttpIdentification();
				break;
			
			case 'module':
				$this->ModuleIdentification();
				break;
			
			default:
				break;
		}
	}

	private function HttpIdentification()
	{
		$realm = 'Restricted area';
		
		if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
		    header('HTTP/1.1 401 Unauthorized');
		    header('WWW-Authenticate: Digest realm="'.$realm.'",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');
		    die('Texte utilisé si le visiteur utilise le bouton d\'annulation');
		}

	    $app = Application::getSlim();
		// analyse la variable PHP_AUTH_DIGEST
		if (!($data = $this->http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||  !isset($this->users[$data['username']])){
		    $app->flash('warning',"Vous n'avez pas le droit d'accéder à la page demandée");
			$app->redirect($app->urlFor('root'));
		}

		// Génération de réponse valide
		$A1 = md5($data['username'] . ':' . $realm . ':' . $this->users[$data['username']]);
		$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
		$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

		if ($data['response'] != $valid_response){
			$app->flash('warning',"Vous n'avez pas le droit d'accéder à la page demandée");
			$app->redirect($app->urlFor('root'));
		}
		// ok, utilisateur & mot de passe valide
		return true;
	}

	private function ModuleIdentification()
	{
        $app = Application::getSlim();
       list($module,$rest) = explode(":",$this->config['checkRoute']);
        list($controller,$action) = explode('@',$rest);
        $controller_name = Controller::loadController($module,$controller);
        $controller = new $controller_name();
        if(!$controller->$action()){
            $app->redirect($app->urlFor($this->config['loginRoute']));
        }
        return true;
	}

	// fonction pour analyser l'en-tête http auth
	private function http_digest_parse($txt)
	{
		// protection contre les données manquantes
		$needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
		$data = array();
		$keys = implode('|', array_keys($needed_parts));
		preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);
		foreach ($matches as $m) {
		    $data[$m[1]] = $m[3] ? $m[3] : $m[4];
		    unset($needed_parts[$m[1]]);
		}
		return $needed_parts ? false : $data;
	}
}