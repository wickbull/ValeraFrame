<?php 

	class VarUrl
	{

		public function post( $routes = array() , $uri = array() )
		{

			
			$uriArr = explode( '/', $uri );
			
			foreach ( $uriArr as $key => $value ) if ( $value != '' ) $url[] = $value;
			
			$routesCount = count($routes);
			$urlCount = count($url);

			for ($i=0; $i <= $routesCount - 1; $i++) if( !empty( $routes[$i]['var'] ) ) $urlRouters[$i] = $routes[$i]['url'];

			for ($i=0; $i <= $urlCount - 1; $i++) 
			{ 
				$arrayMath = $urlCount - 1 - $i + 1;
				unset($url[$arrayMath]);
				$urlImplodes[] = implode( '/' , $url);
				
			}

			$urlImplode = array_reverse($urlImplodes);

			if( !empty( $urlRouters ) ) foreach($urlRouters as $key => $value) for($i=0; $i <= $urlCount - 1; $i++ ) if( $urlRouters[$key] == '/' . $urlImplode[$i] ) $routesTRUE['url'] = array( $key => $urlRouters[$key] );

			if ( !empty( $routesTRUE['url'] ) ) foreach( $routesTRUE['url'] as $key => $value )
			{

				$routesUrlExplode = explode( '/', $value );
				$routesVarExplode = explode( '/', $routes[$key]['var'] );
				$arrayUrlRoute = array( 'routerUrl' => $routesUrlExplode , 'routerVar' => $routesVarExplode , 'uriUrl' => $uriArr , 'routes' => $routes[$key] );
			}

			if ( !empty( $arrayUrlRoute['uriUrl'] ) ) foreach( $arrayUrlRoute['uriUrl'] as $key => $value )
			{

				if( !empty( $arrayUrlRoute['routerUrl'][$key] ) and $value == $arrayUrlRoute['routerUrl'][$key] )
				{
					$urlFounded[] = $value;
				}
				else
				{
					if($value != '') $varFounded[] = $value;
				}


			}

			if( !empty( $varFounded ) ) $waypoint = array(
					'info' => array(
						'url' => $urlFounded,
						'varUnset' => $varFounded,
						),
					'router' => $arrayUrlRoute['routes']
					);

			if( !empty( $routesVarExplode ) ) foreach( $routesVarExplode as $key => $value )
			{
				if( $value != '' )
				{
					$arrVarsKey[] = $value;
				}

			}

			if( !empty( $arrVarsKey ) ) $countArrVarsKey = count($arrVarsKey);

			if( !empty( $waypoint ) ) $countWaipointVars = count($waypoint['info']['varUnset']);

			if( !empty( $countWaipointVars ) ) foreach($arrVarsKey as $key => $value)
			{
				if( $countWaipointVars == $countArrVarsKey ) 
				{
					$waypoint['info']['var'][$value] = $waypoint['info']['varUnset'][$key];

				}
			}

			if( !empty( $waypoint ) ) unset($waypoint['info']['varUnset']);
			
			if( !empty( $waypoint['info']['var'] ) ) return $waypoint;
			
		}

		public function withoutVars( $routes = array() , $uri = array() , $post = array() )
		{

			if( empty( $post ) )
			{

				foreach( $routes as $key => $value ) if( $value['url'] == $uri and empty( $value['var'] ) ) $router['router'] = $value;

				if ( !empty( $router ) ) return $router;

			}
			
		}

		public function router( $withoutVars = array() , $post = array() , $errors = array() )
		{

			if( !empty( $withoutVars ) ) return $withoutVars;
			else if ( !empty( $post) ) return $post;
			else if ( !empty( $withoutVars ) and !empty( $post ) ) return exit( $errors['505'] );
			else if ( empty( $withoutVars ) and empty( $post ) ) return exit( $errors['404'] );

		}


	}