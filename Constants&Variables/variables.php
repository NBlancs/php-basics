<?php

// Variable Variables

$foo = 'bar';
$$foo = 'baz';

echo $foo, $$foo;
echo $foo, $bar;

echo "$foo, ${$foo}";