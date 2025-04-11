<?php

class Files{

    function displayContent($filename) : bool{

        $result = true;
        try{
           
            $content = file_get_contents($filename);
            echo "Read the content of the file: $filename".PHP_EOL;

            echo $content;


        }catch(Exception $e){
              $result = false;
        }
        return $result;
    }
}


$files1 = new Files();
$files1->displayContent("Test.txt");

//OOP brinds reusability to your code

$files2 = new Files();
$files2->displayContent("Test2.txt");


