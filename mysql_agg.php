<?php
/*
mysql aggregation

types of aggregation
1. COUNT
2. SUM
3. AVG
4. MAX
5. MIN


* COUNT: RETRURNS TOTAL NUM OF VALUES IN SPECIFIED FIELD

*/

require_once"./mysql.php";

$countSQL = "select  COUNT(name) as totalStudent from students";

$result = $connection -> query($countSQL);
if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    print_r($row);
    echo "<br>";

}

// SUM : returns the total non-null values in the expression

$sumSQL = "select  sum(rollno) as totalRoll from students";

$result = $connection -> query($sumSQL);
if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    print_r($row);
    echo "<br>";
}

// AVG : returns the average of the values in the specified column

$avgSQL = "select  AVG(rollno) as totalRoll from students";

$result = $connection -> query($avgSQL);
if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    print_r($row);
    echo "<br>";
}

// MAX : return the max value in the specified column 

$maxSQL = "select  max(rollno) as totalRoll from students";

$result = $connection -> query($maxSQL);
if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    print_r($row);
    echo "<br>";
}

// MIN : returns the min value in the specified column

$minSQL = "select  MIN(rollno) as totalRoll from students";

$result = $connection -> query($minSQL);
if($result -> num_rows > 0){
    $row = $result -> fetch_assoc();
    print_r($row);
    echo "<br>";
}


?>