<?php

/*

foreach ($array as $value){
    code
}

*/


$arr = ["Mon", "Tues", "Wed", "Thurs","Fri","Sat","Sun"];
var_dump ($arr);
echo "<br>";

$counter = 0;
foreach ($arr as $values){
    echo $values;
    echo "<br>";

}

$counter = 0;
foreach ($arr as $values){
    echo "[$counter] => $values";
    echo "<br>";
   $counter++;
}


$arr = [34, 54, 43, 9, 46, 88, 27];
var_dump ($arr);
echo "<br>";

$counter = 0;
foreach ($arr as $values){
    echo $values;
    echo "<br>";

}
