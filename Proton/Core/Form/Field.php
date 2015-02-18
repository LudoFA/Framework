<?php 

namespace Core\Form;
use Core;

/**
* Fields
*/
abstract class Field
{
	public $name;
    public $rules;
    public $data;
    public $options;

	function __construct($name,$data,$rules)
	{
		$this->name = $name;
		$this->rules = $rules;
		$this->data = $data;
        $this->options = array();
	}

	abstract protected function field();
	abstract protected function label($label);

    public function getName()
    {
        return $this->name;
    }

    public function getRules()
    {
        return $this->rules;
    }
}