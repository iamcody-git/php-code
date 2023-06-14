<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <!--  AJXA :Asynchronous Javasacript AND  XML -->

    

</body>
<script>
 let request = new XMLHttpRequest();
 request.open('GET', 'http://localhost/scripting/oop/exception.php');
 request.send();


 request.onreadystatechange = function(){
    if(request.readyState== 4  ){

        if(request.status == 200){
            alert(request.responseText);
        }
        else{
            alert("error: " + request.statusText);
        }
    }
 };

</script>
</html>

