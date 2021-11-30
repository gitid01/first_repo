<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sample task</title>
	</head>
	<body>
		<a href="logout.php">Logout</a>
		<a href="view_profile.php">View Profile</a>
		<h1>Index page</h1>
		<br>
		Hello,<?php echo $user_data['user_name'];?> 
	</body>
</html>