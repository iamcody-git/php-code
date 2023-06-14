<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serach autocomplete</title>
</head>
<body>
    <input type="text"  id="search" placeholder="search students">
    <h3>students list </h3>

    <ul id="studentlist">
         <li>cody</li>
    </ul>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>

    // jquery in php

    $('#search').keyup(function(e){
        let name = e.target.value;

        $.ajax({
   method:'GET',
   url : 'serach_server.php?name=' +name,
    success : function(data){
        let listData ="";
            for(let item of data){
                listData += "<li>" + item.name + "<li>";
            }
        $('#studentlist').html(listData);

    }
})
});





// let studentListElement = document.getElementById('studentlist');
// let searchInput = document.getElementById('search');

// searchInput.addEventListener('keyup',function(e){
//     let name = e.target.value;

//     let request = new XMLHttpRequest();
// request.open("GET","serach_server.php?name=" + name);
// request.send();

// request.onreadystatechange = function(){
//     if(request.readyState == 4){
//         if(request.status == 200){
//             let data = request.responseText;
//             data = JSON.parse(data);
//             let listData = "";
//             for(let item of data){
//                 listData += "<li>" + item.name + "<li>";

//             }
//             studentListElement.innerHTML = listData;
//         }else{
//             console.error("error occured");
//         }
//     }
// }

// })



</script>
</body>
</html>



