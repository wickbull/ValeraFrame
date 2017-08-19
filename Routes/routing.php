<?php 

	return array(



		// **********/index****************
		array(
			'url' => '/index',
			'var' => '/var',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'IndexController',
			'function' => 'index',
		),

		array(
			'url' => '/index',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'IndexController',
			'function' => 'index',
		),



		// **********/solarPanels****************
		array(
			'url' => '/solarPanels',
			'var' => '/var1',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'sPanelsController',
			'function' => 'index',
		),

		array(
			'url' => '/solarPanels',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'sPanelsIndexController',
			'function' => 'index',
		),



		// **********/inverters****************
		array(
			'url' => '/inverters',
			'var' => '/var1',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'invertersController',
			'function' => 'index',
		),

		array(
			'url' => '/inverters',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'invertersController',
			'function' => 'index',
		),



		// **********/cablesConnectors****************
		array(
			'url' => '/cablesConnectors',
			'var' => '/var1',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'cConnectorsController',
			'function' => 'index',
		),

		array(
			'url' => '/cablesConnectors',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'cConnectorsController',
			'function' => 'index',
		),



		// **********/mountingStructures****************
		array(
			'url' => '/mountingStructures',
			'var' => '/var1',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'mStructuresController',
			'function' => 'index',
		),

		array(
			'url' => '/mountingStructures',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'mStructuresController',
			'function' => 'index',
		),


		
		// ***********/accessories***************
		array(
			'url' => '/accessories',
			'var' => '/var1',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'accessoriesController',
			'function' => 'index',
		),

		array(
			'url' => '/accessories',
			'rule' => '/([^a-zA-Z0-9_])/i',
			'controller' => 'accessoriesController',
			'function' => 'index',
		),	

		

		

	);