<?php
/*
controls structure
1. if statement
2. if else statement
3. if else if statement
4. switch statement
*/
// if statement
$num = 50;
if($num >0){
    echo "+ve number";
}else if($num = 0){
    echo "Zero";
}
else{
    echo "-ve number";
}

// switch statement
switch($num){
case 0: 
    echo "zero";
    break;
    case $num > 0:
        echo "+ve"."<p/>";
        break;
        default:
        echo "-ve"."<br>";
        break;

}
/*
looping statement
1. for loop
2. while loop
3. do while loop
4. foreach loop
*/


// for loop

for($i = 0; $i<=10; $i++){
    echo "$i";
}

// while loop
$i = 0;
while($i<= 10){
    echo $i;
    $i++;
}

// do while loop
$j=0;
do{
    echo $j;
    $j++;
}
while ($j < 10);
 
// foreach loop
$bands = ["the elements", " the who ", "nirvana"];

foreach ($bands as $key => $band){
    echo $key . ":" . $band . "<br>";
}
 $books =[
    "milan" => "intellegent investor",
    "sahil" => "the camera",
    "cody" => " helooo"
 ]; 
 foreach($books as $author =>$bookName){
    echo $author . ":", $bookName. "<br>";
 }

?>