<?php
include_once "dbc.php";
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$date=date('d-m-y');
$query="insert into contactus values('','$date','$name','$contact','$email','$subject','$message')";
$result=mysqli_query($con,$query);
if($result){
header('location:messageshow.php');
	}else{
	header('location:messageshow.php');
		}

?>