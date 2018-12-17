<?php 

echo"<table border='1'> <tr>
<th>Відправка</th><th>Прибуття</th><th>Ціна</th><th>Зупинка_1</th><th>Зупинка</th><th>Зупинка</th><th>Зупинка</th>
</tr>";







    if(isset($_POST['btndte'])){

     $date=$_POST['mydate'];
     $date=explode("-",$date);
     $strdate=str_replace("/", "-", $date[0]);
     $enddate=str_replace("/", "-", $date[1]);
    
     if ($resul = $con->query('SELECT * FROM `route` WHERE `departureDate` between "'.$strdate.'" and "'.$enddate.'"')) {
     while ($roww = $resul->fetch_assoc()) {
        $pieces = explode("-", $roww['route']);  
        echo"<tr><td>".$roww['departureTime']." ".$roww['departureDate']."</td><td>".$roww['arrivalTime']." ".$roww['arrivalDate']."</td><td>".$roww['price']."</td>";    
    for($i=0;$i<count($pieces);$i++){           
            if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {
                while ($row2 = $result2->fetch_assoc()) {
                 echo "<td id=".$roww['route_id'].">".$row2['destination']."</td>";
                }
                
            }   }
     }
    }
    
    }elseif(isset($_POST['search']) && isset($_POST['departure']) && isset($_POST['arrival'])){
        if ($result = $con->query('SELECT * FROM `route` WHERE 1')) {
    while ($row = $result->fetch_assoc()) {
        $pieces = explode("-", $row['route']);  
          $departure=$_GET['departure'];//виїзд
          $arrival=$_GET['arrival'];//прибуття        
          $end=end($pieces);
          $strt=$pieces[0];
          $r = $con->query("SELECT * FROM `town` WHERE `id_town`=".$end);
          while ( $rowend = $r->fetch_assoc()){$res=$rowend['destination'];}
          $r0 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$strt);// виїзд
          while ($rowstr = $r0->fetch_assoc()){$res0=$rowstr['destination'];}
    
           if($res0==trim($departure) && $res==trim($arrival)){
 echo"<tr><td>".$row['departureTime']." ".$row['departureDate']."</td><td>".$row['arrivalTime']." ".$row['arrivalDate']."</td><td>".$row['price']."</td>";    
            for($i=0;$i<count($pieces);$i++){           
            if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {
                while ($row2 = $result2->fetch_assoc()) {
                 echo "<td id=".$row['route_id'].">".$row2['destination']."</td>";
                }
                
            }   
        }
      echo"</tr>";  
    }
    }     
} 
}else{ 
    if ($result = $con->query('SELECT * FROM `route` WHERE 1')) {
        while ($row = $result->fetch_assoc()) {
    $pieces = explode("-", $row['route']);  
    echo"<tr><td>".$row['departureTime']." ".$row['departureDate']."</td><td>".$row['arrivalTime']." ".$row['arrivalDate']."</td><td>".$row['price']."</td>";    
    for($i=0;$i<count($pieces);$i++){           
    if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {
        while ($row2 = $result2->fetch_assoc()) {
         echo "<td id=".$row['route_id'].">".$row2['destination']."</td>";
        }
        
    }   
}
echo"</tr>"; }



}   
}

echo"</table>";

?>

