<?php 

	namespace App\Models;

	use App\Models\Config;

	class Page
	{

		public static function view( $page )
		{

			require $_SERVER['DOCUMENT_ROOT'] . '/static/views' . $page . '.php';

		}

		public static function redirect( $page )
		{

			header( 'Location: ' . $page );

		}

		public static function timeRedirect( $page , $time )
		{

			header( 'Refresh: ' . $time . '; ' . $page );

		}

	}