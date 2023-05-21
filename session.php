<?php
/*
session is safe than cookie!! cookie works in browser but session in server side. session only exist in php server side

session
simple file or database record which contains small piece of data in server side

instead of sending data to browser , it sends a unique ID called session ID to the browser

on each future request , browser will send the session ID.

// how to create session 
session_start();
$_SESSION['darkMode']=true;

*/
session_start();
if(isset($_SESSION['page_count'])){
    $_SESSION['page_count'] += 1;
}else{
    $_SESSION['page_count'] = 1;
}
// session_destroy(); // destory all session
unset($_SESSION['page_count']); // destory specific session only here destory only page_count session
// echo "this page has been visited  " .$_SESSION['page_count']  .  "times";
echo "this page has been visited  " .$_SESSION['page_count' .'times'];

?>