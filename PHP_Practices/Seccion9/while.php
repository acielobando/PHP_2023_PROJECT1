<?php

/*

while (condition){

    //code to be executed
}

*/

$counter = 1;
while(  $counter<= 10 ){
    
    $result = $counter %2;
    if ($result > 0) {
        echo 'Odd number: '. $counter;
        echo "<br>";
    }
    $counter++;
}

