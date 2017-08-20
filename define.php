<?php 

	// files define
	define( 'Settings' , '/settings.php' );
	define( 'Config' , '/config.php' );
	define( 'Router' , '/router.php' );
	define( 'Url' , '/url.php' );
	define( 'Routing' , '/routing.php' );
	define( 'Modules' , '/modules.php' );
	define( 'ModuleConfig' , '/moduleConfig.php' );
	define( 'View' , '/view.php' );
	define( 'Header' , '/headerController.php' );
	define( 'Footer' , '/footerController.php' );
	define( 'VarUrl' , '/variablesUrl.php' );

	// folders define

	define( '__ROOT__' , $_SERVER['DOCUMENT_ROOT'] );
		define( '__CONTROLLERS__' , __ROOT__ . '/Controllers' );
			define( '__STATIC__' , '/Static' );

		define( '__CORE__' , __ROOT__ . '/Core' );
			define( '__MODULES__' , __CORE__ . '/Modules' );
			define( '__COMPOSER__' , __CORE__ . '/Composer' );

		define( '__ENGINE__' , __ROOT__ . '/Engine' );
			define( '__ROUTING__' , __ENGINE__ . '/Routing' ); 
			define( '__URL__' , __ENGINE__ . '/Url' ); 
			define( '__VIEW__' , __ENGINE__ . '/View' ); 

		define( '__LANG__' , __ROOT__ . '/Lang' );

		define( '__PUBLIC__' , __ROOT__ . '/Public' );
			define( '__JS__' , __PUBLIC__ . '/Js' );
			define( '__CSS__' , __PUBLIC__ . '/Css' );
			define( '__IMG__' , __PUBLIC__ . '/Img' );
			define( '__UPLOAD__' , __PUBLIC__ . '/Upload' );

		define( '__ROUTES__' , __ROOT__ . '/Routes' );

		define( '__VIEWS__' , __ROOT__ . '/Views' );


	// functions define

	define( 'URI' , $_SERVER['REQUEST_URI'] );