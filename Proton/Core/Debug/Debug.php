<?php 
namespace Core\Debug;

use Core;
use App\Config\Config;

/**
* Class Debug
*/
class Debug extends Core\Object
{
	
	function __construct()
	{
	}

	public static function affDebug()
	{
		$contenu = "Salut à tous je suis le debug";
		$titre = "Barre de débug";
		$layout = 'Core'.DS.'Debug'.DS.'view.php';
		ob_start();
		require $layout;
		$debug_content = ob_get_clean();
		return $debug_content;
	}
}