<?php

$input_number = 10;
 $result = $input_number % 2;

 switch($result){

     case 1:
        echo "odd number";
        break;
     case 0;
       echo "even number";
     break;

     default:
     echo "Invalid Input" ; //value null, doesn't need the break statement bc its the last case

 }

 echo "<br>";

 switch (true) {
    case  ($input_number>10):
        echo "Number greater than 10";
          
        break;
    
        case  ($input_number==10):
            echo "Number equal to 10";
              
            break;

            case  ($input_number<10):
                echo "Number less than 10";
                  
                break;
        
    default:
    echo "Invalid Input" ;
        break;
 }