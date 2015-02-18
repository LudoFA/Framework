<?php 

namespace Core\Form\Fields;
use Core;

use Core\Form\Field;
/**
* Inputfield
*/
class InputField extends Field
{
	private $type;
	function __construct($name,$data,$rules,$type)
	{
		parent::__construct($name,$data,$rules);
		$this->type = $type;
	}

	public function field($options = array())
	{
        $classes = "";
        $options = array_merge($this->options,$options);
        if(isset($options['class'])) $classes = "class='".$options['class']."'";

        $input = "<input  type=\"".$this->type."\" name=\"".$this->name."\" $classes id=\"input".$this->name."\" value=\"".$this->data."\">";
		return $input;
	}
	
	public function label($label)
	{
		return "<label for='".$this->name."'>$label</label>";
	}

}


/**
 * LIST DE TOUT LES TYPES D'INPUT
 * button
 * checkbox
 * color
 * date
 * datetime
 * datetime-local
 * email
 * file
 * hidden
 * image
 * month
 * number
 * password
 * radio
 * range
 * reset
 * search
 * submit
 * tel
 * text
 * time
 * url
 * week 
 */