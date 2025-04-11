<?php

function divide($x, $y) :int{
if ($y <= 0){
throw new Exception("Divide by zero exception might happen");
}

$result = $x / $y;
return $result;
}


try{
//this is a error in this block
$result = divide(1, 0);
    
}catch(Exception $e){
//jump to this block if try block has an error
echo 'Caught Exception '.e->getMessage().PHP_EOL;
}