<?php

function addition($x , $y) {

    return $x + $y;

}


echo addition(5, 2);
echo "</br>";


function greetings ($name = "guest") { // guest is the default something if there is no value in name
    return "Hello " . $name;
}

echo greetings ("Nblancs");