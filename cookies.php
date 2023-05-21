<?php
/*
cookies
setCookie(name, value, expire, path, domain,secure)
*/
// setcookie("dark", "true",time() +7*24*60*60);

/*
Access cookies 
$_COOKIES = superglobal variable to acces cookie
*/
$darkMode = false;
if (isset($_COOKIE['dark'])) {
    if($_COOKIE['dark']== 'true'){
        $darkMode = true;
    }
}

/* home work
on first time : create a form asking user name 
on submit : set cookies with user's name 
on next page visit, if cookies is set , display "hello $name"

*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies check</title>
</head>
<body style="background-color: <?php echo $darkMode ? '#000' : '#fff'; ?>">
</body>
</html>