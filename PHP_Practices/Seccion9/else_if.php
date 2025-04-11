<?php
 
 $input_number = 10;
 $result = $input_number % 2;

 if ( $result ){
    echo "odd number";
 } else if(!$result){
    echo "even number";
 }


 //check if the input is greater than 10

 if($input_number > 10){
echo "The number is greater than 10";
 }elseif ($input_number == 10) {
    echo "The number is equal to 10";
 }else {
    echo "The number is less than 10";
 }