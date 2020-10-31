<?php  
if (isset($_POST['login'])) {
	include("connectdb.php");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM kiit WHERE email='$email'";
	$get = mysqli_query($connect,$sql);


	if (mysqli_num_rows($get)>0) {
		
		$row = mysqli_fetch_assoc($get);


		$passCheck = password_verify($pass, $row['pass']);
		if ($passCheck == false) {
			header("Location: index.php?error=pass");
			exit();
		}
		else if ($passCheck == true) {
			session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			$_SESSION['name']=$row['name'];
			header("Location: landing.php");
			exit();
		}
	}
	else 
	{
		header("Location: index.php?error=email");
		exit();
	}
}
?>