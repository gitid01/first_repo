<?php
session_start();
include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];

	if(!empty($user_name)&&!empty($password)&&!is_numeric($user_name)){
	$user_id=random_num(10);
	$query="select * from users='$id'limit 1";
	$res=mysqli_query($con,$query);
	if($res){
		if($res && mysqli_num_rows($res)>0){
			$user_data=mysqli_fetch_assoc($res);
			if($user_data['password']===$password){
				$_SESSION['user_id']=$user_data['$user_id'];
				header("Location:index.php");
	            die;
			}
		}
	}
	echo "Enter valid e-mail or password";
}else{
	echo "Enter valid e-mail or password";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: blueviolet;">Login</div>
			<input id="text"type="user_name"name="user_name"><br><br>
			<input id="text"type="password"name="password"><br><br>
			<input id="button"type="submit"value="login"><br><br>
			<a href="signup.php">Signup</a><br><br>
		</form>
	</div>
	</div>
</body>
</html>