<?php

//in associative arrays, you specific the index
//index => value
//=>  is a special symbol to represent key and value
// key =>value 

$arr = ["Mon","Tues","Wed","Thrus","Fri","Sat","Sun"];
var_dump($arr);
foreach($arr as $value){
  
    echo $value;
}


//Associative

$arr = [0 => "Mon",1 => "Tues", 2 => "Wed", 3 => "Thrus", 4 => "Fri",5 => "Sat", 6 => "Sun"];
var_dump($arr);
foreach($arr as $value){
   
    echo $value;
}

//string as an index


$arr = ["Monday" => "Mon",1 => "Tues", 2 => "Wed", 3 => "Thrus", 4 => "Fri",5 => "Sat", 6 => "Sun"];
var_dump($arr);
foreach($arr as $key => $value){
    
    echo $key."=>".$value;
}


//print all the keys
print_r(array_keys($arr));

//access
foreach(array_keys($arr) as $key){
    echo $key. PHP_EOL;
}

