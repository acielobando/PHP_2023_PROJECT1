<?php
//Indexed arrays are sequence array of element with integer index number
//mostly its in sequence
// index starts with 0
// new elements get the index of highest index +1 number
//you can always break the sequencec and add new elements to future index

$arr = [1, 2, 3, 4, 5];
var_dump($arr). PHP_EOL;

$arr[100] = 100;
var_dump($arr). PHP_EOL;