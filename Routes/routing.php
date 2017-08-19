<?php 

	return array(

		array(
			'url' => '/index/var',
			'var' => '/var1/var2',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'Controller',
			'function' => 'index',
		),

		array(
			'url' => '/index/var',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'Controller',
			'function' => 'index',
		),

		array(
			'url' => '/index',
			'var' => '/zvar1/zvar2',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'Controller',
			'function' => 'index',
		),

		array(
			'url' => '/index',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'Controller',
			'function' => 'index',
		),

	);