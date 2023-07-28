<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
     
        <!-- Custom Fonts -->
         <?php
        include_once "links.html";
		?>
        <style>
		#sendbtn{
			width:30%;

			margin-top:13px;
			border:1px solid black;
			margin-bottom:20px;
			color:black;
			font-weight:bold;
			letter-spacing:1px;
			background-color:#F4DB7D;
			color:white;
			}
		#ccinput{
			width:50%;
			height:100px;
			margin-top:13px;
			border:1px solid black;
			color:black;
			font-weight:bold;
			letter-spacing:1px;
			}
					#cinput{
			width:50%;
			height:35px;
			margin-top:13px;
			border:1px solid black;
			color:black;
			font-weight:bold;
			letter-spacing:1px;
			}
	@media (min-width:100px) and (max-width:800px){
		#cinput{
			width:70%;
			}
			#ccinput{
			width:70%;
			height:100px;
			margin-top:13px;
			border:1px solid black;
			color:black;
			font-weight:bold;
			letter-spacing:1px;
			}
		
		}
			
		</style>
    </head>
    <body>
<?php
            include_once "header.php";
			?>
 <section id="about"  style="background-color:#0A248D;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center>
<div class="about_content">

<h2 style="color:#FFF;">Contact Us</h2>
<h3 style="font-size:17px;color:#FFF;">Drop Your Message</h3>

<form action="contactusback.php" method="post">
<input type="text" name="name" placeholder="Enter Your Name" required id="cinput" class="form-control">
<input type="text" name="contact" placeholder="Enter Your Contact Number" required id="cinput" class="form-control">
<input type="email" name="email" placeholder="Enter Your Email" required id="cinput" class="form-control">
<input type="text" name="subject" placeholder="Enter Your Subject" required id="cinput" class="form-control">
<textarea name="message" placeholder="Enter Your Message" id="ccinput" class="form-control"></textarea>
<input type="submit" value="Send" class="btn btn-default form-control" id="sendbtn">


</form>


</div>
   </center>                 </div>
                    
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