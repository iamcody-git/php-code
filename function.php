<?php
/*
Functions
function naming rules
1. must start with letter or underscore
2. name must be unique
3. name mustnot  contain space
4. input parameters and output  are optional
*/

function sum($a,$b){
return $a + $b;
}
echo sum(6,9). "<br>";
 echo sum(11,90)."<br>";


// function with optional parameter and default values

// function multiply($a, $b=5){
//     return $a * $b;
// }
// function multiply($a, $b, $c){
//     return $a * $b * $c;
// }
//  echo $result =multiply(6,3);
// // echo $result;

// func_num_arg
function getNumberOfArgument(){
    $numOfArgs = func_num_args();   // to check the length of an argument
    echo"Number of arguments = $numOfArgs";

}
getNumberOfArgument("a","b","c");
echo "<br>";

// func_get_arg
function getSpecificParameter(){
    $numOfArgument = func_num_args();
    echo"Number of arguments = $numOfArgument"."<br>";
    if($numOfArgument > 1){
        echo "third parameter is :".func_get_arg(2)."<br>";
        echo "second parameter is :".func_get_arg(1)."<br>";
        echo "first parameter is :".func_get_arg(0)."<br>";
    }
   
}
getSpecificParameter("car","bus","truck");
// getSpecificParameter();

//func_get_args
function getAllArguments(){
    $allArgs = func_get_args();   // to get all the argumets at once 
    var_dump($allArgs);  // to print all the echo arguments
}
getAllArguments("car","bus")."<br>";

// assignemet

function sumAll(){
   
    $numOfArgs = func_num_args();
    echo "number of argument: $numOfArgs";
for ($i=0; $i<=$numOfArgs; $i++){
    $sum = 0;
    $allArguments = func_get_args();
    $sum = $sum + $allArguments[$i];

}
echo $sum;
}
echo sumAll(3,5,6);

// php array function

// array merge
 $boys =["ram", "sam", "hari"];
 $girls =["gita", "rita", "sam"];
 $students = array_merge($boys, $girls);
 print_r($students);  // print is used to print array as well as string but echo to print string

 // array_merge_recursive
 $first =[
 "car" => "bmw",
 'bike' => 'harley'
 ];
 $second =[
    "car" => "lambo",
    'bike' => 'yamaha',
    'scootor' => 'dio'
 ];

$third = array_merge_recursive($first, $second);
echo "<br> <pre>";
 
print_r($third);

// array sorting 
// ascending
$numbers = [3,9,4,7,1,0];
 sort($numbers);
 print_r($numbers);

 // descending 
 rsort($numbers);
 print_r($numbers);

 // searching array

 // array_key_exists : to check key

 $hasScootor = array_key_exists("scootor", $first);
 var_dump($hasScootor);

 // in_array : to check vaule / argument
 $hasBMW = in_array("bmw", $first);
 var_dump($hasBMW);


 ?>