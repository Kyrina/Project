
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Розклад руху автобусів| Контакти</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Heavy Industry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<script src="js/modernizr.custom.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<!-- top header -->
<div class="banner page-head">
	<div class="container">
		<div class="top-header">
				<div class="top-left">
					<ul>
						<li><a href="#">POPULAR</a></li>
						<li><a href="machinery.php">MACHINERY</a></li>
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div class="top-right">
					<ul>
						<li><a class="fb" href="#"></a></li>
						<li><a class="twi" href="#"></a></li>
						<li><a class="pin" href="#"></a></li>
						<li><a class="goog" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="top-logo">
					<a href="index.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>HEAVY <span>INDUSTRY</span>
					<i>A Small Scale Project</i>
					
					</a>
				</div>
		</div>
		<div class="top-nav">
					<div class="nav-icon">
							<a href="#" class="right_bt" id="activator"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> </a>
							<a class="top-indus" href="index.php">TOP INDUSTRIES</a>
							<div class="clearfix"></div>
					</div>
					<div class="box" id="box">
						<div class="box_content">        					                         
							<div class="box_content_center">
								<div class="form_content">
									<div class="menu_box_list">
									<ul>
											<li><a class="active" href="index.php"><span>Головна</span></a></li>
											<li><a href="about.php"><span>Розклад</span></a></li>									
											<li><a href="contact.php"><span>Контакти</span></a></li>
											<li><a href="machinery.php"><span>Інше</span></a></li>
										
										</ul>
									</div>
									<a class="boxclose" id="boxclose"> <span> </span></a>
								</div>                                  
							</div> 	
						</div> 
					</div>       	  
		</div>
				<!--start-click-drop-down-menu-->
						<!--start-dropdown-->
						 <script type="text/javascript">
							var $ = jQuery.noConflict();
								$(function() {
									$('#activator').click(function(){
										$('#box').animate({'top':'0px'},900);
									});
									$('#boxclose').click(function(){
									$('#box').animate({'top':'-1000px'},900);
									});
								});
								$(document).ready(function(){
								//Hide (Collapse) the toggle containers on load
								$(".toggle_container").hide(); 
								//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
								$(".trigger").click(function(){
									$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
								});
													
							});
						</script>
				<!--//End-click-drop-down-menu-->
	</div>
</div>
<!-- //top header -->
<div class="contact">
	<div class="container">
		<div class="contact-header">
			<h3 class="tittle">CONTACT</h3>
		</div>
		<div class="contact-gds">
			<div class="col-md-6 contact-top">
				<h3>Want to work with us?</h3>
					<div class="con-text">
						<span>Your Name </span>		
						<input type="text" value="" >						
					</div>
					<div class="con-text">
					  <span>Your Email </span>		
					  <input type="text" value="" >						
					</div>
					<div class="con-text">
					  <span>Subject</span>		
					  <input type="text" value="" >	
					</div>
					<div class="con-text">
					  <span>Your Message</span>		
					  <textarea> </textarea>	
					</div>
					<input type="submit" value="SEND" >
			</div>
			<div class="col-md-6 contact-top">
				<h3 class="info">Info</h3>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas </p>
					<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id </p>				
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!-- copy -->
<div class="div2">
	<div class="container">
		<p>© 2018 Kuklishin Kyrina | ST-1 </a></p>
	</div>
</div>
<!-- copy -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>