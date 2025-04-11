<?php

$arr = [];

    echo "<br>";
    echo count($arr);
var_dump ($arr);
echo "<br>";

if (empty($arr)) {
    echo "<br>";
    echo "Array is empty";
    echo "<br>";

}



$arr = 10; // array to integer
echo "<br>";
var_dump ($arr);
echo "<br>";
$arr = [10]; // to add a value correctly
var_dump ($arr);
echo "<br>";

$arr[0] = [10]; // now index 0 holds an array which has 0 as a first value
var_dump ($arr);
echo "<br>";

//reset the array

$arr = [];

//array inside another array
$arr = [[]];

var_dump($arr);