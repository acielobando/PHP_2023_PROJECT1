<?php

$fileName = "MyFile.txt";

if (file_exists($fileName)) { //works with a directory as well
    echo "File exits" . PHP_EOL;

    //Check if it is a directory
    if(is_dir($fileName)){
        die("It is a directory");
    }


    //Copy file
    copy($fileName, "CopyFile.txt");


    //rename

    rename("CopyFile.txt", "RenamedFile.txt");

    //delete

    unlink("RenamedFile.txt");

} else {
    echo "File / Directory does not exits".PHP_EOL;
    die("Not such files");
}
