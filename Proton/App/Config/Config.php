<?php 
namespace App\Config;
/**
*
*/
class Config 
{
	public static $database = array(
	    'driver'   => 'pdo_mysql',
	    'user'     => 'root',
	    'password' => 'bddrotax',
	    'dbname'   => 'proton',
	);		
	public static $debug = true;
	
	public static $layout = "Site";

	public $salt = "ESihAOzMNE5tU2KmeqAg";

	public static $modules = array(
		/*'games' => array(
				'path' => "modules",
				'routes' => 'routes.php',
				'entity' => array(
					'directory' =>  'App/modules/games/entity',
					'namespace' =>  'App\modules\games\entity',
					'repository' => 'GameEntity'
				)
			),
		'products' => array(
				'path' => "modules",
				'routes' => 'routes.php',
				'entity' => array(
					'directory' =>  'App/modules/products/entity',
					'namespace' =>  'App\modules\products\entity',
					'repository' => 'ProductEntity'
				)
			),*/
		'medias' => array(
				'path' => "modules",
				'routes' => 'routes.php',
				'entity' => array(
					'directory' =>  'App/modules/medias/entity',
					'namespace' =>  'App\modules\medias\entity',
					'repository' => 'MediaEntity'
				)
			),
		'tutorials' => array(
				'path' => "modules",
				'routes' => 'routes.php',
				'entity' => array(
					'directory' =>  'App/modules/tutorials/entity',
					'namespace' =>  'App\modules\tutorials\entity',
					'repository' => 'TutorialEntity'
				)
			),
		'homes' => array(
				'path' => "modules",
				'routes' => 'routes.php'
			),
		'users' => array(
				'path' => "modules",
				'routes' => 'routes.php'
			)
	);

	public static $routes = array(
		'root' => array('type'=>'get','route'=>'/','action'=>'homes:homes@index'),
		'admin' => array('type'=>'get','route'=>'/','action'=>'homes:homes@index','prefix'=>'admin')
	);

	public static $handlerRoute = array(
		'error' => array('theme' => 'Admin','file'=>"error"),
		'notFound' => array('theme' => 'Admin','file'=>"notFound")
	);

	public static $prefixes = array(
		'admin' => array(
			'prefix' => 'backend',
			'theme' => 'Admin',
			'authentification' => array(
									"type" => "http"
								)
		),
		'user' => array(
			'prefix' => 'userInterface',
			'theme' => 'Default',
			'authentification' => array(
                'type'=> 'module',
                'checkRoute' => 'users:users@check',
                'loginRoute' => 'nameLoginRoute'
            )
		)
	);

}	
