<?php

/*
 * mysql subquery
 * 
 * subquery
 * 
*/

require_once"./mysql.php";

$innerSQL = "select *  from catergories   
where id IN (
    select distinct category_id from products )"; // subquery concept 

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