<?php 
namespace App;
use Core;
use ORM;
/**
* 
*/
class GamesController extends Core\Controller
{
	function __construct() {
		parent::__construct(); 
	}


	public function index()
	{	
		$entityManager = $this->getEntityManager();
		$jvRepository = $entityManager->getRepository('GameEntity:JeuxVideo');
		$jeux = $jvRepository->findAll();
		$this->set(array('jeux' => $jeux));
	}
	// public function admin_index()
	// {
	// 	$orm = new ORM\ORM();
	// 	$manager = ORM\ORM::getMapper();
	// 	$d['jeux'] = $manager->findAll('games.jeu')->exec(true);
	// 	$this->set($d);
	// }
	// 
	// 
	// 
	public function user_index()
	{
		
	}

	public function export()
	{
		$entityManager = $this->getEntityManager();
		
		$jvRepository = $entityManager->getRepository('GameEntity:JeuxVideo');
		$jeux = $jvRepository->findAll();
		$this->set(array('jeux' => $jeux));
		
	}
}


