<?php 
echo"<table border='1'> <tr>
<th>Відправка</th><th>Прибуття</th><th>Ціна</th><th>Зупинка_1</th><th>Зупинка_2</th><th>Зупинка_3</th><th>Зупинка_4</th>
</tr>";
if ($result = $con->query("SELECT * FROM `route` WHERE 1")) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo"<tr><td>".$row['departureTime']." ".$row['departureDate']."</td><td>".$row['arrivalTime']." ".$row['arrivalDate']."</td><td>".$row['price']."</td>";
        $pieces = explode("-", $row['route']);  
        for($i=0;$i<count($pieces);$i++){

            if ($result2 = $con->query("SELECT * FROM `town` WHERE `id_town`=".$pieces[$i])) {

                /* fetch associative array */
                while ($row2 = $result2->fetch_assoc()) {

            echo "<td id=".$row['route_id'].">".$row2['destination']."</td>";
                }
            }
        }
           
       
        echo"</tr>";     
       
     }
}
//$intersec=array_intersect($pieces1,$pieces2);
echo"</table>";

?>

