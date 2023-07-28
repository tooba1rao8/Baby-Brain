<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>About Us </title>
        <style>
		#aboutimage{
			height:250px;
			width:40%;
			margin-left:30%;
			border-radius:30px;
			margin-top:30px;
			margin-bottom:30px;
			
			}
		
		</style>
   
         <?php
        include_once "links.html";
		?>
    </head>
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

$query="select * from aboutus order by ID DESC limit 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
?>


<img id="aboutimage" src="admin/uploadimage/<?php echo $row['image'];?>">
<h3 style="color:#1A2238;"><?php echo $row['introone'];?></h3>


<p style="line-height:24px;text-indent:30px;text-align:justify;font-size:17px;">
<?php echo $row['introdetails'];?>
</p>
<h3 style="color:#1A2238;"><?php echo $row['firstheading'];?></h3>
<p style="line-height:24px;text-indent:30px;text-align:justify;font-size:17px;">
<?php echo $row['firstdetail'];?>
</p>
<h3 style="color:#1A2238;"><?php echo $row['secondheading'];?></h3>
<p style="line-height:24px;text-indent:30px;text-align:justify;font-size:17px;"><?php echo $row['seconddetails'];?></p>

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