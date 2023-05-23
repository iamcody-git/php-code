<?php
// Unix timestamp
$time = time();
$timestamp = strtotime('now');
$timestamp = strtotime('tomorrow');
$timestamp = strtotime('22 year ago 10 month');

echo $timestamp."<br>";
// date 
$date = date('Y-F-d H:i:s');
echo $date ."<br>";


echo $time."<br>";
echo $timestamp;

?>