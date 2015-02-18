<?php 


$routes = array(

	'product' => array('type'=>'get','route'=>'/products','action'=>'products:products@index'),
	'Adminproduct' => array('type'=>'get','route'=>'/products','action'=>'products:products@index','prefix'=>'admin'),
	'productEdit' => array('type'=>'get','route'=>'/products/:id','action'=>'products:products@edit','prefix'=>'admin'),
	'productDelete' => array('type'=>'get','route'=>'/products/delete/:id','action'=>'products:products@delete','prefix'=>'admin'),
	'productUpdate' => array('type'=>'post','route'=>'/products/update/:id','action'=>'products:products@update','prefix'=>'admin'),
);