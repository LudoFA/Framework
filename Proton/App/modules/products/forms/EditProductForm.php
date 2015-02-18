<?php 
namespace App\modules\products\forms;

use Core;



/**
* Form edit
*/
class EditProductForm extends  Core\Form\Form
{
	function __construct()
	{
		parent::__construct();
		$this->build();
	}

	private function build()
	{
        $this->add('name','text',array());
		$this->add('description','textarea',array('required'));
	}
}
