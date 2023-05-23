<?php
require_once"./mysql.php";

$sql = "delete from students where id =1";

$result = $connection -> query($sql);
if($result){
    echo "record deleteed succesfully";
}

?>