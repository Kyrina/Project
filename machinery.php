<?php session_start(); ?>
<?php include ('DB/connect.php');

?>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<!-- start-smoth-scrolling -->
</head>
<body>

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
					<a href="index.php"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>РОЗКЛАД<span>РУХУ АВТОБУСІВ</span>
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

	<div class="container">
	  <h3 class="tittle">Бронювання</h3>
	  <div class="col-10">

	  <input id='price' type="text" placeholder="Сума оплати" /><br>
	  <input id='desc' type="text" placeholder="ПІБ" /><br>
	  <label for="select">Маршрут</label>
		<select name="select" id="select"> <!--Supplement an id here instead of using 'name'-->
            
            <?php  
            $route=array();
             if ($resul = $con->query('SELECT * FROM `route` WHERE 1')) {
            while ($roww = $resul->fetch_assoc()) {
            $pieces = explode("-", $roww['route']);  
            for($i=0;$i<count($pieces);$i++){           
              if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {
                while ($row2 = $result2->fetch_assoc()) {
                  $route[]=$row2['destination'];
          
                }
            }        
          }
          echo "<option value=".$roww['price'].">";
          foreach ($route as &$value) {
           echo $value." " ;
        }
         echo " ціна ".$roww['price']." грн</option> ";
		  $route=array();}
		}
                 ?>
               
              </select><br>



	  <button type="button" onclick=" make_pay() " class="btn btn_green">Оплатити</button>
	  <span id='form_responce' style='display:none;'></span>
	   </div>
					<div class="clearfix"> </div>
			</div>
	

<script type="text/javascript"> 
function make_pay(){
if (($('#price').val() != $('#select').val())||($('#price').val() == "") || (!/^\d+$/.test($('#price').val()))){ //Если в форму ничего не введено и нажата нопка ОК или введены не цифры, то
$('#price').css('border-color','red'); //граница поля СУММЫ станет красным
} else
$.get("payment/makeform.php", //Если ВСЕ ОК — Запросим сгенерированную форму без перезагрузки страницы
{
price: $('#price').val(), //В качестве параметра передадим сумму (введенную в поле)
desc: $('#desc').val(),
},
onAjaxSuccess //Функция, которая сработает если ВСЕ ОК
);

function onAjaxSuccess(data)
{
// Здесь мы получаем данные в переменную data
$('#form_responce').html(data); //И передаем эту форму в невидимое поле form_responce
$('#form_responce form').submit() //Сразу же автоматически сабмитим эту форму, так как всеравно клиент её не видит
}
}
</script>

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