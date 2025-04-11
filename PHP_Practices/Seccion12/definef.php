<?php


//define

function printEvenNumbers($limit){
for($index = 0; $index <= $limit; $index++){
    if($index%2 == 0){
        echo "Even Number: $index". PHP_EOL;
    }
}
}

printEvenNumbers(20);