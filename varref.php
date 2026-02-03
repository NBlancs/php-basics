<?php

$x = 1;
$y = &$x;

$x = 3;

echo $y;

?>