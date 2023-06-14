<?php

require_once "../mysql.php";

$name = $_GET['name'] ?? '';

$sqlQuery = "select *from students
            where name like '%" .$name . "%'";

$result = $connection -> query($sqlQuery);
$data =[];

while($row = $result -> fetch_assoc()){
    array_push($data,$row);

}
 echo json_encode($data);