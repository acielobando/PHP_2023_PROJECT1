<?php

//String to array
$students ="Jimena, Aciel, Santiago, Mario";
$studentArr = explode(",",$students);
print_r($studentArr);

$studentList = implode(",", $studentArr);
echo $studentList . PHP_EOL;

$students ="Jimena, Aciel, Santiago, Mario";
$studentArr = explode(",",$students, 3);
print_r($studentArr);