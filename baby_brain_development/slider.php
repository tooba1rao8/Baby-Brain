<?php
include_once "links.html";
?>
<style>
#sliimg{
	height:550px;
	width:100%;
	}
	@media (min-width:10px) and (max-width:800px){
		#sliimg{
	height:400px;
	margin-bottom:10px;
	padding-bottom:10px;
	}
		
		}
</style>
<section id="home" class="home" >
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel" style="width:100%; height:450px; margin-top:30px;">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img id="sliimg" src="images/early-childhood-activities-e1593123209292.jpeg" alt="Construction">
                        <div class="">
                            <div class="carousel-caption">
                           
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img id="sliimg" src="images/go-kids-2.jpg" alt="Construction">
                        <div class="">
                            <div class="carousel-caption">
                                
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img id="sliimg" src="images/placeholder-2.jpg" alt="Construction">
                        <div class="">
                            
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>