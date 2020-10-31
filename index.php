<?php  
session_start();
if (isset($_SESSION['email'])) {
	header("Location: landing.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Login</title>

	<!-- TITLE ICON -->

	<!-- <link rel = "shortcut icon" href = "../img/image.ico"> -->

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<?php

	if (isset($_GET['error'])) {

		if ($_GET['error']=="email") {

			echo "<script>alert('Wrong UserName !')</script>";

		}

		else if ($_GET['error']=="pass") {

			echo "<script>alert('Wrong Password !')</script>";

		}

		else if ($_GET['error']=="login") {

			echo "<script>alert('You must Login First')</script>";

		}
		else if ($_GET['error']=="logout") {

			echo "<script>alert('You are logged Out You Session is Destroyed')</script>";

		}

	}

	?>

	<form method="POST" action="login.php" class="box">
		
	<h1>Login</h1>
		<input type="text" name="email" placeholder="E-Mail" required autofocus>

		<input type="Password" name="pass" placeholder="Password" required>

		<input type="submit" value="Login" name="login">

		<input type="submit" onclick="navigate()" value="Sign up">


	</form>

	<script>
	function navigate()
	{
    	window.open("signup.php",'_blank');
	}
	</script>

</body>

</html>