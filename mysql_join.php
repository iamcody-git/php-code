<?php

/*
 * mysql joins
 * 
 * INNER JOIN
 * 
*/

require_once"./mysql.php";

$innerSQL = "select p.id, p.tittle as pdt_tittle, c.name as category_name from products p join catergories c  on p.category_id = c.id";

$result = $connection -> query($innerSQL);

$data =[];

if($result ->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        array_push($data,$row);
    }
}

echo "<pre>";
print_r($data);
?>