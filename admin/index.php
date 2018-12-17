

<!DOCTYPE html>
<?php session_start(); 
if(isset($_SESSION['logged_user'])){ ?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Кабінет диспетчер</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
   .lay{
    display: ruby-text;
   }
   </style>
</head>
<body>
<?php include ('../DB/connect.php');

?>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a>
                    <a class="brand" href="index.php">Кабінет диспетчер</a>
   
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
    <ul class="mainnav">
						<li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
						<li><a href="../noauto.php"><i class="icon-list-alt"></i><span>Logout</span> </a> </li>
						 
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Додати водія</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  
                <form method="POST" >
              ПІБ водія<input type=text name="name">



           <button type="submit" name="adddriver">ОК</button>
              </form>
<?php 
if(isset($_POST['adddriver']) && isset($_POST['name'])){
  $result = $con->query('INSERT INTO `driver`(`id`, `name_driver`) VALUES (NULL,"'.$_POST['name'].'")');

}
?>

                </div>                
              </div>
            </div>
          </div>
          
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> Додати місто</h3>
              
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
          <form method="POST" >
              Назва міста<input type="text" name="town">



           <button type="submit" name="addtown">ОК</button>
              </form>

              <?php 
if(isset($_POST['addtown']) && isset($_POST['town'])){
  $result = $con->query('INSERT INTO `town`(`id_town`, `destination`) VALUES (NULL,"'.$_POST['town'].'")');

}
?>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> Додати шлях</h3>
              
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
          <form method="POST" >
             

             <div class="formRow labelBox col3 dropDownMobile" id="workDesign">

<input type="text" name="tags" id="workDesignTags"><button type=submit name="addroute">OK</button>

<?php
     if ($result = $con->query('SELECT * FROM `town` ')) {
      $resul = $con->query('DELETE FROM `town` WHERE `destination`=""');
     while ($row = $result->fetch_assoc()) {
      
    echo' <label class="lay"><input type="checkbox" name="design" value="'.$row['id_town'].'"><div class="textBox">'.$row['destination'].'</div></label> ';
     }
    }
     ?>


</div>
              </form>
              <?php
              
    if(isset($_POST['addroute']) && isset($_POST['tags'])){
      $tag = str_replace(",", "-", $_POST['tags']);

      
   $result = $con->query('INSERT INTO `road`(`id`, `route`) VALUES (NULL,"'.$tag.'")');
              
              }
              ?>
             


            </div>
            <!-- /widget-content --> 
          </div>


        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Додати автобус</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <form method="POST">
            <label for="namebus">Назва(марка або ще щось)</label>
              <input type="text" id="namebus" name="namebus">
            <label for="sitcount">Кількість місць(10-100):</label>
              <input type="number" id="sitcount" name="sitcount" min="10" max="100">
              

              <label for="driver">Оберіть водія</label>
              <select name="driver" id="driver"> <!--Supplement an id here instead of using 'name'-->
    <?php
     if ($result = $con->query('SELECT * FROM `driver` ')) {
     while ($row = $result->fetch_assoc()) {
              echo'   <option value='.$row ['name_driver'].'>'.$row ['name_driver'].'</option> ';
     }
    }
     ?>
                
              </select><br>
              <button type="submit" name="ok">OK</button>
              </form>
              <?php
              
if(isset($_POST['ok']) && isset($_POST['driver']) && isset($_POST['namebus'])&& isset($_POST['sitcount'])){
  $result = $con->query('INSERT INTO `bus`(`id`, `sit_count`, `driver`, `mark`) VALUES (NULL,"'.$_POST['sitcount'].'","'.$_POST['driver'].'","'.$_POST['namebus'].'")');

}
?>

            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Додати пункт в рокзклад</h3>

            </div>
            <div class="widget-content">
            <!-- /widget-header -->
            <form method=POST>
Ціна білета<input type="text" name="cost"><br>
Час відправки<input type="text" name="deptime" placeholder="11:11"><br>
Час прибуття<input type="text" name="arrtime"  placeholder="22:22"><br>
Дата відправки<input type="text" name="depdate"  placeholder="2018-11-02" ><br>
Дата прибуття<input type="text" name="arrdate"  placeholder="2018-11-03" ><br>
<label for="select">Оберіть маршрут</label>
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
          echo "<option value=".$roww['route'].">";
          foreach ($route as &$value) {
           echo $value." " ;
        }
         echo "</option> ";
          $route=array();}}
                 ?>
               
              </select><br>

 <label for="buss">Оберіть автобус</label>
              <select name="buss" id="buss"> <!--Supplement an id here instead of using 'name'-->
    <?php
     if ($result = $con->query('SELECT * FROM `bus` ')) {
     while ($row = $result->fetch_assoc()) {
              echo'   <option value='.$row ['mark'].' місць '.$row ['sit_count'].'>'.$row ['mark'].' місць '.$row ['sit_count'].'</option> ';
     }
    }
     ?>
                
              </select><br>
              <button type="submit" name="punkt">OK</button>

              </form>
              <?php
           
              if(isset($_POST['punkt'])){
                $result = $con->query('INSERT INTO `route`(`route_id`, `route`, `departureTime`, `arrivalTime`, `price`, `departureDate`, `arrivalDate`, `bus`) 
                VALUES (NULL,"'.$_POST['select'].'","'.$_POST['deptime'].'","'.$_POST['arrtime'].'","'.$_POST['cost'].'","'.$_POST['depdate'].'","'.$_POST['arrdate'].'","'.$_POST['buss'].'")');
              
              }
              ?>



            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
  
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> © 2018 Kuklishin Kyrina | ST-1  </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script  type="text/javascript">
var values = [];

$("#workDesign label").on("click", function(){
        var input = $(this).children("input");
        var tag = $(this).text();
        var i = values.indexOf(tag);
        if (input.prop("checked"))  {
            input.parent().addClass("selected");
            if (i==-1) values.push(tag);
           
        } else {
            if (i>-1) values.splice(i, 1);
            input.parent().removeClass("selected");
        }
        $("#workDesignTags").val(values.join(", "));
    });

</script> 
</body>
<?php } ?>
</html>
 