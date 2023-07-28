<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add About Us</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	color:WHITE;
	font-size:22px;
	font-weight:bold;
	font-style:italic;
	letter-spacing:2px;}
	#input{
		width:50%;
		margin-left:25%;
		margin-top:15px;
		height:36px;
		border:1px solid black;
		}
		#message{
		width:50%;
		margin-left:25%;
		margin-top:15px;
		height:60px;
		border:1px solid black;
		}
		#inputs{
		width:30%;
		margin-left:35%;
		margin-top:15px;
		height:36px;
		background-color:#F4DB7D;
		border:1px solid black;
		margin-bottom:20px;}
</style>
</head>
<body>
<!--Now we create a Form for admin-->
<div class="container" id="container" style="background-color:#0A248D;">
<center>
<h1 id="heading" class="text-success">Add About US</h1>
</center>
<form action="aboutusback.php" method="post" onSubmit="del()" enctype="multipart/form-data">





<input id="input" type="file" name="img" class="form-control" required>
<input id="input" type="text" placeholder="Enter Introducation Heading" name="intro" class="form-control" required>
<textarea id="message" name="introone" placeholder="Enter Introducation Details" class="form-control" required></textarea>

<input id="input" type="text" placeholder="Enter First Heading" name="awarnessone" class="form-control" required>
<textarea id="message" name="awarnessoned" placeholder="Enter First Detail" class="form-control" required></textarea>


<input id="input" type="text" placeholder="Enter Second  Heading" name="awarnesstwo" class="form-control" required>
<textarea id="message" name="awarnesstwod" placeholder="Enter Second Details " class="form-control" required></textarea>

<input id="inputs" type="submit" class="btn btn-success" value="Send">
</form>
</div>
<script>
function del(){
	window.alert("Successfully Add Post");
	}
</script>
</body>
</html>