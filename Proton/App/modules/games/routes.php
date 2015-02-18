<?php 

$options = array(
	'headers' => array(
		'Content-Type' => 'application/json'
	)
);


$routes = array(
	'games' => array('type'=>'get','route'=>'/games','action'=>'games:games@index'),
	'user_index' => array('type'=>'get','route'=>'/users','action'=>'games:games@index','prefix'=>'user'),

	'export' => array('type'=>'get','route'=>'/games/export','action'=>'games:games@export',"options"=>$options),
);