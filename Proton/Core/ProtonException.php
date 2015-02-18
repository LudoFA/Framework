<?php 
namespace Core;

/**
* Classe gérant les execption 
*/

class ProtonException extends \Exception
{
	public function __construct($message, $code = 0)
	{
		parent::__construct($message, $code);
	}

	public function __toString()
	{
		return "Proton Exception : ".$this->message;
	}
}
