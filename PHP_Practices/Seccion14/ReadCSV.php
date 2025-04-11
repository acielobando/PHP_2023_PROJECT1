<?php
//Read entire content
$filename = "students.csv";
$content = file_get_contents($filename);
print_r($content);
echo PHP_EOL;

//Read line by line
$csvFile = file($filename);
foreach ($csvFile as $line){
    echo $line . PHP_EOL;
}


//to separate the values into different arrays
$csvFile = file($filename);
foreach ($csvFile as $line){
    $data[] = str_getcsv($line);
   print_r($data);
}


$csv = array_map('str_getcsv', file($filename));
print_r($csv);