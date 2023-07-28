<!DOCTYPE html>
<html lang="en"> 
<style>
#baby{
	padding-top:80px;
	color:#FFF;
	animation-name:baby;
	animation-iteration-count:infinite;
	animation-duration:5s;
}
@keyframes baby{
	5%{
		color:#CF0;
	}
	20%{
		color:#C30;
	}
	35%{
		color:#0CF;
	}
	50%{
		color:#00F;
	}
	65%{
		color:#603;
	}
	80%{
		color:#093;
	}
	95%{
		color:#F3C;
	}
}
	

</style>
    <head>
        <meta charset="utf-8">
        <title>User Account</title>
    
         <?php
        include_once "links.html";
		?>
    </head>
    <body>
 <section id="about">
            <div class="container-fluid">
                <div class="row" style="height:200px; background-color:#494949;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <h2 class="text-center" id="baby">Baby Brain Development </h2>
                   

                    </div>
                    
                </div>
            </div>
            
        </section>


 <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center>
                    <a href="usersignin.php">
                    <button class="btn" style="background-color:#0A248D;height:50px;width:25%;margin-left:1%;margin-top:20px;margin-bottom:20px;color:white;font-weight:bold;">User Sign In</button></a>
                    <a href="signup.php">
                     <button class="btn" style="background-color:#0A248D;height:50px;width:25%;margin-left:1%;margin-top:20px;margin-bottom:20px;color:white;font-weight:bold;">User Sign Up</button>
                     </a>
                    </center>

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