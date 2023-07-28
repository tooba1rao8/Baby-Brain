<?php
include_once "dbc.php";
$id=$_REQUEST['php'];
$query="delete from admin where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewsignup.php');
	}else{
			header('location:viewsignup.php');
		}
?>