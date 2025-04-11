<?php

//to find a string position inside another string

$content = "This is a very long content and it is a string";

$findContentWord = "content";

$position = strpos($content, $findContentWord);
echo $position;

echo "<br>";

$content = "This is a very long content and it is a string";

$findContentWord2= "content2";

$position2 = strpos($content, $findContentWord2);
//right way to compare the position
if( $position2 === false){
  echo "Not found";
}