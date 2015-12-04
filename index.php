<?php
	//first phase
	ini_set('display_errors','on');
	//inf errores 
	error_reporting(E_ALL);
	// it could be in another file
	/*echo DS.'</br>';
	echo ROOT.'</br>';
	echo APP.'</br>';
	echo APP_W.'</br>';
	*/
	
	//echo $_SERVER['REQUEST_URI'];
	include 'config.php';
	require 'sys/core.php';
	require 'sys/helper.php';
	require 'sys/registry.php';
	require 'sys/session.php';
	$conf=Registry::getInstance();
	$conf->welcome='Hola';
	$msg=$conf->welcome;
	//Coder::code($msg);
	//Coder::codear($conf);
	Core::init();
	//session::start();
	//session::set("Erik", "Straight outtta Session");
	$ses=Session::get("Erik");
	//Coder::codear($ses);
	//session::delete("Erik");
	//session::end();

?>