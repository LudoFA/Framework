<?php
/**
 * Created by PhpStorm.
 * User: lfavre
 * Date: 23/12/2014
 * Time: 15:46
 */

namespace App;
use Core;

class HomesController extends Core\Controller {


    function __construct() {
        parent::__construct();
    }

    public function index(){
        $entityManager = $this->getEntityManager();
        $tutorials = $entityManager->getRepository('TutorialEntity:Tutorial')->findBy(array('validate'=>1),null,3);
        $d['tutoriaux'] = $tutorials;
        $this->set($d);
    }

    public function admin_index(){

    }
} 