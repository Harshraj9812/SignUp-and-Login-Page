<?php  
session_start();
if (!isset($_SESSION['email'])) 
{
	header("Location: index.php?error=login");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>You Are In</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<div class="box">
			<h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
			<button class="" onclick="window.location.href='logout.php'">LOG OUT</button>
		</div>
	</div>

</body>
</html>