<?php 

	class RBconnect
	{
		
		function __construct( $var )
		{

			class_alias('\RedBeanPHP\R','\R');
			
			R::setup( 'mysql:host=' . $var['localhost'] . '; dbname=' . $var['database'] . '', $var['user'] , $var['password'] );

		}
	}