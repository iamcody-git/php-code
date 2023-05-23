<?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            
            setcookie('username', $name, time() + (7*24*60*60), '/');

            header('Location: next_page.php');

        if (isset($_COOKIE['username'])) {
            $name = $_COOKIE['username'];
            echo "Hello $name";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies checking</title>
</head>
<body>
    <h2>Cookie check </h2>
    <form method="post">
    <label>Username:</label><br>
    <input type="text" name="name"><br>
    <button type="submit">submit </button>
    </form>
    
</body>
</html>