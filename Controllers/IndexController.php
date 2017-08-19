<?php 

	class IndexController 
	{

		protected $function;
		protected $get;

		function __construct( $function = array() , $get = array() )
		{

			if ( !empty( $function ) ) return $this->$function( $get );

		}


		public function index( $get = array() ){}

		public function index_static( $get = array() )
		{
			
			echo '<center style="background:#81FF81">static::IndexController</center>';

			if( !empty($get) ) var_dump( $get );	

			new view( '/index' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_post( $get = array() )
		{
			
			echo '<center style="background:#81FF81">post::IndexController</center>';

			if( !empty($get) ) var_dump( $get );	

			new view( '/index' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_get( $get = array() )
		{
			
			echo '<center style="background:#81FF81">get::IndexController</center>';

			if( !empty($get) ) var_dump( $get );	

			new view( '/index' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

	}