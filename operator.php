<?php
/*
category of php operator 
1. arithmatic operator
2. comparision operator
3. bitwise operator
4. logical opeartor
 
*/
// arithmatic opeartor
$sum = 9+3;
$diff = 12-9;
$multiplication=3*5;
$div=10/2;
$mod=10/3;
$sum++;//sum=sum+1;
$sum--;//sum=sum-1

//comparison operator
echo 5==5;
echo 5<10;
echo 5>10;
echo 5>=4;
echo 5<=6;
echo 5===5;//triple equals = false as it checks data types also

//logical operator
echo true and true;// true
echo true or false;//true
echo !true;//fasle

//bit-wise Operator



//Assignment Operator
$movie="Pathan";
$sum=$sum+2;//sum+=2
//sum-=2
//sum*=2
//sum/=2

//ternary Operator
$marks=50;
if (true){
    if($marks>40){
        echo "pass";
    }
    else{
        echo "fail";
    }
}
echo $marks >40 ?"pass ":"fail";

?>