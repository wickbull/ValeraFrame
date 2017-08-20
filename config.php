<?php 

	return array(

			'headerController'			=> 'on',
			'footerController'			=> 'on',
			'controllerAutoCreate' 		=> 'on',
			'autoRedirect' 				=> 'on',
			'auditMethodsController' 	=> 'on',
			'homePage' 					=> 'index',
			'default_language'			=> 'ua',

			// ROUTING
			'rule' 						=> 'on',


			// ERRORS
			'language_error' 			=> '<center style="background:#FF6767"><b>ERROR:</b>Take default language in </b>__ROOT__\config.php</b> !</center>',
			'404' 						=> '<center style="background:#FF6767"><b>ERROR:</b> in :: <b>__ROOT__\Engine\Routing\variablesUrl.php</b> => on line 110 ; There are no one arguments, or there is no routers in :: <b>__ROOT__\Routes\routing.php</b></center>',
			'505'						=> '<center style="background:#FF6767"><b>ERROR:</b> In file \Engine\Routing\variablesUrl.php :: on line 109 ; There are worked two arguments!</center>',
			'invalid_type_var'			=> 'invalid_type_var',
			'controllerAutocreateOff'	=> '<center>Controller autocreate is off! Please <b>"turn on"</b> him in "ROOT/config.php"!</center>',
			'methodSearch'				=> '<center> цей метод не знайдений в цьому контроллері! ',



			// REDBEAN.PHP
			'localhost' 				=> '185.43.220.16',
			'database' 					=> 'olb11268_frameworkSolarPlus',
			'user' 						=> 'olb11268',
			'password' 					=> '666713max123kill',


		);