<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	font-size:22px;
	color:white;
	font-weight:bold;
	font-style:italic;
	letter-spacing:2px;}
	th{
		color:white;
		background-color:black;
		background-color:#F4DB7D;
		text-align:center;
		padding:10px;
		}
	td{
		color:black;
		background-color:white;
		text-align:center;
		padding:10px;
		}
</style>
</head>

<body>
<!--Viw admin-->
<div class="container-fluid" style="background-color:#0A248D;">
<center>
<h1 id="heading" class="text-success">View Contact US</h1>
</center><table class="table table-bordered table-hover">
<tr>
<th>Id</th>
<th>Date</th>
<th>Name</th>
<th>Contact Number</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Delete</th>
</tr>
<?php
include_once "dbc.php";
$query="select * from contactus";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['email'];?></td>

<td><?php echo $row['subject'];?></td>
<td><?php echo $row['message'];?></td>
<td><a href="delcontact.php?php=<?php echo $row['id']?>"><img src="image/delete.png" style="height:30px;width:30px;" onClick="del()"></a></td>
</tr>
<?php } ?>
</table>
<script>
function del(){
	window.alert("Are You Want To Delete");
	}
</script>
</div>
</body>
</html>