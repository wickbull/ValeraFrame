<?php 

	class Router 
	{




		protected 
			$routing, 
			$config;




		function __construct( $routing = array() , $config = array() )
		{

			$this->route = $routing;
			$this->config = $config;

			$this->post();
			$this->get();

		}




		private function post()
		{

		

			require __ROUTING__ . VarUrl;
			$routeMethod = new VarUrl;


			$post = $routeMethod->post( $this->route , URI );
			$withoutVars = $routeMethod->withoutVars( $this->route , URI , $post );
			$router = $routeMethod->router( $withoutVars , $post , $this->config );


			if ( !empty( $router ) and array_key_exists( 'router' , $router ) and !array_key_exists( 'errors' , $router ) )
			{ 

				if ( $this->config['rule'] == 'on' )
				{

					if( ( !empty( $router['router']['var'] ) and $router['router']['var'] != NULL and !empty( $router['router']['rule'] ) and $router['router']['rule'] != NULL ) == TRUE )
					{

						foreach ( $router['info']['var'] as $key => $value) 
						{

							preg_match( $router['router']['rule'] , $value , $matches);
							if( !empty( preg_match( $router['router']['rule'] , $value , $matches) ) ) $errors[] = $this->config['invalid_type_var'];

						}

					}

				}

				if ( !file_exists( __CONTROLLERS__ . '/' . $router['router']['controller'] . '.php' ) and $this->config['controllerAutoCreate'] == 'on' ) 
				{

					require __ROUTING__ . '/postObject.php';

				}
				else if ( $this->config['controllerAutoCreate'] == 'off' )
				{

					$errors[] = $this->config['controllerAutocreateOff'];

				} 


				if( empty( $errors ) )
				{

					if ( $this->config['auditMethodsController'] == 'on' )
					{	

						require __CONTROLLERS__ . '/' . $router['router']['controller'] . '.php';
						$method = new $router['router']['controller']();
						if ( method_exists( $method, $router['router']['function'] ) == FALSE ) $errors[] = $this->config['methodSearch'] . ' => ' . $router['router']['controller'] . '::' . $router['router']['function'] . '()';

					}

				}


				if ( empty( $errors ) )
				{

					if( empty( $router['info']['var'] ) and empty( $_POST ) ) $method = 'static';
					if( !empty( $router['info']['var'] ) and empty( $_POST ) ) $method = 'post';
					if( !empty( $_POST ) and empty( $_POST['language'] ) ) $method = 'get';

				}

				if ( !empty( $method ) )
				{

					$lang = new MultiLanguage();
					
					$language = $lang->lauguage( require __ROOT__ . Config );

					if ( empty( $errors ) and $this->config['headerController'] == 'on' ) new headerController( $language );

					if ( $method == 'static' ) 
						new $router['router']['controller'] ( $router['router']['function'] . '_' . $method , $router , $language );

					else if ( $method == 'post' ) 
						new $router['router']['controller']( $router['router']['function'] . '_' . $method , $router , $language  );

					else if ( $method == 'get' and !empty( $router['info']['var'] ) ) 
						new $router['router']['controller']( $router['router']['function'] . '_' . $method , $router , $language  );

					else if ( $method == 'get' ) 
						new $router['router']['controller']( $router['router']['function'] . '_' . $method , $router , $language  );


					
					if ( empty( $errors ) and $this->config['footerController'] == 'on' ) new footerController( $language );

				}

				if ( !empty( $errors ) ) return exit( array_shift( $errors ) );



			}
		}






























































/*
			else if ( !empty( $router ) and array_key_exists( 'errors' , $router ) )
			{ 

				var_dump( $router );
				var_dump( 'ERROR!' ); 

			}
			else if ( empty( $router ) ) $errors[] = $this->config['404'];*/

			/*foreach ( $this->route as $key => $route ) 
			{

				

				if ( $route['type'] == 'post' and empty( $_POST ) )
				{
					
					$post = $route;
					break;

				}

				
				// else if ( $route['url'] == URI and $route['type'] == 'get' and empty( $_POST ) )
				// {
					
				// 	$get = $route;

				// }
				// else if ( $key != 0 and empty( $route ) )
				// {

				// 	$errors[] = '<center>THERE IS NO CONTROLLERS IN "root/Routing/routing.php"!</center><br>';
				// 	break;

				// }

			}

			if ( !empty( $post ) )
			{

				if ( !file_exists( __CONTROLLERS__ . '/' . $post['controller'] . '.php' ) and $this->config['controllerAutoCreate'] == 'on' ) 
				{

					require __ROUTING__ . '/postObject.php';

				}
				else if ( $this->config['controllerAutoCreate'] == 'off' )
				{

					$errors[] = '<center>Controller autocreate is off! Please <b>"turn on"</b> him in "ROOT/config.php"!</center><br>';

				} 
					
				if ( !empty( $post['rule'] ) )
				{


					if ( $this->config['onRouteRule'] == 'on' )
					{


						$ruleURL 				= $routeMethod->ruleURL( $roterVsUrl );
						$ruleVAR 				= $routeMethod->ruleVAR( $roterVsUrl );

						// var_dump( $ruleURL );
						// var_dump( $ruleVAR );

						preg_match("/^(http:\/\/)?([^\/]+)/i", "http://www.php.net/index", $matches);
						$URL = explode( '/' , URI );

						foreach ($URL as $key => $url) 
						{
							
							if ( !empty( $url ) )
							{

								if ( preg_match( $post['rule'] , $url ) == 1 ) 
								{

									$errors[] = $this->config['rules'];

								}

							} 

						}

					}

				}
				else
				{

					$errors[] = $this->config['rulesIsEmpty'];

				}

				if( empty( $errors ) )
				{

					require __CONTROLLERS__ . '/' . $post['controller'] . '.php';
					$method = new $post['controller']();
					if ( method_exists( $method, $post['function'] ) == FALSE ) $errors[] = $this->config['methodSearch'] . ' => ' . $post['controller'] . '::' . $post['function'] . '()';

				}

				

				if ( empty( $errors ) )
				{

					if ( $this->config['headerController'] == 'on' )
					{

						new headerController();

					}

						new $post['controller']( $post['function'] , $post );

					if ( $this->config['footerController'] == 'on' )
					{

						new footerController();

					}

				}



				if ( !empty( $errors ) ) echo array_shift( $errors );

			}
			else if ( empty( $post ) and empty( $_POST['submit'] ) and URI != '/' )
			{

				$errors[] = $this->config['pagesSearchPost'];

			}

			if ( !empty( $errors ) )
			{

				return exit( array_shift( $errors ) );

			}*/

		// }




		public function get()
		{

			// foreach ( $this->route as $key => $route ) 
			// {


				
			// 	/* FILTER FORM */
			// 	if ( !empty( $_POST['submit'] ) and !empty( $route['form'] ) and URI == $route['url'] )
			// 	{
					
			// 		$form = $route['form'];
			// 		$get = $route;

			// 	} 
			// 	else if ( $route['url'] == URI and $route['type'] == 'post' and empty( $_POST ) )
			// 	{
					
			// 		$post = $route;

			// 	}
			// 	/* FILTER FORM */

			// }


			
			// /* FILTER FORM */
			// if ( !empty( $get ) and !empty( $_POST['submit'] ) )
			// {

			// 	require __CONTROLLERS__ . '/' . $get['controller'] . '.php';

			// 	return new $get['controller']( $get['function'] , $_POST , $get );

			// 	exit;

			// }
			// /* FILTER FORM */
			// else if ( empty( $get ) and empty( $post ) and URI != '/' )
			// {

			// 	$errors[] = $this->config['pagesSearchGet']; // якась проблема, при конекті до гет ерор паше
			// 	var_dump( $this->config['pagesSearchGet'] );

			// }

			// if ( !empty( $errors ) )
			// {

			// 	return exit( array_shift( $errors ) );
				
			// }

		}

	}