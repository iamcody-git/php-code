<?php
require_once"./mysql.php";

$sql = "
       INSERT INTO students (name, rollno) VALUES ('cody', 01) ;
       ";
       $sql2= "
       INSERT INTO students (name, rollno) VALUES ('john', 02) ;
       ";

       $sql3= "
       INSERT INTO students (name, rollno) VALUES ('enoz', 03) ;
       ";
       $sql4= "
       INSERT INTO students (name, rollno) VALUES ('messi', 04) ;
    
       ";
       $sql5= "
       INSERT INTO students (name, rollno) VALUES ('dimaria', 05) ;
       ";
       
$success = $connection -> query($sql);
if ($success) {
echo "record inserted successfully <br>";

}else{
    echo "error inserting recording data <br>";
}

$success = $connection -> query($sql2);
if ($success) {
echo "record inserted successfully <br>";

}else{
    echo "error inserting recording data <br>";
}

$success = $connection -> query($sql3);
if ($success) {
echo "record inserted successfully <br>";

}else{
    echo "error inserting recording data <br>";
}

$success = $connection -> query($sql4);
if ($success) {
echo "record inserted successfully <br>";

}else{
    echo "error inserting recording data <br>";
}

$success = $connection -> query($sql5);
if ($success) {
echo "record inserted successfully <br>";

}else{
    echo "error inserting recording data <br>";
}



?>