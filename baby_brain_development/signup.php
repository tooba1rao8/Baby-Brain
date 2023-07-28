<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	font-size:22px;
	font-weight:bold;
	font-style:italic;
	color:white;
	letter-spacing:2px;}
	#input{
		width:50%;
		margin-left:25%;
		margin-top:15px;
		height:36px;
		border:1px solid black;
		}
		#inputs{
		width:30%;
		margin-left:35%;
		margin-top:15px;
		height:36px;
		border:1px solid black;
		background-color:#F4DB7D;
		color:white;
		margin-bottom:20px;}
</style>
</head>
<body>
<!--Now we create a Form for admin-->
<div class="container-fluid" id="container" style="background-color:#0A248D;">
<center>
<h1 id="heading" class="text-success">Welcome To User Account</h1>
</center>
<form action="signupback.php" method="post" onSubmit="del()" enctype="multipart/form-data">
<input id="input" type="text" placeholder="Enter Your First Name" name="fname" class="form-control" required>
<input id="input" type="text" placeholder="Enter Your Last Name" name="lastname" class="form-control" required>
<p style="padding-left:25%;padding-top:10px;color:white;">Upload Your  Image</p>
<input id="input" type="file" name="imgs" class="form-control" required>
<input id="input" type="email" placeholder="Enter Your Email" name="email" class="form-control" required>
<input id="input" type="password" placeholder="Enter Your Password" name="password" class="form-control" required>
<input id="inputs" type="submit" class="btn btn-success" value="Create Account">
</form>
</div>
<script>
function del(){
	window.alert("Successfully Create Your Account");
	}
</script>
</body>
</html>