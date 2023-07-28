<?php
include_once "dbc.php";
$intro=$_POST['intro'];
$introone=$_POST['introone'];
$awarnessone=$_POST['awarnessone'];
$awarnessoned=$_POST['awarnessoned'];
$awarnesstwo=$_POST['awarnesstwo'];
$awarnesstwod=$_POST['awarnesstwod'];

if(isset($_FILES['img']['name'])){
	move_uploaded_file($_FILES['img']['tmp_name'],"uploadimage/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	
	}
$date=date('d-m-y');
$query="insert into aboutus values('','$date','$intro','$introone','$awarnessone','$awarnessoned','$awarnesstwo','$awarnesstwod','$img')";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewaboutus.php');
	}else{
	echo "sorry";
	}

?>