<?php


//also called as closures.

/*
function add($a, $b): int{
    $addition = $a + $b;
    return $addition;
}
$addfunction = "add";
echo "Result: ".$addfunction(1,2).PHP_EOL;

*/

$addfunction = function($a, $b) : int{
    $addition = $a + $b;
    return $addition;
    
};

echo $addfunction(1, 2).PHP_EOL;

//we re not able to access a variable inside an anonymus function
