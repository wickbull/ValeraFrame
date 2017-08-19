<?php 

$errors[] = '<center>Controller is created in "root/Controllers" , <b>if this message will show second time, in file "ROOT/Engine/Routing/router.php" and in class Router::post() can\'t read controller on line:42!</b></center><br>';
$file = fopen( __CONTROLLERS__ . '/' . $router['router']['controller'] . '.php' , 'w' );

$text = 
'<?php 

	class ' . $router['router']['controller'] . ' 
	{

		protected $function;
		protected $get;

		function __construct( $function = array() , $get = array() )
		{

			if ( !empty( $function ) ) return $this->$function( $get );

		}


		public function ' . $router['router']['function'] . '( $get = array() ){}

		public function ' . $router['router']['function'] . '_static( $get = array() )
		{
			
			echo \'<center style="background:#81FF81">static::' . $router['router']['controller'] . '</center>\';

			if( !empty($get) ) var_dump( $get );	

			new view( \'/index\' , [\'ThisIsArrayID\' => \'ThisIsArrayArgument\'] );   // $variable[\'ThisIsArrayID\']  ->>> in template

		}

		public function ' . $router['router']['function'] . '_post( $get = array() )
		{
			
			echo \'<center style="background:#81FF81">post::' . $router['router']['controller'] . '</center>\';

			if( !empty($get) ) var_dump( $get );	

			new view( \'/index\' , [\'ThisIsArrayID\' => \'ThisIsArrayArgument\'] );   // $variable[\'ThisIsArrayID\']  ->>> in template

		}

		public function ' . $router['router']['function'] . '_get( $get = array() )
		{
			
			echo \'<center style="background:#81FF81">get::' . $router['router']['controller'] . '</center>\';

			if( !empty($get) ) var_dump( $get );	

			new view( \'/index\' , [\'ThisIsArrayID\' => \'ThisIsArrayArgument\'] );   // $variable[\'ThisIsArrayID\']  ->>> in template

		}

	}';

fwrite( $file , $text );