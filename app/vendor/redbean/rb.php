<?php 

	// namespace App\Vendor\ORM;

	// use RedBeanPHP;

	class Orm
	{

		private static $host;
		private static $dbname;
		private static $dbuser;
		private static $dbpassword;

		public static function host( $host )
		{

			if ( !empty( $host ) )
			{

				self::$host = $host;
				return new static;

			}

		}

		public static function dbname( $dbname )
		{

			if ( !empty( $dbname ) )
			{

				self::$dbname = $dbname;
				return new static;

			}

		}

		public static function dbuser( $dbuser )
		{

			if ( !empty( $dbuser ) )
			{

				self::$dbuser = $dbuser;
				return new static;

			}

		}

		public static function dbpassword( $dbpassword )
		{

			if ( !empty( $dbpassword ) )
			{

				self::$dbpassword = $dbpassword;
				return new static;

			}

		}



		public static function connect()
		{

			class_alias('\RedBeanPHP\R','\R');

			return R::setup( 'mysql:host=' . self::$host . '; dbname=' . self::$dbname . '', self::$dbuser , self::$dbpassword );

		}

	}