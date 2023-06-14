<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
</head>
<body>

<!-- <a href="" class="home">Home</a> -->
<button id="show">show</button><br>
<button id="hide">hide </button>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatum id. Est, distinctio. Iusto optio quidem atque esse voluptatum libero cum suscipit necessitatibus, fuga ut velit odio perspiciatis inventore sapiente illo debitis. Dolorum a velit adipisci beatae laborum exercitationem ullam amet quasi, maiores, aut harum! Adipisci maxime fugiat dolorum voluptates.</p>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
    
    // $(selector).function();
    $(document).ready(function(){
    //     // after document is ready

    $('#hide').click(function(){
        $('p').hide();
    })

    $('#show').click(function(){
        $('p').show();
    })
    });

// or option

//     $(function(){
// // another way 
// $('a') // document.querySelector('a)
// $('.home') // for class
// $('#home') // for id
// $('[href=""]') // for link
//     });



    
    </script>
</body>
</html>