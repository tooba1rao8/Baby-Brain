<?php
include_once "dbc.php";
$id=$_REQUEST['php'];
$query="delete from contactus where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewcontactus.php');
	}else{
	header('location:viewcontactus.php');
		}
?>