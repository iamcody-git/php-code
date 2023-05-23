<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

</head>
<body>
    <h2>Registeration form</h2>
<form action="register.php" method="post">
    <label>First Name </label>
<input type="text" name="first_name" /> <br><br>

<label> Last Name </label>
<input type="text" name="last_name" /><br><br>
<label> Email </label>
<input type="text" name="email" /><br>
<button type="submit" > submit </button>

</form>
</body>
</html>

<?php
// if(isset($_POST['first_name'])){
//     $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
// //    echo "must fill the data";
// echo "hello $first_name $last_name";
// }
// if(isset($_GET['last_name'])){
//     $last_name = $_GET['last_name'];
// }

// $firstName = $_GET['first_name'];
// $lastName = $_GET['last_name'];

// echo "hello $firstName $lastName";
if(isset($_POST['first_name'])){
    $firstName = $_POST['first_name'];
    if(!preg_match("/^[a-zA-Z]*$/", $firstName)){
        echo "only letters are allowed " ."<br>";
    }else{
        echo "your  first name is $firstName". "<br>";
    }
}
if(isset($_POST['last_name'])){
    $lastName = $_POST['last_name'];
    if(!preg_match("/^[a-zA-Z]*$/", $lastName)){
        echo "only letters are allowed";
    }else{
        echo "your last name is $lastName"."<br>";
    }
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "validate email address";
    }else{
        echo "not a validate email address";
    }
}



?>