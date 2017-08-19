<?php 

	class HomeController 
	{

		protected $function;
		protected $get;

		function __construct( $function = array() , $get = array() , $post = array() )
		{

			if ( !empty( $function ) ) return $this->$function( $get );

		}

		

		public function index( $get = array() , $post = array() ) {}

		public function index_static( $get = array() , $post = array() )
		{
			

			if( !empty($get) ) var_dump( $get );	
			if( !empty($post) ) var_dump( $post );	

			new view( '/some' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_post( $get = array() , $post = array() )
		{
			

			if( !empty($get) ) var_dump( $get );	
			if( !empty($post) ) var_dump( $post );	

			new view( '/some' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_get( $get = array() , $post = array() )
		{
			

			if( !empty($get) ) var_dump( $get );	
			if( !empty($post) ) var_dump( $post );	

			new view( '/some' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

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