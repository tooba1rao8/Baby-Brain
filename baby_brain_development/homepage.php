<!DOCTYPE html>
<html lang="en"> 
    <head>
 
        
        <?php
        include_once "links.html";
		?>
        <style>
		#idimages{
			height:330px;
			position:relative;
			}
			
				}
		</style>
        
    </head>
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        
            <?php
            include_once "header.php";
			?>
        <!-- Header end -->


        <?php
        include_once "slider.php";
		?>
 <!-- About -->
     

         
        <!-- Videos-->
        
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                  <h2>6 Month Baby Brain Development</h2>
                            

                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                include_once "dbc.php";
				$query="select * from addvideo where videocategory='For 6 Month Baby'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result)){
				?>
                
                    <div class="col-md-3 col-sm-6" style="border:3px solid white;">
                    
                        <div class="why_us_item">
        <img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:200px;width:100%;padding-top:-20px;margin-top:-20px;border-radius:6px;">
                        
                            <h4 style="padding-top:10px;margin-top:10px;"><?php echo $row['titlename'];?></h4>
                           
                            <p><a href="details.php?php=<?php echo $row['id'];?>"><button class="btn btn-primary" style="background-color:#ffcb0f;">Read More</button></a></p>
                        </div>
                       
                    </div>
                    <?php }?>
                    </div>
                    
        </section>

       
 <!-- user image-->
        
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                  <h2>1 Year Baby Brain Development</h2>
                         

                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                include_once "dbc.php";
				$query="select * from addvideo where videocategory='For 1 Year Baby'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result)){
				?>
                
                    <div class="col-md-3 col-sm-6" style="border:3px solid white;">
                    
                        <div class="why_us_item">
        <img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:200px;width:100%;padding-top:-20px;margin-top:-20px;border-radius:6px;">
                        
                            <h4 style="padding-top:10px;margin-top:10px;"><?php echo $row['titlename'];?></h4>
                           
                            <p><a href="details.php?php=<?php echo $row['id'];?>"><button class="btn btn-primary" style="background-color:#ffcb0f;">Read More</button></a></p>
                        </div>
                       
                    </div>
                    <?php }?>
                    </div>
                    
        </section>
        

 <!-- user image-->
        
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                  <h2>2 Year Baby Brain Development</h2>
                         

                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                include_once "dbc.php";
				$query="select * from addvideo where videocategory='For 2 Year Baby'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result)){
				?>
                
                    <div class="col-md-3 col-sm-6" style="border:3px solid white;">
                    
                        <div class="why_us_item">
        <img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:200px;width:100%;padding-top:-20px;margin-top:-20px;border-radius:6px;">
                        
                            <h4 style="padding-top:10px;margin-top:10px;"><?php echo $row['titlename'];?></h4>
                           
                            <p><a href="details.php?php=<?php echo $row['id'];?>"><button class="btn btn-primary" style="background-color:#ffcb0f;">Read More</button></a></p>
                        </div>
                       
                    </div>
                    <?php }?>
                    </div>
                    
        </section>
        
 <!-- user image-->
        
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                  <h2>3 Year Baby Brain Development</h2>
                         

                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                include_once "dbc.php";
				$query="select * from addvideo where videocategory='For 3 Year Baby'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result)){
				?>
                
                    <div class="col-md-3 col-sm-6" style="border:3px solid white;">
                    
                        <div class="why_us_item">
        <img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:200px;width:100%;padding-top:-20px;margin-top:-20px;border-radius:6px;">
                        
                            <h4 style="padding-top:10px;margin-top:10px;"><?php echo $row['titlename'];?></h4>
                           
                            <p><a href="details.php?php=<?php echo $row['id'];?>"><button class="btn btn-primary" style="background-color:#ffcb0f;">Read More</button></a></p>
                        </div>
                       
                    </div>
                    <?php }?>
                    </div>
                    
        </section>
        
 <!-- user image-->
        
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                  <h2>4 Year Baby Brain Development</h2>
                         

                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                include_once "dbc.php";
				$query="select * from addvideo where videocategory='For 4 Year Baby'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result)){
				?>
                
                    <div class="col-md-3 col-sm-6" style="border:3px solid white;">
                    
                        <div class="why_us_item">
        <img src="admin/uploadimage/<?php echo $row['videoimage'];?>" style="height:200px;width:100%;padding-top:-20px;margin-top:-20px;border-radius:6px;">
                        
                            <h4 style="padding-top:10px;margin-top:10px;"><?php echo $row['titlename'];?></h4>
                           
                            <p><a href="details.php?php=<?php echo $row['id'];?>"><button class="btn btn-primary" style="background-color:#ffcb0f;">Read More</button></a></p>
                        </div>
                       
                    </div>
                    <?php }?>
                    </div>
                    
        </section>
        
   
        
        <?php
        include_once "footer.php";
		?>

        <!-- JavaScript -->
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