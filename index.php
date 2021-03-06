
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
<title>Розклад руху автобусів</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<div class="banner">
	<div class="container">
		<div class="top-header">
				<div class="top-left">
					<?php include 'menu.php';?>
				</div>
				<div class="top-right">
					<a class="cab" href="auto.php"></a>	
				</div>
				<div class="clearfix"></div>
				<div class="top-logo">
					<a href="index.php"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>РОЗКЛАД<span>РУХУ АВТОБУСІВ</span>
					</a>
				</div>
		</div>
		<div class="top-nav">
					<div class="nav-icon">
							<a href="#" class="right_bt" id="activator"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> </a>
							<a class="scroll top-indus" href="#top-industries">Топ маршрутів</a>
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
		<div class="banner-info">
			<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
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
			<!-- responsiveslides -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>БРОНЮВАННЯ КВИТКІВ ОНЛАЙН</h3>
							<p>Можлива оплата карточкою</p>
						<!--	<a href="#" class="hvr-rectangle-out button">SEE MORE</a>
							<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>-->
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>МАРШРУТ В БУДЬ-ЯКУ ТОЧКУ УКРАЇНИ</h3>
							<p>Швидко та з комфортом</p>
							<!--<a href="#" class="hvr-rectangle-out button">SEE MORE</a>
							<a href="#" class="hvr-rectangle-in button red">DOWNLOAD</a>-->
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<h3 class="tittle">ABOUT THE PROJECT</h3>
		<div class="strip"></div>
		<p>Nam libero tempore, cum soluta nobis est eligendi optio 
			cumque nihil impedit quo minus id quod maxime placeat facere
			possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
			Temporibus autem quibusdam et aut officiis debitis aut rerum 
			necessitatibus saepe eveniet ut et voluptates repudiandae sint 
			et molestiae non recusandae.</p>
	</div>
</div>
<!-- //banner-bottom -->

<!--start-yachts-->


	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>

<!-- features-->
<div class="services-bottom">
		<div class="container">
			<h3 class="tittle">Перелік послуг</h3>
			<div class="strip three"></div>
			<div class="services-bottom-grids">
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>Бронювання</h4>
						<p>Забронювати, перебронювати, відмінити бронювання</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>Побудуй свій маршрут з пересадками сам</h4>
						<p>Таке ніби хтось то буде робити замість тебе</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>Ще яксь необхідна послуга</h4>
						<p>Потім дописати. Важливий і серйозний текст</p>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>Перегляд топчикових маршрутів</h4>
						<p>Сянки ван лав</p>
					</div>
				
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //features-->
<div id="top-industries" class="gallery">
	<div class="container">
	  <h3 class="tittle">ТОП МАРШРУТІВ</h3>
			<div class="gallery-bottom">
			     <div class="view view-ninth">
                   <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        
                    </div></a>
                </div>
              <div class="view view-ninth">
                   <a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        
                    </div></a>
                </div>
                 <div class="view view-ninth">
                   <a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                       <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                       
                    </div></a>
                </div>
                <div class="view view-ninth">
                   <a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                       
                    </div></a>
                </div>
               <div class="view view-ninth">
                   <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                       
                    </div></a>
                </div>
                 <div class="view view-ninth">
                   <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>INDUSTRY</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                       
                    </div></a>
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