<?php

//continue will skip the next line and go to the next loop

$value = 1;

while(true){
    $result = $value %2;
    
    if ($result == 1){
        $value++;
        continue; // it skips the loop when result value is equal to one
    }
    if ($value > 10){
        break;
    }

    echo 'Even Numbers: '.$value;
    echo "<br>";
    $value++;
}