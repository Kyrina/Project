<?if(isset($_POST['Date']))
$Date=$_POST['Date'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Розклад руху автобусів| Розклад</title>
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

<script src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.4/combined/js/gijgo.min.js" type="text/javascript"></script>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

<!-- дата -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- start-smoth-scrolling -->
</head>
<?php include ('DB/connect.php');

?>

<body>
<!-- top header -->
<div class="banner page-head">
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
<div class="about two">
		<div class="container">
		 <h3 class="tittle">Розклад руху автобусів</h3>
				<div class="about-top">
					<div class="col-md-5 about-top-left">
					<div class="col-md-6">		
	<form method="GET">							
	<div id="reportrange"  style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
	<i class="fa fa-calendar"></i>&nbsp;
	<input type="hidden"  name="dte" id="dte" value="">
    <span ></span> <i class="fa fa-caret-down"></i>
</div>
		<button id="btn"  name="btndte">ok</button>
						</form>
		</div>
		<div class="col-md-6">
		Пошук по пункту і місцю призначення
		<form method="GET">
		<label for="departure">Пункт від'їзду</label>
			  <input type="text" id="departure" name="departure">
		<label for="arrival">Пункт призначення</label>
              <input type="text" id="arrival" name="arrival">

			  <button name="search">Пошук</button>
		</form>
		</div>

					</div>
					
					<div class="col-md-7 about-top-right">
					<?php include ('outputtimetable.php');
?>
				</div>
					<div class="clearfix"></div>
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
<!-- smooth scrolling 
	<script type="text/javascript">
		$(document).ready(function() {	
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	-->


	<script type="text/javascript">


	moment.locale('ru');
$('#datePicker').daterangepicker();

$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
    }


    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
<script type="text/javascript">
	var text = $('#reportrange span').text();
$('#dte').val(text);

</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>