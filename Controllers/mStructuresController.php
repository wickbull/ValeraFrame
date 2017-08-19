<?php 

	class mStructuresController 
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
			
			echo '<center style="background:#81FF81">static::mStructuresController</center>';

			if( !empty($get) ) var_dump( $get );

			$buttons = array( 
					'0' => array( '/catalog/solarPanels' , 'Сонячні панелі' , 'NULL' ),
					'1' => array( '/catalog/inverters' , 'Інвертори' , 'NULL' ),
					'2' => array( '/catalog/cablesConnectors' , 'Кабелі і конектори' , 'NULL' ),
					'3' => array( '/catalog/mountingStructures' , 'Монтажні конструкції' , 'active' ),
					'4' => array( '/catalog/accessories' , 'Комплектуючі' , 'NULL' ),
				);


			foreach ($buttons as $key => $button) 
			{
				
				if ( $button['2'] == 'NULL' ) $buttonForm[] = '<a href="' . $button['0'] . '" class="list-group-item">' . $button['1'] . '</a>';
				else if ( $button['2'] == 'active' ) $buttonForm[] = '<a href="' . $button['0'] . '" class="list-group-item ' . $button['2'] . '">' . $button['1'] . '</a>';
				
				
			}

			$sult = array( 
					'0' => array( '<a href="/index">Головна</a>' , 'NULL' ),
					'1' => array( '<a href="/catalog">Каталог</a>' , 'NULL' ),
					'2' => array( 'Монтажні конструкції' , 'active' ),
				);

			
			new view( '/catalog' , 
				[
					'sult' => $sult,
					'buttons' => $buttonForm,
				] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_post( $get = array() )
		{
			
			echo '<center style="background:#81FF81">post::sPanelsController</center>';

			if( !empty($get) ) var_dump( $get );	

			new view( '/catalog' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

		public function index_get( $get = array() )
		{
			
			echo '<center style="background:#81FF81">get::sPanelsController</center>';

			if( !empty($get) ) var_dump( $get );	

			new view( '/catalog' , ['ThisIsArrayID' => 'ThisIsArrayArgument'] );   // $variable['ThisIsArrayID']  ->>> in template

		}

	}