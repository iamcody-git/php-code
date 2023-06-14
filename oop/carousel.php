<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="js/assets/owl.carousel.css">
</head>
<body>
<div class="owl-carousel owl-theme">
    <div class="item">
    
    </div>
    <div class="item">2</div>
    <div class="item">3</div>
    <div class="item">4</div>
    <div class="item">5</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script src="js/owl.carousel.js">
</script>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
        nav : true,
        margin :10,
        responsive :{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
        })
    })
</script>
    
</body>
</html>