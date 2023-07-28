<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Video</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="css/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
<style>
#heading{
	color:white;
	font-size:22px;
	font-weight:bold;
	font-style:italic;
	letter-spacing:2px;}
	th{
		color:white;
		background-color:#F4DB7D;
		background-color:black;
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
<h1 id="heading" class="text-success">View Video</h1>
</center><table class="table table-bordered table-hover">
<tr>
<th>Id</th>
<th>Date</th>
<th>Video Name</th>
<th>Video Size</th>
<th>Video Categories</th>

<th>Video Image</th>

<th>Video URL</th>
<th>Video detail</th>
<th>Delete</th>
</tr>
<?php
include_once "dbc.php";
$query="select * from addvideo";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['titlename'];?></td>
<td><?php echo $row['videosize'];?></td>
<td><?php echo $row['videocategory'];?></td>

<td><img src="uploadimage/<?php echo $row['videoimage'];?>" style="height:50px;width:50px;margin:10px;"></td>

<td><?php echo $row['videourl'];?></td>
<td><?php echo $row['detail'];?></td>


<td><a href="delvideo.php?php=<?php echo $row['id']?>"><img src="image/delete.png" style="height:30px;width:30px;" onClick="del()"></a></td>
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