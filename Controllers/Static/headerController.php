<?php 

	class headerController
	{
		
		function __construct( $language = array() )
		{	
			
			new view( '/Static/header' , [ 'language' => $language ] );
		}
	}