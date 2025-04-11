<?php

$array = [1,2,3];

//function to print array

var_dump($array);
echo "<br>";

print_r($array);

//echo cannot print the whole array
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";
echo $array[2];


echo "<br>";
echo "$array[0]";
echo "<br>";
echo "$array[1]";
echo "<br>";
echo "$array[2]";
echo "<br>";
//count the array lenght

echo "Array length: " . count($array);
echo "<br>";
//Loop thro the array using for loop

for($count = 0; $count < count($array); $count++){
echo $array[$count];
echo "<br>";
echo "$array[$count]";
echo "<br>";
}


echo "<br>";


//Access array using constant

const ARRAYELEMENT = 1;

echo "{$arr[ARRAYELEMENT]}" . PHP_EOL;
