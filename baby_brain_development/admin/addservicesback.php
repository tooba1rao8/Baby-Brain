<?php
include_once "dbc.php";
$intro=$_POST['intro'];
$introone=$_POST['introone'];
$awarnessone=$_POST['awarnessone'];
$awarnessoned=$_POST['awarnessoned'];
$awarnesstwo=$_POST['awarnesstwo'];
$awarnesstwod=$_POST['awarnesstwod'];

$date=date('d-m-y');
$query="insert into services values('','$date','$intro','$introone','$awarnessone','$awarnessoned','$awarnesstwo','$awarnesstwod')";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewservice.php');
	}else{
	echo "sorry";
	}

?>