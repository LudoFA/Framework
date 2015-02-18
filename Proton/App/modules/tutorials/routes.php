<?php 


$routes = array(

	'tutorial_index' => array('type'=>'get','route'=>'/tutos','action'=>'tutorials:tutorials@index'),
	'tutorial_liste' => array('type'=>'get','route'=>'/tout-les-tutos','action'=>'tutorials:tutorials@liste'),
	'tutorial_show' => array('type'=>'get','route'=>'/tutorial/:id','action'=>'tutorials:tutorials@show'),
	'tutorial_admin_list' => array('type'=>'get','route'=>'/tutos','action'=>'tutorials:tutorials@index','prefix'=>'admin'),
	'tutorial_admin_new' => array('type'=>'get','route'=>'/tutorial/new','action'=>'tutorials:tutorials@new','prefix'=>'admin'),
	'tutorial_admin_create' => array('type'=>'post','route'=>'/tutorial/create','action'=>'tutorials:tutorials@create','prefix'=>'admin'),
	'tutorial_admin_edit' => array('type'=>'get','route'=>'/tutorial/edit/:id','action'=>'tutorials:tutorials@edit','prefix'=>'admin'),
	'tutorial_admin_update' => array('type'=>'post','route'=>'/tutorial/update/:id','action'=>'tutorials:tutorials@update','prefix'=>'admin'),
	'tutorial_admin_delete' => array('type'=>'get','route'=>'/tutorial/delete/:id','action'=>'tutorials:tutorials@delete','prefix'=>'admin')
);