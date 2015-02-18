<?php 
namespace App;
use Core;
use ORM;
use App\modules\products\forms as ProductFrom;

/**
*  Controller Product
*/
class ProductsController extends Core\Controller
{
	function __construct() {
		parent::__construct(); 
	}

	public function index()
	{
		$entityManager = $this->getEntityManager();
		$products = $entityManager->getRepository('ProductEntity:Product')->findAll();
		$d['products'] = $products;
		$this->set($d);
	}


	public function admin_edit($id)
	{	
		$entityManager = $this->getEntityManager();
		$products = $entityManager->getRepository('ProductEntity:Product')->findOneBy(array('id'=>$id));
        if(empty($products)) $this->app->notFound();
        $f = new ProductFrom\EditProductForm();
        $d = array("product"=>$products,"f"=>$f);
		$this->set($d);
	}

	public function admin_delete($id)
	{	
		$entityManager = $this->getEntityManager();
		$products = $entityManager->getRepository('ProductEntity:Product')->findOneBy(array('id'=>$id));
		$entityManager->remove($products);
		$entityManager->flush();
		$this->app->flash('success',"Suppression réussi !!");
		$this->app->redirect($this->app->urlFor('Adminproduct'));

	}

	public function admin_update($id)
	{
		$validator = new Core\Form\Validator($_POST);
        $f = new ProductFrom\EditProductForm();
        $errors = $f->check($_POST);

		if (empty($errors)) {
			$entityManager = $this->getEntityManager();
			$product = $entityManager->getRepository('ProductEntity:Product')->findOneBy(array('id'=> $id));
			$product->setName($_POST['name']);
			$product->setDescription($_POST['description']);
			$entityManager->persist($product);
			$entityManager->flush();
			$this->app->flash('success',"Modification bien enregistrée !!");
			$this->app->redirect($this->app->urlFor('Adminproduct'));
		}		
		else{
			$this->app->flash('warning',$errors);
			$this->app->redirect($this->app->urlFor('productEdit',array('id'=>$id)));
		}
	}

	public function admin_index()
	{
		$entityManager = $this->getEntityManager();
		$products = $entityManager->getRepository('ProductEntity:Product')->findAll();
		$d['products'] = $products;
		$this->set($d);
	}
}


