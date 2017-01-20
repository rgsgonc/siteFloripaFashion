
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
<script src="js/bootstrap.min.js"></script>
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
			<div id="home" class="header two">
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
			    <div class="banner two">
				      <div class="container">
					     <h2 class="second-tittle">Nossas redes sociais</h2>
				      </div>
				</div>
           </div>
		<!--start-typography-->

<!--/testimonials
  		  <div class="testimonials-section">
			<div class="container">
				<div class="members">
					<div class="col-md-4 member1">
						<img src="images/client.jpg" alt="" />
						<div class="text text-center">
							<h4>Facebook</h4>
							<p>Floripa Fashion Day</p>
						</div>
					</div>
					<div class="col-md-8 slide-test">
						<div id="top" class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider3">
							<li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
								</div>
							</li>
							<li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p>Consectetur adipisicing elitLorem ipsum dolor sit amet,Dolor amet , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
								</div>
							</li>
							<li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="text-info">
								 <p>Dolor amet, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
								</div>
							</li>
						</ul>
						</div>-->
						<!--banner-Slider-->
						<!--
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
        </div>-->
		
		<!--start-team-->
		<div class="team">
		    <div class="container">
			  <h3 class="tittle two">Redes Sociais</h3>
			  <div class="team-grids">
			   <ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Facebook</h3>
										<!--<p>by Ana Villa-Zamora</p>-->
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Instagram</h3>
									<!--<p>by Ana Villa-Zamora</p>-->
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Snapchat</h3>
										<!--<p>by Ana Villa-Zamora</p>-->
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

			  </div>
		   </div>
	  </div>
  <!--//team-->
  
		<?php require_once("footer.php");?>
  
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