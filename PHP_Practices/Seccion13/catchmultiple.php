<?php 

function custom_exception($exception){
    echo 'Caught Exception '.e->getMessage().PHP_EOL;
}

function divide($x, $y) :int{


    try{
        if ($y <= 0){
            throw new Exception("Divide by zero exception might happen");
            }
            
            $result = $x / $y;
           
            }
    }catch(Exception $e)[
      throw new Exception("Divide method has input param is less than zero.". $e->getMessage()) ;
    ]
    return $result;

    set_exception_handler('custom_exception');
    divide(1, 0);