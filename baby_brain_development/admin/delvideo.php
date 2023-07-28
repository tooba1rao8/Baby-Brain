<?php
include_once "dbc.php";
$id=$_REQUEST['php'];
$query="delete from addvideo where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewvideo.php');
	}else{
	header('location:viewvideo.php');
		}
?>