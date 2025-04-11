<?php

//Open a file
//Read File Content
//Close the file


//File Modes
//r - read mode
//w - Write
//a - append


//Method 1
//Filename

$fileName = "MyFile.txt";

//read the file
$content = file_get_contents($fileName);

//printe the content of the file
echo $content . PHP_EOL;


//method 2
//Open a file

$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);

//Read the file content
$content = fread($fileHandler, $fileSize);

echo $content . PHP_EOL;
fclose($fileHandler);

//write operations

$fileHandler = fopen($fileName, "w") or die("Unable to write the file");
fwrite($fileHandler, "Adios Adios bien gracias adios adios adios");

fclose($fileHandler);


//Method 2

$fileName1 = "NewFile.txt";
file_put_contents($fileName1, "This is a modified content");

if(file_exists($fileName)){
    if(is_file($fileName)){
        
    }
}