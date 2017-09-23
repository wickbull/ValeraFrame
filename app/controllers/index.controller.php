<?php 

	use App\Models\Controller;
	use App\Models\Page;
	use App\Models\Config;

	class index extends Controller
	{


		public static function new( $info = array() )
		{

			echo '<center><div style="background:#A2FFAB"><b>It\'s "index::new()" !</div></center>';
			return Page::view( '/index' );

		}

		public static function form( $info = array() )
		{

			var_dump($_POST);
			return Page::view( '/index' );

		}

		public static function conf( $info = array() )
		{

			return Page::view( '/index' );

		}


		public static function configure( $info = array() )
		{

			// var_dump(R::findAll('online'));
			echo '<center><div style="background:#A2FFAB"><b>It\'s "index::configure()" !</div></center>';
			return Page::view( '/index' );

		}

		public static function configureForm( $info = array() )
		{

			var_dump($_POST);

		}


		public static function confForm( $info = array() )
		{

			var_dump($info);
			var_dump($_POST);
			return Page::view( '/index' );

		}

	}