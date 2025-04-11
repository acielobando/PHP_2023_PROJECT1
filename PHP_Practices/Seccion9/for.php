<?php

//print odd number from 1 to 10

/*

for (initialization; condition; increment){

    //code to be executed
}

*/

//recommended way

for($counter = 1; $counter<= 10; $counter++){
    
    $result = $counter %2;
    if ($result > 0) {
        echo 'Odd number: '. $counter;
        echo "<br>";
    }
}

// you can put the initiazation and the increment out of the loop statement
$counter = 1;
for( ; $counter<= 10; ){
    
    $result = $counter %2;
    if ($result > 0) {
        echo 'Odd number: '. $counter;
        echo "<br>";
    }
    $counter++;
}


// another example

for($counter = 0; $counter<= 10; ++$counter){
    
    $result = $counter %2;
    if ($result > 0) {
        echo 'Odd number: '. $counter;
        echo "<br>";
    }
}
