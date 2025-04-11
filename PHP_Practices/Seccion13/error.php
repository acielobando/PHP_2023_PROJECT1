<?php

function custom_error($error, $errorstr){
    echo $errorstr;
}

set_error_handler('custom_error');
echo (5 / 10);

