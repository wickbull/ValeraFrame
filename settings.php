<?php 

	session_start();

	require __MODULES__ . Modules;

	require __VIEW__ . View;

	require __CONTROLLERS__ . __STATIC__ . Header;
	require __CONTROLLERS__ . __STATIC__ . Footer;

	require __URL__ . Url;

	require __ROUTING__ . Router;