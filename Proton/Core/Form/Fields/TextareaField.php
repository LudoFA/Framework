<?php 

namespace Core\Form\Fields;
use Core;

use Core\Form\Field;
/**
* Inputfield
*/
class TextareaField extends Field
{
	function __construct($name,$data,$rules)
	{
		parent::__construct($name,$data,$rules);
        $this->options = array(
            'rows' => "25",
            'cols' => "50",
            'class' => ''
        );
	}

	public function field($options = array())
	{
        $classes = "";
        $options = array_merge($this->options, $options);
        if(isset($options['class'])) $classes = "class='".$options['class']."'";
		$input = "<textarea  name='".$this->name."' id='input".$this->name."' $classes rows='".$options['rows']."' cols='".$options['cols']."'>".$this->data."</textarea>";
		return $input;
	}

	public function label($label)
	{
		return "<label>$label</label>";
	}

}

