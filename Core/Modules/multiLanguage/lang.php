<?php 

	class MultiLanguage
	{
		
		public function lauguage( $config )
		{

			require __MODULES__ . '/multiLanguage/chooseLang.php';

			if ( !empty( $_POST['language'] ) )
			{

				$_SESSION['language'] = $_POST['language'];
				header( 'Location: ' . URI );

			}
			
			if ( !empty( $_SESSION['language'] ) )
			{

				$chooseLang = new ChooseLang();
				$lang = $chooseLang->lang( require __LANG__ . '/' . $_SESSION['language'] . '/' . $_SESSION['language'] . '.language.php' );
				return $lang;

			}
			else if ( empty( $_SESSION['language'] ) )
			{

				$_SESSION['language'] = $config['default_language'];
				$chooseLang = new ChooseLang();
				$lang = $chooseLang->lang( require __LANG__ . '/' . $_SESSION['language'] . '/' . $_SESSION['language'] . '.language.php' );
				return $lang;

			}
			else if ( empty( $config['default_language'] ) and empty( $_SESSION['language'] ) )
			{

				exit( $config['language_error'] );

			}
			

		}

	}