<?php

$host="localhost";
$user="root";
$password="";
$dbname="login_to_home";


if(!$con=mysqli_connect($host,$user,$password,$dbname)){
	die("failed to connect");
}
?>