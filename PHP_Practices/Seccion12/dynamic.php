<?php

function add($a,$b) : int{
    return $a + $b;
}

$addFunction = "add"; //this variable works as a function bc it holds its name 

echo "Result: ".$addFunction(1, 2).PHP_EOL;
//its like add(1, 2);