<?php
//scandir

$path = "TestFolder1";

$result = scandir($path);
var_dump($result);


foreach($result as $dir){
    if($dir != "." && $dir != ".."){
        echo $dir . PHP_EOL;
    }
}


//Remove . and ..

$directory = array_diff($result, ['.','..']); // array_diff encuentra y remueve esos valores dentro del arreglo
var_dump($directory);

foreach($directory as $dir){
    if($dir != "." && $dir != ".."){
        echo $dir . PHP_EOL;
    }
}


//check for specific element and if its a directory or a file

$result = scandir($path);
$result = array_diff($result, ['.','..']); 

foreach($result as $dir){
    if(is_file($path."/".$dir)){ //to only show the files
        echo $dir . PHP_EOL;
    }
}



foreach($result as $dir){
    if(is_dir($path."/".$dir)){ //to only show the directories
        echo $dir . PHP_EOL;
    }
}


//Create a directory
$result = glob("*.php");
var_dump($result);

if(!file_exists("TestFolder3")){
    mkdir("TestFolder3");
}