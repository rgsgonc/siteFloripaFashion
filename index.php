
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Floripa Fashion Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hey look Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!--start-header-->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
							
					     
						 <?php 
						 require_once("logo.php");
						 require_once("menu.php");?>
						 
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->
								<div class="header-right">
									<ul class="f-icons">
										<li><a href="#" class="facebook"> </a></li>
										<li><a href="#" class="p"> </a></li>
										<li><a href="#" class="twitter"> </a></li>
									</ul>
									<div class="clearfix"></div>
								</div>

							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="banner">
				   <div class="container">
						<div class="callbacks_container">
						<!--<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>The Best collections</h3>
								<h4>for your unique style!</h4>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								   <h3>The Future is wow</h3>
								 <h4>for Shop new style!</h4>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								  <h3>The Best collections</h3>
								<h4>for your unique style!</h4>
								</div>	
							</li>
						</ul>-->
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>

	     </div>
     </div>
	<!--trends-->
	<div class="trends">
	    <div class="container">
			<div class="grid">
					<figure class="effect-terry">
						<img src="images/imagem11.jpg" alt="img16"/>
						<figcaption>
								<h4>Floripa<span>Fashion</span></h4>
							<p>
								<a href="#"><i class="glyphicon glyphicon-cloud-download"></i></a>
								<a href="#"><i class="glyphicon glyphicon-heart"></i></a>
								<a href="#"><i class="glyphicon glyphicon-share"></i></a>
								<a href="#"><i class="glyphicon glyphicon-tag"></i></a>
							</p>
						</figcaption>			
					</figure>
					<figure class="effect-terry">
						<img src="images/imagem12.jpg" alt="img26"/>
						<figcaption>
								<h4>Floripa<span>Fashion</span></h4>
							<p>
							<a href="#"><i class="glyphicon glyphicon-cloud-download"></i></a>
								<a href="#"><i class="glyphicon glyphicon-heart"></i></a>
								<a href="#"><i class="glyphicon glyphicon-share"></i></a>
								<a href="#"><i class="glyphicon glyphicon-tag"></i></a>
							</p>
						</figcaption>			
					</figure>
					<figure class="effect-terry">
						<img src="images/imagem13.jpg" alt="img26"/>
						<figcaption>
						    <h4>Floripa<span>Fashion</span></h4>
							<p>
								<a href="#"><i class="glyphicon glyphicon-cloud-download"></i></a>
								<a href="#"><i class="glyphicon glyphicon-heart"></i></a>
								<a href="#"><i class="glyphicon glyphicon-share"></i></a>
								<a href="#"><i class="glyphicon glyphicon-tag"></i></a>
							</p>
						</figcaption>			
					</figure>
					<!--<figure class="effect-terry">
						<img src="images/f5.jpg" alt="img26"/>
						<figcaption>
						<h4>hey<span>look</span></h4>
							<p>
								<a href="#"><i class="glyphicon glyphicon-cloud-download"></i></a>
								<a href="#"><i class="glyphicon glyphicon-heart"></i></a>
								<a href="#"><i class="glyphicon glyphicon-share"></i></a>
								<a href="#"><i class="glyphicon glyphicon-tag"></i></a>
							</p>
						</figcaption>			
					</figure>
					<figure class="effect-terry">
						<img src="images/f4.jpg" alt="img26"/>
						<figcaption>
							<h4>hey<span>look</span></h4>
							<p>
								<a href="#"><i class="glyphicon glyphicon-cloud-download"></i></a>
								<a href="#"><i class="glyphicon glyphicon-heart"></i></a>
								<a href="#"><i class="glyphicon glyphicon-share"></i></a>
								<a href="#"><i class="glyphicon glyphicon-tag"></i></a>
							</p>
						</figcaption>			
					</figure>-->
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	   		<!--start-feets-->
	<div class="feets">
		<div class="container">	
     		<h3 class="tittle">Principais imagens</h3>
		<ul id="flexiselDemo3">
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#one">
								  <img src="images/s1.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="one">
									  <img src="images/s1.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#two">
								  <img src="images/s3.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="two">
									 <img src="images/s3.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#four">
								 <img src="images/s2.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="four">
									  <img src="images/s2.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#five">
								   <img src="images/s1.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="five">
									 <img src="images/s1.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#six">
								 <img src="images/s2.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="six">
									   <img src="images/s2.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<a class="lightbox" href="#seven">
								   <img src="images/s1.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="seven">
									 <img src="images/s1.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>

									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
				<li>
					<div class="biseller-column">
								<a class="lightbox" href="#eight">
								    <img src="images/s4.jpg" alt=""/>
								</a> 
								<div class="lightbox-target" id="eight">
								 <img src="images/s4.jpg" alt=""/>
								   <a class="lightbox-close" href="#"> </a>
									
									<div class="clearfix"> </div>
								</div>
					</div>
				</li>
	     	</ul>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems:4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems:3
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems:3
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems:4
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>   
			<!--//end-services-->
	      <!--news-->
				<div class="news">
					<div class="container">
					 <h3 class="tittle">Nossas Novidades</h3>
						<div class="new-grids">
							<div class="col-md-6 new-grid">
									<a href="single.html" class="mask">
						<img src="images/n1.jpg" class="img-responsive zoom-img" alt=""></a>
						</div>	
							<div class="col-md-6 new-grid1">
								<ul class="ad-info two">
										 <li>20 Janeiro</li>
										 <li> <a href="#">Tamilis</a></li>
										 <!--<li> <a href="#">24 Comments</a></li>-->
								</ul>
								<div class="clearfix"></div>
								<div class="new-inner two">
								  <a class="news-tittle" href="novidades-1.php">Novidades 1</a>
								<p>Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades <a class="button" href="single.html"><img src="images/read.png" alt="" /></a></p>
								</div>
							</div>	
							<div class="clearfix"></div>
							<div class="col-md-6 new-grid1 two">
							   <ul class="ad-info new">
										 <li>21 Janeiro</li>
										 <li> <a href="#">Tamilis</a></li>
										 <!--<li> <a href="#">24 Comments</a></li>-->
								</ul>
								<div class="clearfix"></div>
								<div class="new-inner">
								   <a class="news-tittle" href="novidades-2.php">Novidades 2</a>
									<p>Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades. <a class="button" href="single.html"><img src="images/read.png" alt="" /></a></p>

								</div>
							</div>		
							<div class="col-md-6 new-grid two">
								<a href="single.html" class="mask">
						<img src="images/n2.jpg" class="img-responsive zoom-img" alt=""></a>
						</div>		
							<div class="clearfix"></div>	
							<div class="col-md-6 new-grid">
								<a href="single.html" class="mask">
								<img src="images/n3.jpg" class="img-responsive zoom-img" alt=""></a>
							</div>		
							<div class="col-md-6 new-grid1">
							<ul class="ad-info two">
										 <li>22 Janeiro</li>
										 <li> <a href="#">Tamilis</a></li>
										 <!--<li> <a href="#">24 Comments</a></li>-->
								</ul>
								<div class="clearfix"></div>
								<div class="new-inner two">
								   <a class="news-tittle" href="novidades-3.php">Novidades 3</a>
									<p>Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades Escrever aqui as novidades. <a class="button" href="single.html"><img src="images/read.png" alt="" /></a></p>
								
								</div>
							<div class="clearfix"></div>
						</div>	
					</div>	
				</div>	
			</div>	
				<!--//news-->
         <!--/testimonials-->
  		  <div class="testimonials-section">
			<div class="container">
				<div class="members">
					<div class="col-md-4 member1">
						<img src="images/client.jpg" alt="" />
						<div class="text text-center">
							<h4>Título foto</h4>
								<p>Descrição</p>
						</div>
					</div>
					<div class="col-md-8 slide-test">
						<div id="top" class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider3">
							<li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p align="justify">Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui .</p>
								</div>
							</li>
							<li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p align="justify">Informações aqui 2 Informações aqui 2 Informações aqui 2 Informações aqui 2 Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui .</p>
								</div>
							</li>
							<li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p align="justify">Informações aqui 3 Informações aqui 3 Informações aqui Informações aqui 3 Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui Informações aqui .</p>
								</div>
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>

					</div>
		       </div>
			</div>
        </div>
  
  <?php require_once("copyright.php");?>
  
			<!--/start-copyright-section-->
				
				<?php require_once("copyright.php");?>


				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>