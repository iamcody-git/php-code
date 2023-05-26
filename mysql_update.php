<?php

require_once "./mysql.php";

$sql = "
update students set name = 'john' and address ='ktm' where rollno =1
";
 $result = $connection -> query($sql);
 if ($result){
    echo "updated successfully";
 }
 else{
    echo "error not updated";
 }
?>