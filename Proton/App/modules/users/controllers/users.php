<?php
/**
 * Created by PhpStorm.
 * User: lfavre
 * Date: 23/12/2014
 * Time: 15:46
 */

namespace App;
use Core;

class UsersController extends Core\Controller {

    private $isLogin = false;

    function __construct() {
        parent::__construct();
    }

    // C'et la méthode qui sera appeler lorsque l'utilisateur a valider le formulaire de connexion
    public function checkLogin(){
        
    }

    // C'est cette méthod qui sera appeler pour afficher le formulaire => vue login
    public function login(){

    }

    // C'est la fonction de deconnexion
    public function logout(){

    }

    // Fonction OBLIGATOIREMENT IMLMENT2 (a mettre surment dans une interface)
    public function check(){
        return $this->isLogin;
    }
} 