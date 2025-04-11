<?php
/*

Class Name first letter should start with capital letter
File Name should match with Class Name, easier to follow
One file should have One Class, you can have multiple
'class' is the keyword used to define a class
class is opened and closed with {} like functions



*/


class Car{ //an specification, wont give u an output
     
    public $name;
    public $color;
       


    function helloClass(){
        echo "Hello from Car Class".PHP_EOL;
    }

   
}


$car1 = new car();
$car1->name = "Ferrari";
$car1->color = "Gray";
$car1-> helloClass();
echo "$car1->name is $car1->color Color. " .PHP_EOL;
