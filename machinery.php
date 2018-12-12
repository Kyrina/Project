
<!DOCTYPE html>
<html>
<head>
<title>Розклад руху автобусів| Інше</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/chocolat.css" type="text/css" />
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
	<?php
	include 'LiqPay.php';
	?>
<!-- top header -->
<div class="banner page-head">
	<div class="container">
		<div class="top-header">
		<div class="top-left">
					<?php include 'menu.php';?>
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
<!--start-about-->
<div class="gallery1">
	<div class="container">
	  <h3 class="tittle">MACHINERY</h3>
					<script src="js/jquery.chocolat.js"></script>
					
					<!--light-box-files -->
					<script type="text/javascript">
					$(function() {
						$('.moments-bottom a').Chocolat();
					});
					</script>
		<div class="moments-bottom">
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g1.jpg">
							<img src="images/g1.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g2.jpg">
							<img src="images/g2.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g3.jpg">
							<img src="images/g3.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g4.jpg">
							<img src="images/g4.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g5.jpg">
							<img src="images/g5.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g6.jpg">
							<img src="images/g6.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g1.jpg">
							<img src="images/g1.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g2.jpg">
							<img src="images/g2.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="images/g3.jpg">
							<img src="images/g3.jpg" class="img-responsive zoom-img" alt="name" />
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!--gallery-->

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