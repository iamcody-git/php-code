<?php

// for custom exception

class LongMessageException extends Exception{
 
}

/*
*Exception

type 
general exception
custom exception


throw and catch
*/
function sendMessage($message){
if($message == ""){
    throw new Exception("empty message");
}

  if(strlen($message) > 20){
    throw new LongMessageException("string message must be less than 20 char");
  }
  echo $message;
}


try{
    sendMessage("hello <br>");
    sendMessage("");
    sendMessage("jasn xsbv ksaccs sksackas kscnkzcj ksancbscn sanbjbcv kascbcasb <br>");

}catch(LongMessageException $e){
    echo "ERROR : ". $e ->getMessage();
    echo "<br>";

}catch(Exception $e){
    echo "general error : ".$e ->getMessage();
    echo "<br>";
}

finally{
    echo "finally ran  ";
}
?>