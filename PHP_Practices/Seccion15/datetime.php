<?php

/*

d - day of the month
D - day of the week
m - month in numbers
M - Month in text
y - year in 2 digits
Y - year in 4 digits

*/

echo "Current Date: ".date("d-m-y").PHP_EOL;
echo "Current Date: ".date("D-M-Y").PHP_EOL;


/*

h 12 format
H 24 format
i minutes with leading zeros
s seconds
a  and A am pm

*/

echo "Current Date: ".date("d-m-y h:i:s:a").PHP_EOL;
echo "Current Date: ".date("D-M-Y h:i:s:A").PHP_EOL;

echo "Current Time in MillieSeconds: ". time().PHP_EOL;

$time = time() + 1000;
echo "Current Date: ". date("d-m-y h:i:s:a").PHP_EOL;