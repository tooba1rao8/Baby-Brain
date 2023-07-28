<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Video</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	color:white;
	color:white;
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
		background-color:#F4DB7D;
		color:white;
		height:36px;
		border:1px solid black;
		margin-bottom:20px;}
</style>
</head>
<body>
<!--Now we create a Form for admin-->
<div class="container" id="container" style="background-color:#0A248D;">
<center>
<h1 id="heading" class="text-success">Upload Video</h1>
</center>
<form action="addvideotback.php" method="post" onSubmit="del()" enctype="multipart/form-data">
<input id="input" type="text" placeholder="Enter Video Name" name="name" class="form-control" required>
<input id="input" type="" placeholder="Enter Video Size" name="size" class="form-control" required>
<select id="input" class="form-control" name="selectvideo" required>
<option>Video Categories</option>
<option>For 6 Month Baby</option>
<option>For 1 Year Baby</option>
<option>For 2 Year Baby</option>
<option>For 3 Year Baby</option>
<option>For 4 Year Baby</option>
</select>

<p style="padding-left:25%;padding-top:10px;color:white;">Upload Video Image</p>
<input id="input" type="file" name="img" class="form-control" required>

<p style="padding-left:25%;padding-top:10px;color:white;">Enter Video URL</p>
<input id="input" type="text" name="url" class="form-control" placeholder="Enter URL" required>


<textarea id="message" name="detail" placeholder="Enter Video Details" class="form-control" required></textarea>

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