<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
    
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        }
  
        .container {
        background-color: wheat;
        width: 350px;
        height: 200px;
        margin-top: 50px ;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        justify-content: center;
        align-items: center;  
        }
        button{
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>JOKES SESSION </h2><br>
    <p id="joke"></p><br>

    <button type="submit" onclick="refresh()">REFRESH </button>
     </div>
    <script>
        function refresh(){
        var request = new XMLHttpRequest();
        request.open("GET","https://icanhazdadjoke.com");
        request.setRequestHeader('Accept','application/json');
        request.send();

        request.onreadystatechange = function(){
            if(request.readyState == 4){
                if(request.status == 200){
                    let data =JSON.parse(request.responseText);
                    let joke=data.joke;
                    document.getElementById('joke').innerHTML=joke;
                }else{
                    alert('ERROR:' + request.status);
                }
            }
        };
    }

        </script>
    
</body>
</html>