<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
<center>
<a href="logout.php">
<?php
	if ($user_data == null) {
		echo "log in";
	}
	else	echo "Log out"; 
	
	?></a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php
	if ($user_data == null) {
		echo "guy";
	}
	else	echo $user_data['user_name']; 
	
	?>
</center>
	
</body>
</html>