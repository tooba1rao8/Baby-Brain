<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign In</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	font-size:22px;
	padding-top:50px;
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
		background-color:#F4DB7D;
		height:36px;
		color:white;
		border:1px solid black;
		margin-bottom:40px;}
</style>
</head>
<body>
<!--Now we create a Form for admin-->
<div class="container" id="container" style="background-color:#0A248D; margin-top:20px;">

<center>
<h1 id="heading" class="text-success">Welcome To Sign In Baby Brain Development</h1>
</center>
<form action="signinback.php" method="post" onSubmit="del()">

<input id="input" type="email" placeholder="Enter Your Email" name="email" class="form-control" required>
<input id="input" type="password" placeholder="Enter Your Password" name="password" class="form-control" required>
<input id="inputs" type="submit" class="btn btn-success" value="LOG IN">
</form>
</div>
<script>
function del(){
	window.alert("Successfully Sign In Your Account");
	}
</script>
</body>
</html>