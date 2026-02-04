<?php


// Scalar Types
    # bool -> true(1) or false(0)
    # int -> 1,2,3,4,5
    # float -> 1.5,2.75
    # string -> "Hello there"

    $completed = true;
    $score = 75;
    $price = 10.99;
    $greeting = "Hello there";

    echo $completed . "</br>";
    echo $score . "</br>";
    echo $price . "</br>";
    echo $greeting . "</br>";

    // get type

    echo gettype($completed) . "</br>";
    echo gettype($score) . "</br>";
    echo gettype($price) . "</br>";
    echo gettype($greeting) . "</br>";

    // var dump 
    var_dump($completed);
    var_dump($score);
    var_dump($price);
    var_dump($greeting);



// Compound Types
    
    # array
    $pokemon = ["charizard", 1, 2, 3 ,4];
        // echo will return just an array word
    print_r($pokemon);

    # object
    # callable
    # iterable


// Special Types
    # resource
    # null






?>