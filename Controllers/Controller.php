<?php 

	class Controller 
	{

		protected $function;
		protected $get;

		function __construct( $function = array() , $get = array() )
		{

			if ( !empty( $function ) ) return $this->$function( $get );


		}

		private function index(){}

		public function index_static( $get  = array() )
		{

			echo 'static';
			if( !empty($get) ) var_dump( $get );	

			
			new view( '/home' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_post( $get  = array() )
		{
			$smth  = R::findOne( 'smth', ' id=2 ');
			foreach ($smth as $key => $value) 
			{
				echo $value . '<br>';
			}
			echo 'post';
			if( !empty($get) ) var_dump( $get );	
			
			
			new view( '/home' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_get( $get  = array() )
		{

			echo 'get';
			if( !empty($get) ) var_dump( $get );

			if ( !empty( $_POST['ok'] ) and $_POST['ok'] == '1' )
			{

				$smth = R::dispense( 'smth' );
				$smth->smth = '10';
				$smth->text = $_POST['text'];
				R::store( $smth );
				return new view( '/home' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );

			}
			
			var_dump($_POST);
				
			
			new view( '/home' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function get()
		{

			# code here...

		}

		public function post()
		{


			# code here...

		}

	}