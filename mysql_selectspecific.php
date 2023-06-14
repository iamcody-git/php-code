<?php
// homework
// select student whose roll no is grater than 2

require_once"./mysql.php";

$sql = "select *from students
        where rollno > 2
       ";

$result = $connection -> query($sql);
if($result -> num_rows >0){
    $data = []; 
    while($row = $result -> fetch_assoc()){   
     array_push($data, $row);
    }
}
echo "<pre>";
print_r($data);

?>