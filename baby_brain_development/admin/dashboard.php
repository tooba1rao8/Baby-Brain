<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	color:white;
	font-weight:bold;
	font-size:27px;
	letter-spacing:2px;
	text-shadow:2px 2px  black;
	padding-top:17px;
	}
	#btn{
		width:100%;
		background-color:#0A248D;
		height:34px;
		margin-top:5px;
		border:2px solid #FFF;
		}
#btn:hover{
		background-color:#36C;
		
		}
#container{
	background-color:#9DAAF2;

	}
	#top{
		height:100px;
		background-color:#1A2238;
		margin-bottom:10px;
		
		}
	#ifram{

	height:600px;
	width:98%;
	}
</style>
</head>

<body>
<?php
session_start();
if($_SESSION['email']){}else{
	header('location:index.php');
	}

?>
<div class="container-fluid" id="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "  id="top">
<center>
<h1 id="heading">Baby Brain Development</h1>
</center>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="iframesone">
<a href="signup.php" target="first">
<button class="btn btn-success form-control" id="btn" >Sign Up</button>
</a>
<a href="viewsignup.php" target="first">
<button class="btn btn-success" id="btn">View Admin Account</button>
</a>
<a href="addaboutus.php" target="first">
<button class="btn btn-success" id="btn">Add About US</button>
</a>
<a href="viewaboutus.php" target="first">
<button class="btn btn-success" id="btn">View About US</button>
</a>
<a href="addservices.php" target="first">
<button class="btn btn-success" id="btn">Add Services</button>
</a>
<a href="viewservice.php" target="first">
<button class="btn btn-success" id="btn">View Services</button>
</a>
<a href="viewcontactus.php" target="first">
<button class="btn btn-success" id="btn">View Contact US</button>
</a>

<a href="addvideo.php" target="first">
<button class="btn btn-success" id="btn">Add Video</button>
</a>
<a href="viewvideo.php" target="first">
<button class="btn btn-success" id="btn">View Video & Delete</button>
</a>

<a href="logout.php">
<button class="btn btn-success" id="btn">Sign Out</button>
</a>
</div>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6" id="iframestwo">
<iframe name="first" id="ifram"></iframe>
</div>


</div>
</div>
</div>
</body>
</html>