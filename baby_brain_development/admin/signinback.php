<?php
include_once "dbc.php";
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$query="select * from admin where email='$email' AND password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if($row){
	$_SESSION['hospital']=$hospital;
		$_SESSION['email']=$email;
	header('location:dashboard.php');
	}else{
	header('location:index.php');
	}

?>