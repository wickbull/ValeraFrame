<?php 

$errors[] = '<center>Controller is created in "root/Controllers" , <b>if this message will show second time, in file "ROOT/Engine/Routing/router.php" and in class Router::post() can\'t read controller on line:42!</b></center><br>';
$file = fopen( __CONTROLLERS__ . '/' . $router['router']['controller'] . '.php' , 'w' );

$text = 
'<?php 

	class ' . $router['router']['controller'] . ' 
	{

		protected $function;
		protected $get;

		function __construct( $function = array() , $get = array() , $post = array() )
		{

			if ( !empty( $function ) ) return $this->$function( $get );

			echo "<center>' . $router['router']['controller'] . ' is created!</center>";

		}

		

		public function ' . $router['router']['function'] . '_static( $get = array() , $post = array() )
		{
			
			echo \'static or post or get\';

			if( !empty($get) ) var_dump( $get );	
			if( !empty($post) ) var_dump( $post );	

			new view( \'/index\' , [\'ThisIsArrayID\' => \'ThisIsArrayArgument\'] );   // $variable[\'ThisIsArrayID\']  ->>> in template

		}

		public function get()
		{

			# code here...

		}

		public function post()
		{


			# code here...

		}

	}';

fwrite( $file , $text );