<?php 
namespace Core;
/**
* 
*/
class Request extends Object
{
	public $url = "";
	public $data = false;

	function __construct()
	{
		$this->url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';	
		if(!empty($_POST)){
			$this->data = new \stdClass();
			foreach ($_POST as $k => $v) {
				$this->data->$k = $v;
			}
		}
	}
}


?>