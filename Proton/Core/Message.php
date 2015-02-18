<?php 

namespace Core;


/**
* Message class 
*/

class Message extends Object{

	
	function __construct()
	{
	}

	public static function affFlashMessage()
	{
		$type = '';
        $ret = '';
        if(isset($_SESSION['slim.flash'])){
            if (array_key_exists('danger',$_SESSION['slim.flash'])) {
                $type = "danger";
            }
            if (array_key_exists('success',$_SESSION['slim.flash'])) {
                $type = "success";
            }
            if (array_key_exists('info',$_SESSION['slim.flash'])) {
                $type = "info";
            }
            if (array_key_exists('warning',$_SESSION['slim.flash'])) {
                $type = "warning";
            }
            if ($type != '') {
                if (is_array($_SESSION['slim.flash'][$type])) {
                    $ret .= "<ul>";
                    foreach ($_SESSION['slim.flash'][$type] as $key => $value) {
                        $ret .= "<li>$value</li>";
                    }
                    $ret .= "</ul>";
                }
                else $ret = $_SESSION['slim.flash'][$type];
                return "<div class='alert alert-$type'>".$ret."</div>";
            }
        }
	}

}

