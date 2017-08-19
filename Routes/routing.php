<?php 

	return array(



		// **********/index****************

		array(
			'url' => '/index',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'IndexController',
			'function' => 'index',
		),

		// **********/index****************

		array(
			'url' => '/catalog',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'catalogController',
			'function' => 'index',
		),

		// **********/solarPanels****************

		array(
			'url' => '/catalog/solarPanels',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'sPanelsController',
			'function' => 'index',
		),

		// **********/inverters****************
		
		array(
			'url' => '/catalog/inverters',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'invertersController',
			'function' => 'index',
		),

		// **********/cablesConnectors****************
		
		array(
			'url' => '/catalog/cablesConnectors',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'cConnectorsController',
			'function' => 'index',
		),

		// **********/mountingStructures****************
		
		array(
			'url' => '/catalog/mountingStructures',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'mStructuresController',
			'function' => 'index',
		),

		// ***********/accessories***************
		
		array(
			'url' => '/catalog/accessories',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'accessoriesController',
			'function' => 'index',
		),	

		

		

	);