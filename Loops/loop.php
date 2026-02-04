<?php



// loop

for ($i = 0; $i <= 5; $i++){
    echo "Iteration" . "<br>". $i . "<br>" ;
}


// for each

$pokemons = ["pika","chari"];
foreach($pokemons as $pokemon){ 
    echo $pokemon . "<br>";
}