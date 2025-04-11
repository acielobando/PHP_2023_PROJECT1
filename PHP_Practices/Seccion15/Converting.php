<?php

$dateArr = getdate();
var_dump($dateAarr);

foreach($dateAarr as $format => $val){
    echo "$format => $val" .PHP_EOL;

}

echo "Weekday: ".$dateArr["weekday"].PHP_EOL;
echo "Weekday: ".getdate()["weekday"].PHP_EOL;