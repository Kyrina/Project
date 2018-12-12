<?php 

echo"<table border='1'> <tr>
<th>Відправка</th><th>Прибуття</th><th>Ціна</th><th>Зупинка_1</th><th>Зупинка_2</th><th>Зупинка_3</th><th>Зупинка_4</th>
</tr>";
if ($result = $con->query("SELECT * FROM `route` WHERE 1")) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

        $pieces = explode("-", $row['route']);  
        if(isset($_GET['search'])){
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
    }elseif(isset($_GET['btndte']))
    {
        $dte=$_GET['dte'];
    echo $dte;
    
}else{ 
     
    echo"<tr><td>".$row['departureTime']." ".$row['departureDate']."</td><td>".$row['arrivalTime']." ".$row['arrivalDate']."</td><td>".$row['price']."</td>";    
    for($i=0;$i<count($pieces);$i++){           
    if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {
        while ($row2 = $result2->fetch_assoc()) {
         echo "<td id=".$row['route_id'].">".$row2['destination']."</td>";
        }
        
    }   
}
echo"</tr>"; }



}    }


echo"</table>";

?>

