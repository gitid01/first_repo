<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];

	if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name)){
	$user_id=random_num(10);
	$query="insert into users(user_id,user_name,password) values('user_id','user_name','password')";
	mysqli_query($con,$query);
	header("Location:login.php");
	die;
}else{
	echo "Enter valid e-mail or password";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
			<div style="font-size: 20px;margin: 10px;color: blueviolet;">Signup</div>
			<input id="text"type="text"name="user_name"><br><br>
			<input id="text"type="password"name="password"><br><br>
			<input id="button"type="submit"value="signup"><br><br>
			<a href="login.php">Login</a><br><br>
		</form>
	</div>
	</div>
</body>
</html>