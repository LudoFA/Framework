<?php 
namespace Core;

define('AM','&'); // ampersand
define('AT','@'); // at
define('BR','<br/>'); // new HTML line
define('BS','\\'); // backslash
define('CL',':'); // colon
define('CO',','); // comma
define('DS',DIRECTORY_SEPARATOR);
define('DT','.'); // dot+
define('HR','<hr/>'); // HTML HR
define('QM','?'); // question mark
define('MN','-'); // minus
define('NB','&nbsp;'); // No Break Space
define('NL',"\n"); // new line
define('PP','|'); // pipe
define('SH','#'); // sharp / hash
define('SC',';'); // semicolon
define('SL','/'); // slash
define('SP',' '); // space
define('TB',"\t"); // tab
define('UP','..'.DIRECTORY_SEPARATOR); // Parent directory
define('US','_'); // underscore

define('BASE_DIR','atome');
define('CORE_DIR','core');
define('ORM_DIR','ORM');
define("WEBROOT", dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_THEME', BASE_URL.DS.'App'.DS.'Themes'.DS);
define('BASE_APP', BASE_URL.DS.'App'.DS);
define('BASE_ICONS', BASE_APP.'Icons'.DS);


require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use \App\Config\Config;

/**
* 
*/
class Bootstrap 
{
	
private $paths = array('App');
private $isDevMode = true;
private $entityManager;
static private $config;
static private $appSlim;

	function __construct()
	{
		// self::$config = Setup::createAnnotationMetadataConfiguration($this->paths, $this->isDevMode, null, null, false);
		// 
		// $array = array('Config::$modules['games']['entity']['GameEntity'],Config::$modules['products']['entity']['ProductEntity']');
		$tabPath = array();
		foreach (Config::$modules as $value) {
			if(isset($value['entity']['directory']) && is_dir(ROOT."/".$value['entity']['directory']))
                $tabPath[] = ROOT."/".$value['entity']['directory'];
		}
		self::$config = Setup::createAnnotationMetadataConfiguration($tabPath,$this->isDevMode, null, null, false);
		// Permet de définir un nom de namespace pour mes entités
		foreach (Config::$modules as $value) {
			//echo key($value['entity']).",".$value['entity'][key($value['entity'])]."<br>";
            if(array_key_exists('entity', $value))
    			self::$config->addEntityNamespace($value['entity']['repository'],$value['entity']['namespace']);
		}
	}

	public function getManager()
	{
		return EntityManager::create(Config::$database, self::$config);
	}

    public static function getEntityManager(){
        return EntityManager::create(Config::$database, self::$config);

    }
}




 ?>