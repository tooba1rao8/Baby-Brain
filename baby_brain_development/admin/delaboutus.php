<?php
include_once "dbc.php";
$id=$_REQUEST['php'];
$query="delete from aboutus where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewaboutus.php');
	}else{
	header('location:viewaboutus.php');
		}
?>