<?php

declare(strict_type=1);
function printOddNumbers(int $limit, $skipnumber)
{
    for($index = 0;$index <= $limit; $index++){
        if($index === $skipnumber){
            continue;
        }
        if($index%2!=0){
            echo "Odd Number: $index". PHP_EOL;
        }
    }

}

//call the function
printOddNumbers(20, "3");