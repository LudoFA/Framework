<?php 
namespace App\modules\tutorials\forms;

use Core;



/**
* Form edit
*/
class EditTutorialForm extends  Core\Form\Form
{
	function __construct($entity = null)
	{
		parent::__construct($entity);
		$this->build();
	}

	private function build($entity = null)
	{
        $this->add('validate','checkbox',array());
        $this->add('name','text',array());
		$this->add('description','textarea',array('required'));
	}
}
