<?php

/*
do{


}while( condition );
*/

//semeicolon after the while


$max = 100;
$counter = 2;
do{
echo "Square: " . $counter;
$counter *= 2;
echo "<br>";
}while($counter <= $max);