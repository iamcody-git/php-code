<?php
/*
type of array
1. numeric index array
2. associative array 
3. multi dimensional array

*/

// numeric array
$animals = [ "lion", "tiger", "cat"];
$moreAnimals = array ("cow", "dog");

// associative array
$animalShelter = [
    "lion" => "jungle",
    "cat" => "home"
];

// multidimension array

$genres = [
    "fiction"=>[
        "action and adventure",
        "sci-fi",
        "fantasy"
    ],
    "non-fiction "=>[
        "biography",
        "documentary"
    ]
    ];
    echo $genres["fiction"][2]."<br>";
    foreach ($genres as $genre){
        foreach($genre as $genreItem){
            if ($genreItem == $genre[0]){
                echo $genreItem."<br>";
            }
        
        }
    }


?>