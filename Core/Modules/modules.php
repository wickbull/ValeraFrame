<?php  

	class Modules 
	{
		
		function __construct( $modules )
		{

			foreach ($modules as $module) 
			{

				require $module;
				
			}

		}
	}