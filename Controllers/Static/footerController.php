<?php 

	class footerController
	{
		
		function __construct( $language = array() )
		{

			new view( '/Static/footer' , ['language' => $language] );
		
		}
	}