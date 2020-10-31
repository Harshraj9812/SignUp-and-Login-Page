<?php  
if (isset($_POST['submit'])){
	include("connectdb.php");
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$hpass = password_hash($pass, PASSWORD_DEFAULT);

	date_default_timezone_set("Asia/Kolkata");

	$time = date("d.m.y/h:i:sa");

	$sql = "INSERT INTO kiit (email,pass,name,time) VALUES ('$email','$hpass','$name','$time')";
	$query = mysqli_query($connect,$sql);
	if ($query) 
	{
		header("Location: index.php?msg=success");
		exit();
	}
	else
	{
		header("Location: index.php?msg=fail");
		exit();
	}

}	

?>