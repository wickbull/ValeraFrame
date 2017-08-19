<?php 

	class Url
	{
		
		function __construct( $config )
		{

			$this->config = $config;

			$this->home();

		}

		public function home()
		{

			if ( URI == '/' )
			{

				if ( $this->config['autoRedirect'] == 'on' )
				{

					header( 'Location: /' . $this->config['homePage'] );

				}
				else if ( $this->config['autoRedirect'] == 'off' )
				{

					if ( $this->config['headerController'] == 'on' )
					{

						new headerController();

					}

					require __VIEWS__ . '/' . $this->config['homePage'] . '.php';

					if ( $this->config['footerController'] == 'on' )
					{

						new footerController();

					}

				}
				

			}

		}


	}