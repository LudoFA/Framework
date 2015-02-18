<?php 
namespace App;
use App\modules\tutorials\entity\Tutorial;
use Core;
use ORM;
use App\modules\tutorials\forms as TutorialForm;
/**
*  Controller Product
*/
class TutorialsController extends Core\Controller
{
	function __construct() {
		parent::__construct(); 
	}

	public function index()
	{
        $entityManager = $this->getEntityManager();
        $tutorials = $entityManager->getRepository('TutorialEntity:Tutorial')->findBy(array('validate'=>1));
        $d['tutoriaux'] = $tutorials;
        $this->set($d);
	}


    public function liste()
    {
        $entityManager = $this->getEntityManager();
        $tutorials = $entityManager->getRepository('TutorialEntity:Tutorial')->findBy(array('validate'=>1));
        $d['tutoriaux'] = $tutorials;
        $this->set($d);
    }

    public function show($id){
        $entityManager = $this->getEntityManager();
        $tuto = $entityManager->getRepository("TutorialEntity:Tutorial")->findOneBy(array('id'=>$id));
        $d['tutorial']= $tuto;
        $this->set($d);
    }

    public function admin_index(){
        $entityManager = $this->getEntityManager();
        $tutorials = $entityManager->getRepository('TutorialEntity:Tutorial')->findAll();
        $d['tutoriaux'] = $tutorials;
        $this->set($d);
    }

    public function admin_new(){
        $f = new TutorialForm\EditTutorialForm();
        $d = array("f"=>$f);
        $this->set($d);
    }

    public function admin_edit($id = ""){
        $entityManager = $this->getEntityManager();
        if($id != ""){
            $tutorial = $entityManager->getRepository('TutorialEntity:Tutorial')->findOneBy(array('id'=>$id));
            if(empty($tutorial)) $this->app->notFound();
        }
        $f = new TutorialForm\EditTutorialForm($tutorial);
        $d = array("tutorial"=>$tutorial,"f"=>$f);
        $this->set($d);
    }

    public function admin_create(){
        $validator = new Core\Form\Validator($_POST);
        $f = new TutorialForm\EditTutorialForm();
        $errors = $f->check($_POST);

        if (empty($errors)) {
            $entityManager = $this->getEntityManager();
            $tutorial = new Tutorial();
            $tutorial->setValidate($_POST['validate']);
            $tutorial->setName($_POST['name']);
            $tutorial->setDescription($_POST['description']);
            $entityManager->persist($tutorial);
            $entityManager->flush();
            $this->app->flash('success',"Modification bien enregistr�e !!");
            $this->app->redirect($this->app->urlFor('tutorial_admin_list'));
        }
        else{
            $this->app->flash('warning',$errors);
            $this->app->redirect($this->app->urlFor('tutorial_admin_new'));
        }
    }

    public function admin_update($id){
        //die();
        $entityManager = $this->getEntityManager();
        $tutorial = $entityManager->getRepository('TutorialEntity:Tutorial')->findOneBy(array('id'=> $id));

        $validator = new Core\Form\Validator($_POST);
        $f = new TutorialForm\EditTutorialForm($tutorial);
        $errors = $f->check($_POST);

        if (empty($errors)) {

            if(isset($_POST['validate']))
                $tutorial->setValidate($_POST['validate']);
            else
                $tutorial->setValidate(0);
            $tutorial->setName($_POST['name']);
            $tutorial->setDescription($_POST['description']);
            $entityManager->persist($tutorial);
            $entityManager->flush();
            $this->app->flash('success',"Modification bien enregistr�e !!");
            $this->app->redirect($this->app->urlFor('tutorial_admin_list'));
        }
        else{
            $this->app->flash('warning',$errors);
            $this->app->redirect($this->app->urlFor('tutorial_admin_edit',array('id'=>$id)));
        }
    }


    public function admin_delete($id)
    {
        $entityManager = $this->getEntityManager();
        $tutorial = $entityManager->getRepository('TutorialEntity:Tutorial')->findOneBy(array('id'=>$id));
        $entityManager->remove($tutorial);
        $entityManager->flush();
        $this->app->flash('success',"Suppression r�ussi !!");
        $this->app->redirect($this->app->urlFor('tutorial_admin_list'));

    }

}


