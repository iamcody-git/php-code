

<?php
$name = "cody";

/*
rules:
1. must start with a letter or underscore
2.
*/
$_name ="milan";
$lastname ="aji";

/*
2. variables are case sensitive
$Name ="";
$NAME ="";

3. variables name can only contain
- uppercase and lowercase letters (a-z A-Z)
- numbers (0-9)
- underscore(_) 
*/
// destory variables
unset($NAME);
 
// DIFFERENCE between $ and $$
$name ="sahil";
$sahil = "milan";

echo $name . $lastname ."<br>"; // . is used as concatenate
echo $$name. "<br>";

// Super global variables in PHP
// 1. $GLOBALS

$result = 0;
function sum($a, $b){
    $GLOBALS['result'] = $a + $b;
}
sum(5,6);
echo $result."<br>";

// 2. $_SERVER

// foreach($_SERVER as $key => $value){
//     echo $key . "=".$value . "<br>";

// }
 // 3. $_REQUEST
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_REQUEST["email"];
    echo $email;
    // $image1= $_FILES["image"];
    // echo $image1;
    echo "<pre>";
    var_dump($_FILES['image']);

}


// 4. $_POST
// 5. $_GET
//6. $_FILES
// 7. $_COOKIES
// 8. $_SESSION
?>
<form method="post" action="variable.php" enctype="multipart/form-data">
    <label for="">Email:</label>
    <input type="email" name="email" id="">
    <br/><br/>
    <label>image</label>
    <input type="file" name="image">
    <button type="submit"> submit</button>
</form>

s