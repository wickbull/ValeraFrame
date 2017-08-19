<?php 

	class VarUrl
	{

		public function routingVithVar( $var = array() )
		{

			foreach ($var as $key => $value) 
			{
				
				if ( !empty( $value['var'] ) )
				{

					$route[] = $value;
					
				}

			}




			$url = explode( '/' , URI );	

			foreach ($route as $key => $value)
			{

				$routing = explode( '/' , $value['url'] );

				foreach ($routing as $key => $val) 
				{

					if ( !empty( $url[$key] ) and $url[$key] == $val and $url[$key] != '' )
					{
						
						$ROUTING = $value;
						$URL['url'][] = $url[$key];	

					}

				}
				break;

			}

			if ( !empty( $ROUTING ) ) 
			{

				$ROUTINGvar = explode( '/' , $ROUTING['var'] );

				foreach ( $ROUTINGvar as $key => $value ) 
				{
					
					if( $value != '' ) $routingVar[] = $value;

				}

			}

			foreach ($url as $key => $value) 
			{
				
				if ( $value != '' ) $uri[] = $value;

			}

			foreach ($uri as $key => $value) 
			{

				if ( empty( $URL['url'][$key] ) ) $URL['var'][] = $value;

			}

			if ( !empty( $URL['var'] ) )
			{

				foreach ( $URL['var'] as $key => $value ) 
				{

					if( !empty( $routingVar[$key] ) ) $waypoint['var'][/*$routingVar[$key]*/] = $value;
					else 
					{ 
						$errors[] = '<center>ERROR: 404 - NOT FOUND!</center>';
					}

				}

			}
			
			if ( !empty( $URL['url'] ) )
			{ 
				$waypoint['url'] = $URL['url'];
				$strWaypoint = implode("/" , $waypoint['url'] );
				$uriWaypoint = '/'.$strWaypoint;
			}

			foreach ($var as $key => $value) 
			{

				if ( !empty( $uriWaypoint ) and $uriWaypoint == $value['url'] and !empty( $value['var'] ) and !empty( $waypoint['var'] ) ) 
				{

					$routerInfo = $value;
					$urlWayPoint['url'] = $waypoint['url'];
					break;

				}
				else if (!empty( $uriWaypoint ) and  $uriWaypoint == $value['url'] and !array_key_exists('var', $value) ) 
				{
					
					$routerInfo = $value;
					$urlWayPoint['url'] = $uriWaypoint;
					break;

				}
								
			}

			if ( !empty( $routerInfo['var'] ) ) $varI = explode( '/' , $routerInfo['var']);

			if ( !empty( $varI ) )
			{

				foreach ($varI as $key => $value) 
				{
					if ( $value != '' ) $varInfo[] = $value;
				}

			}
					
			if ( !empty( $varI ) )
			{

				foreach ($varInfo as $key => $value) 
				{

					if ( !empty( $waypoint['var'][$key] )) $urlWayPoint['var'][$value] = $waypoint['var'][$key];

				}

			}

			if ( empty( $errors ) )
			{

				if ( !empty( $urlWayPoint ) )
				{

					return $info = array( 
							'info' => $urlWayPoint ,
							'router' => $routerInfo
						);

				}
				else if ( empty( $urlWayPoint ) and !empty( $routerInfo ) )
				{ 

					return $info = array( 
							'info' => $uriWaypoint ,
							'router' => $routerInfo
						);

				}
				else if ( empty( $routerInfo ) )
				{ 

					$errors[] = '<center>ERROR: THERE IS NO ONE ROUTE IN ROUTING.PHP</center>';
				
				}
				// else if ( !empty( $errors ) ) return $info['errors'] = $errors;

			} 

		}

	}