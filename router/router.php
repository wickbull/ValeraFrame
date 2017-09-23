<?php 
		
	// тут головне щоб post або get метод був в кінці, все остальне може бути де завгодно!

	use App\Core\Route;

	// POST
		Route::controller( 'index' )->method( 'configure' )->post( '/index' );
		// POST -> form( 'nameButton' )->staticView(TRUE); обов*язково вписувати value="назва метода після _ ! staticView тільки використовувати з form"
		Route::controller( 'index' )->method('configure')->form('submit')->staticView(TRUE)->post( '/index' );
		

	// GET
		Route::controller( 'index' )->method( 'conf' )->var( '/var1' )->get( '/get' );
		// GET -> form( 'nameButton' ); обов*язково вписувати value="назва метода після _ !"
		Route::controller( 'index' )->method('conf')->var( '/var1' )->staticView(TRUE)->form('submit')->get( '/get' );


	// WITHOUT VIEWS

		// POST WITHOUT VIEWS
			Route::staticView( TRUE )->controller( 'IndexPostControllerStaticOff' )->method( 'xindex' )->post( '/indexx' );

		// GET WITHOUT VIEWS
			Route::staticView( TRUE )->controller( 'GetIndexControllerStaticOff' )->method( 'xindex' )->var( '/var1' )->get( '/iex/off' );

