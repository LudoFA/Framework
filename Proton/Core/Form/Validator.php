<?php 
namespace Core\Form;
use Core;
/**
* 	validator
*/


class Validator extends Core\Object
{
	private $datas = array();

	function __construct($datas)
	{
		$this->datas = $datas;
	}

	public function check($name,$rule, $options =array())
	{
		$validator = "validate_$rule";
        return $this->$validator($name,$options);
	}


    /*
     * Notes : les validateurs doivent obligatoirement retourner true ou false;
     */
	public function validate_required($name)
	{
		return array_key_exists($name, $this->datas) && $this->datas[$name] != '';
	}
	public function validate_email($name)
	{
		return array_key_exists($name, $this->datas) && filter_var($this->datas[$name],FILTER_VALIDATE_EMAIL);
	}

	public function validate_in($name,$values = array())
	{
		return array_key_exists($name, $this->datas) && in_array($this->datas[$name],$values);
	}

}