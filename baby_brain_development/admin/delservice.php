<?php
include_once "dbc.php";
$id=$_REQUEST['php'];
$query="delete from services where id='$id'";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewservice.php');
	}else{
	header('location:viewservice.php');
		}
?>