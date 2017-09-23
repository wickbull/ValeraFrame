<?php 
	
	require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
		require_once $_SERVER['DOCUMENT_ROOT'] . '/app/vendor/redbean/rb.php';

	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/config.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/uri.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/view.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/creatorController.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/controller.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/app/core/route.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/router/router.php';

	use App\Core\Route;
	// use App\Vendor\ORM\Orm;
	use App\Models\Config;
	
	
	
	// ORM
	$ORM = new Orm;
	$ORM->host( Config::db('localhost')->get() )->dbname( Config::db('database')->get() )->dbuser( Config::db('user')->get() )->dbpassword( Config::db('password')->get() )->connect();

	Route::start(); // запускаем маршрутизатор