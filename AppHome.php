<?php 
session_start();

	include("DatabaseConnect.php");
	include("LoginFunctions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Workout App</title>
</head>
<body>

	<a href="AppLogout.php">Logout</a>
	<h1>This is the home page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?> welcome to your home page
</body>
</html>