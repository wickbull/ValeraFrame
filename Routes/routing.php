<?php 

	return array(

		array(
			'url' => '/index',
			'controller' => 'IndexController',
			'function' => 'index',
		),

		array(
			'url' => '/index',
			'var' => '/var1/var2',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'IndexController',
			'function' => 'index',
		),

	);