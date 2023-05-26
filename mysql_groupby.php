<?php
// mysql group by  
// order by
// limit use when paging is required

require_once"./mysql.php";

$innerSQL = "
select  category_id,COUNT(tittle) from products GROUP BY category_id order by category_id desc limit 10 
";

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