<?php



//the optional parameter should be the last
//this means that if a value is equal to -1 is gonna be skipped
//if you dont mention anything, $skipnumber will keep -1 and this is a optional parameter
// when you actually define the value it becomes a default value
function printOddNumbers(int $limit, $skipnumber =-1){ //
    for($index = 0; $index <= $limit; $index++){
        if ($skipnumber == $index){
            continue;
        }
        if($index%2 != 0){
          echo "Odd Number: $index".PHP_EOL;
        }
    }
}


printOddNumbers(10);

function printEvenNumbers($skipnumber =-1, int $limit){ //
    for($index = 0; $index <= $limit; $index++){
        if ($skipnumber == $index){
            continue;
        }
        if($index%2 == 0){
          echo "Even Number: $index".PHP_EOL;
        }
    }
}

printEvenNumbers(10); //doesn't bc the default and optional values are inverted