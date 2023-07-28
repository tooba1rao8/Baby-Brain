<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Baby Brain Development</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
         <?php
        include_once "links.html";
		?>
    </head>
    <style>
	th{
		color:#1A2238;
		}
	</style>
    <body>
<?php
            include_once "header.php";
			?>
 <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="about_content">


<?php
include_once "dbc.php";
$ids=$_REQUEST['php'];
$query="select * from addvideo where id='$ids'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
?>
<h2 style="color:#1A2238;"><?php echo $row['titlename'];?></h2>
<tr>
<center>
<a href="admin/uploadimage/<?php echo $row['videoimage'];?>">
<img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:300px;width:600px;margin:20px;"></a>

</center>
</tr>

<table class="table table-bordered">
<tr>

</tr>
<tr>
<th>Video Name</th>
<td><?php echo $row['titlename'];?></td>
</tr>

<tr>
<th>Video Size</th>
<td><?php echo $row['videosize'];?></td>
</tr>

<tr>
<th>Video Category</th>
<td><?php echo $row['videocategory'];?></td>
</tr>

<tr>
<th>Video URL</th>
<td><a href="<?php echo $row['videourl'];?>">Click to  Watch Video</td>
</tr>
<tr>
<th>Video Detail</th>
<td><?php echo $row['detail'];?></td>
</tr>


</table>


<?php }?>

</div>
                    </div>
                    
                </div>
            </div>
            
        </section>
         <?php
        include_once "footer.php";
		?>
<script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>

        <script src="js/jquery.scrollUp.min.js"></script>

        <script src="js/main.js"></script>
    </body>	
</html>	