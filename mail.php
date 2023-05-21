<?php
/*
sending email using php
mail(to, subject, message)

*/
$mailSent = mail("adhikariprashant009@gmail.com","test mail from scripting class","hello this is email test");
if($mailSent){
echo "mailsent sucessfully";
}else{
    echo "mail not sent";
}

?>