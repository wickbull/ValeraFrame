<?php 

	class view
	{
		
		function __construct( $vay = array() , $variable = array() )
		{
			// var_dump($variable);
			if ( !empty( $vay ) and file_exists( __VIEWS__ . $vay . '.php' ) )
			{

				if ( empty( $variable ) )
				{

					require __VIEWS__ . $vay . '.php';

				}
				else
				{
					
					$vaiable;
					require __VIEWS__ . $vay . '.php';

				}

			}
			else
			{

				$errors[] = '<center> Wrong format way to view in controller! you write <b>' . $vay . '</b> and it should be <b>/' . $vay . '</b></center>';

			}

			if ( !empty( $errors ) ) echo array_shift( $errors );

		}
	}