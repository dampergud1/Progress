<?php 
require_once 'core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$user = new User();

		$remember = (Input::get('remember') === 'on') ? true : false;
		$login = $user->login(Input::get('loginemail'), Input::get('loginpass'), $remember);
		if($login) {
			Redirect::to('dashboard.php');
		} else {
			echo '<p>Sorry, that username and password wasn\'t recognised.</p>';
		}
	}
}

 ?>