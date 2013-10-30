<?php 
session_start();

// Different globel variabels
$GLOBALS['config'] 	= array(

	'mysql' 			=> array(
		'host'			=> 'in-progress.dk.mysql',
		'username' 		=> 'in_progress_dk',
		'password' 		=> 'JUrGF3Kh',
		'db'			=> 'in_progress_dk'
	),
	'remember' 			=> array(
		'cookie_name'	=> 'hash',
		'cookie_expiry'	=> 1209600 // 14 days in seconds
	),
	'session'			=> array(
		'session_name' 	=> 'user',
		'token_name'	=> 'token'

	)

); 

// Autoload classes that are needed
spl_autoload_register(function($class) {
	require_once 'classes/'. $class .'.php';
});

// Include function
require_once 'functions/sanitize.php';
require_once 'functions/header.php';

// Check for users that have requested to be remembered
if(Cookie::exists(Config::get('remember/cookie_name'))) {
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}

}

 ?>