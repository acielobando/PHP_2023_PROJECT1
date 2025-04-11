<?php

//if the index is not specified, php will use the increment of the largest previously used integer key

$arr = [];
$arr[0] = 1;
$arr[2] = "String";
$arr[4] = true;
$arr[10] = 14.5;

//adding new values


$arr[] = "New string 1";
$arr[] = "New string 2";

//guess
var_dump($arr);