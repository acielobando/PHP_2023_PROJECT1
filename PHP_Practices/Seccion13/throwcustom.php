<?php

function custom_exception($exception){
    echo 'Caught Exception '.e->getMessage().PHP_EOL;
}

set_exception_handler('custom_exception');
throw new Exception("Exception is raised!");