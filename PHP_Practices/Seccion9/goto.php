<?php

$inputv = 0;
if ($inputv <= 0){
    goto error_block;

}

exit
;error_block:
echo "This is a error block and will execute anyway";

for($count = 0; $count <= 10; $count++){
    if ($count == 2) {
        goto loop2;
    }
}

loop2:

echo "Counter value is $count";

// with goto you cnnot go inside a loop