<?php 
session_start();

// Different globel variabels
$GLOBALS['config'] 	= array(

	'mysql' 			=> array(
		'host'			=> '127.0.0.1',
		'username' 		=> 'root',
		'password' 		=> '',
		'db'			=> 'progress'
	),
	'remember' 			=> array(
		'cookie_name'	=> 'hash',
		'cookie_expire'	=> 1209600 // 14 days in seconds
	),
	'session'			=> array(
		'session_name' 	=> 'user'
	)

); 

// Autoload classes that are needed
spl_autoload_register(function($class) {
	require_once 'classes/'. $class .'.php';
});

// Include function
require_once 'functions/sanitize.php';
require_once 'functions/header.php';

 ?>