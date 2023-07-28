<?php
include_once "dbc.php";
$fname=$_POST['fname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_FILES['imgs']['name'])){
	move_uploaded_file($_FILES['imgs']['tmp_name'],"uploadimage/".$_FILES['imgs']['name']);
	$imgs=$_FILES['imgs']['name'];
	
	}
$date=date('d-m-y');
$query="insert into admin values('','$date','$fname','$lastname','$email','$password','$imgs')";
$result=mysqli_query($con,$query);
if($result){
	header('location:viewsignup.php');
	}else{
	echo "sorry";
	}

?>