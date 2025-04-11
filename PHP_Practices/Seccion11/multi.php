<?php
$arr2 = [

[0, 1, 2, 3, 4, 5],
[6, 7, 8],
[9, 10],

];

var_dump($arr2);

foreach($arr2 as $singlearr){
    var_dump($singlearr);
}


foreach($arr2 as $singlearr){
    foreach($singlearr as $values){
       echo $values. PHP_EOL;
    }
}