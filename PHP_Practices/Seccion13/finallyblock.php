<?php
 function custom_exception($exception){
    echo 'Caught Exception '.e->getMessage().PHP_EOL;
}

set_exception_handler('custom_exception');



try{
    throw new Exception("Exception is raised!");
}finally{
    //Always get executed
    echo "This line is executed before exception". PHP_EOL;
}
