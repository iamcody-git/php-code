<?php
require_once"./mysql.php";

$sql = "
       INSERT INTO students (name, rollno) VALUES ('cody', 01) ;
       

       ";

       
$success = $connection -> query($sql);
if ($success) {
echo "record inserted successfully";

}else{
    echo "error inserting recording data";
}

?>