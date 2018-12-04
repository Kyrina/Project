<?php 
require("../DB/connect.php");

echo"<table border='1'> <tr>
<th>Зупинка_1</th><th>Зупинка_2</th><th>Зупинка_3</th><th>Зупинка_4</th>
</tr>";
if ($result = $con->query("SELECT * FROM `route` WHERE 1")) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo"<tr>";
        $pieces = explode("-", $row['route']);  
        for($i=0;$i<count($pieces);$i++){
            echo "<td id=".$row['id'].">".$pieces[$i]."</td>";
        }
           
       
        echo"</tr>";     
       
     }
}
$intersec=array_intersect($pieces1,$pieces2);
echo"</table>";
?>