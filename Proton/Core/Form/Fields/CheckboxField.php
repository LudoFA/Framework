<?php 

namespace Core\Form\Fields;
use Core;

use Core\Form\Field;
/**
* Inputfield
*/
class CheckboxField extends Field
{
	private $type;
	function __construct($name,$data,$rules,$type)
	{
		parent::__construct($name,$data,$rules);
		$this->type = $type;
	}

	public function field($options = array(),$label= "")
	{
        $classes = "";
        $options = array_merge($this->options,$options);

        if(isset($options['class'])) $classes = "class='".$options['class']."'";
        if($this->data != 0) $checked = "checked";

        $input = "<input   name=\"".$this->name."\" $checked value=\"1\" type=\"checkbox\" id=\"input".$this->name."\" $classes>";
		return $input;
	}
	public function fieldRounded($options = array(),$label= "")
	{
        $classes = "";
        $options = array_merge($this->options,$options);

        if(isset($options['class'])) $classes = "class='".$options['class']."'";
        if($this->data != 0) $checked = "checked";

        $input = "<label for=\"input".$this->name."\" class=\"checkbox\">$label &nbsp;&nbsp;";
        $input .= "<input   name=\"".$this->name."\" $checked value=\"1\" type=\"checkbox\" id=\"input".$this->name."\" class=\"checkbox $classes\">";
        $input .= "<span class=\"rounded\"></span>";
        $input .= "</label>";
		return $input;
	}

	public function fieldSwitch($options = array(),$label= "")
	{
        $classes = "";
        $options = array_merge($this->options,$options);

        if(isset($options['class'])) $classes = "class='".$options['class']."'";
        $input = "<label for=\"input".$this->name."\" class=\"checkbox\">$label &nbsp;&nbsp;";
        $input .= "<span class=\"switch\">";
        $checked = "";
        if($this->data != 0) $checked = "checked";
        $input .= "<input name=\"".$this->name."\" $checked  value=\"1\" type=\"checkbox\" id=\"input".$this->name."\" class=\"checkbox $classes\">";
        $input .= "<span class='switch-container'>";
                $input .= "<span class='on'>OUI</span>";
                $input .= "<span class='mid'></span>";
                $input .= "<span class='off'>NON</span>";
            $input .= "</span>";
        $input .= "</span>";
        $input .= "</label>";
		return $input;
	}
	
	public function label($label)
	{
		return "<label>$label</label>";
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