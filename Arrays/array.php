<?php

# Basic array
$pokemon = ["charizard", 1, 2, 3 ,4];
    // echo will return just an array word
print_r($pokemon);


// just a little bit of spacing here hehe
echo "</br>";
echo "</br>";
echo "</br>";

// Associative array
// key value pairs
$user = [
    "name" => "nblancs",
    "role" => "dev",
];

echo $user ["name"];

// just a little bit of spacing here hehe
echo "</br>";
echo "</br>";
echo "</br>";

// looping example for this array

foreach($user as $key => $value){
    echo $key .  ":" . $value . "</br>"; 
}