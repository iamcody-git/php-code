<?php
$host = "localhost:3307";
$username = "root";
$password = "";
$databaseName = "lab4";
$connection = new mysqli($host,$username,$password);

if($connection -> connect_errno!=0){
    die ("connection failed");
}

$connection ->select_db($databaseName);
?>