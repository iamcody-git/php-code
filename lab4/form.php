<?php
$namerr = $pwderr = $uerr = $emailerr = "";

if (isset($_POST['name'])) {
    $isFormValid = true;
    $fullName = $_POST['name'];
    if ($fullName == "" || (!preg_match("/^[a-zA-Z]+\s+\w*$/", $fullName) || strlen($fullName) > 40)) {
        $isFormValid = false;
        $errmsg = "only letters are allowed " . "<br>";
    } else {
        echo "your  first name is $fullName" . "<br>";
    }
}

if (isset($_POST['email'])) {
    $Email = $_POST['email'];
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "validate email address  is : $Email<br>";
    } else {
        $isFormValid = false;
        $emailerr =  "not a validate email address<br>";
    }
}

if (isset($_POST['uname'])) {
    $userName = $_POST['uname'];
    if ($userName == '' || !preg_match("/^\d+(\w{4})?$/", $userName)) {
        $isFormValid = false;
        $uerr = " not a correct uname<br>";
    } else {
        echo "Your username is $userName<br>";
    }
}

if (isset($_POST['pwd'])) {
    $Password = $_POST['pwd'];
    if ($Password == '' || !preg_match("/^[A-Za-z0-9!@#$%^&+]{6,16}$/", $Password)) {
        $isFormValid = false;
        $pwderr = "your password is not correct";
    } else {
        echo "your password is $Password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab4 Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h2> Form Validation </h2>
            <label for="">Full Name* </label><br>
            <input type="text" name="name" id="name">
            <p><?php echo $namerr; ?>

                <label for="">E-mail Address* </label><br>
                <input type="email" name="email" id="email">
            <p><?php echo $emailerr; ?>

                <label for="">UserName* </label><br>
                <input type="text" name="uname" id="uname">
            <p><?php echo $uerr; ?>

                <label for="">Password* </label><br>
                <input type=" password" name="pwd" id="pwd">
            <p><?php echo $pwderr; ?>

                <button name="submitted" type="submit">Submit</button>

        </form>
    </div>
</body>

</html>

<?php
if ($isFormValid) {

    $host = 'localhost:3307';
    $userName = 'root';
    $password = '';
    $dbName = 'labtable';

    $connection = new mysqli($host, $userName, $password);
    if ($connection->connect_error != 0) {
        die('connection error');
    }
    $connection->select_db($dbName);

    if (isset($_POST['submitted'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $userName = $_POST['uname'];
        $fullName = $_POST['name'];

        $sql = "
    INSERT INTO tableinfo(fullname, email, username, password) VALUES('$fullName','$email','$userName','$password');
    ";
        $success = $connection->query($sql);
        if ($success) {
            echo "record inserted successfully";
        } else {
            echo "error in inserting data";
        }
    }
}
?>