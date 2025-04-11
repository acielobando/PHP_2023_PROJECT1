<?php

//to find the lenght of the string

$name = "Santiago";
echo strlen($name);

echo "<br>";
$name = "";

echo strlen($name);

echo "<br>";
echo strlen($name); //it returns 0 value whenever you try to use the function with a null, zero or empty value