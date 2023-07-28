<?php
include_once "dbc.php";
$name=$_POST['name'];
$size=$_POST['size'];
$selectvideo=$_POST['selectvideo'];


if(isset($_FILES['img']['name'])){
	move_uploaded_file($_FILES['img']['tmp_name'],"uploadimage/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	
	}

$url=$_POST['url'];
$detail=$_POST['detail'];

$date=date('d-m-y');
$query="insert into addvideo values('','$date','$name','$size','$selectvideo','$img','$url','$detail')";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewvideo.php');
	}else{
	header('location:viewvideo.php');
	}

?>