<?php 

	namespace App\Controllers\Undinamic;

	use App\Models\Controller;
	use App\Models\Page;

	class Head extends Controller
	{

		public static function head( $var = array() )
		{

			Page::view( '/static/header' );

		}

	}