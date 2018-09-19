<?php
session_start();
if (isset($_POST['submit'])) 
{
	$loginCredentials = [
		"username" => "jens",
		"password" => "secure"
	];

	if (isset($_POST['username']) && $_POST['password']) 
	{
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = md5($_POST['password']);

		echo $password;


		if($username == $loginCredentials['username']
			&& $password == md5($loginCredentials['password'])){
			echo "<h1>Welcome to the dark side</h1>";
		}elseif ($username != $loginCredentials['username'] || $password != $loginCredentials['password']) {
				echo "<h1>Du har angivit fel användarnamn eller lösenord blyat</h1>";
		}
		else{
			
		}
	}


	echo "<pre>" . print_r($_POST,1) . "</pre>";



}
else
{
	echo "<h1>Vad gör du här?</h1>";
}




?>