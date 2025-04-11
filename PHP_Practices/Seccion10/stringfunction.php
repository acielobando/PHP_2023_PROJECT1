<?php

/*
1) Learn to use the following string functions
number of words
replace strings
reverse strings
remove white spaces
shuffle strings
find position case insentive
upper and lowercase
word wrap the string and display it


*/


$content = "You can do string operations with string functions";
$findword = "operations";
$position = false;

echo $content;
echo "<br>";


//Number of words
echo "Number of words in the string :".str_word_count($content);
echo "<br>";

 //replace strings

 echo "Find and replace :". str_replace("operations","manipulation", $content);


 //Reverse string
 echo "<br>";
echo strrev($content);

//shuffle string
echo "<br>";
echo str_shuffle($content);

echo "<br>";
//find position
echo stripos($content, "MANIPULATION");
echo "<br>";

//uppercase annd lowercase

echo strtoupper($content);
echo "<br>";

echo strtolower($content);
echo "<br>";

//wrap


echo wordwrap($content, 2);

