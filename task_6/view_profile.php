<?php

session_start();
include("connection.php");
include("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<style type="text/css">
	#text{
		height: 30px;
		border-radius: 5px;
		padding: 5px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: skyblue;
		border: none;
	}	
	#box{
		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	</style>
	<div id="box">
		<form method="POST">
			<div style="font-size: 20px;margin: 10px;color: blueviolet;">profile components will be updated soon...</div>
			<a href="index.php">go back</a><br><br>
		</form>
	</div>
	</div>
</body>
</html>