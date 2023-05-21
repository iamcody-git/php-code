<?php
/* home work
on first time : create a form asking user name 
on submit : set cookies with user's name 
on next page visit, if cookies is set , display "hello $name"
*/

if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo "Hello $name";
} else {
    setcookie('name', $_GET['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <form <?php if(isset($_COOKIE['name'])) echo 'seen' ?>> 
            <label>UserName<br>
                <input name="name" type="text" required>
            </label>
            <button name="submit">Submit</button>
        </form>
    
    </body>
</html>


