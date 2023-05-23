<?php
require_once"./mysql.php";  // linking the connection

$sql ="select *from students";

$result = $connection -> query($sql);

if($result -> num_rows >0){
    $data = [];   // creating a empty array to store array data
    while($row = $result -> fetch_assoc()){   // other option fetch_array etc
     array_push($data, $row);
    }
}
echo "<pre>"; // to give beauty to the o/p
print_r($data);  // _r to print array

?>