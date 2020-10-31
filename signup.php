<?php  
session_start();
if (isset($_SESSION['id'])) {
	header("Location: landing.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="style.css">
<body>
	<?php
	if (isset($_GET['msg'])) {
		if ($_GET['msg']=="success") {
			echo "<script>alert('success')</script>";
		}
		else if ($_GET['msg']=="fail") {
			echo "<script>alert('Error')</script>";
		}
	}
	?>
	<form method="POST" action="submit.php" class="box">
		
	<h1>SignUp Here</h1>
		<input type="text" name="name" placeholder="Enter Name" required autofocus>
		<input type="email" name="email" placeholder="Enter E-Mail" required>
		<input type="password" name="pass" placeholder="Enter Password" required>

		<input type="submit" name="submit" value="Sign up">


	</form>

</body>
</html>