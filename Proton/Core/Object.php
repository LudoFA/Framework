<?php 
namespace Core;
/**
* Classe à la base de tout
*/
class Object
{
	/**
	* Tableau contenant les information principale de l'objet 
	* name => Nom de l'objet
	* description => Decription de l'objet
	* version => Version de l'objet
	* created_at => Date de creation
	* modify_at => Date de modification
	* author => Auteur
	*  
	*/
	protected   $about = array();
	
	function __construct()
	{
	}

	public function getAbout($prop = "")
	{
		if ($prop == "") {
			return $this->about;
		}
		else
			return $this->about[$prop];
	}

	public function to_string()
    {
    	$ret = "";
    	foreach ($this->about as $key => $value) {
    		$ret .= "$key => $value <br>";
    	}
        return $ret;
    }
}

?>