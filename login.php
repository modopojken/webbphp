<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<title>Den hemliga sidan</title>
</head>
<body>
<?php
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


		if($username == $loginCredentials['username'] && $password == password_verify($password, $loginCredentials['password']))
		{
			echo "<h1>Welcome to the dark side</h1>";
		}
		elseif ($username != $loginCredentials['username'] || $password != $loginCredentials['password']) {

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
</body>
</html>