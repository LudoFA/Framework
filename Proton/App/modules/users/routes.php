<?php 


$routes = array(

	'nameCheckRoute' => array('type'=>'get','route'=>'/check','action'=>'users:users@check'),
	'nameLoginRoute' => array('type'=>'get','route'=>'/login','action'=>'users:users@login')
);