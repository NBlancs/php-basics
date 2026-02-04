<?php

$sum = 10 + 5;
$isEqual = (10 == "10"); // comparison will return true even if string since it checks the value
$isStrict = (10 === "10"); // will return false since it checks type
$name = "n" . "blancs"; // basic concatenation

echo $sum . "<br>";
echo $isEqual . "<br>";
echo var_dump($isStrict) . "<br>"; // var dump for better visualization
echo $name . "<br>";


?>