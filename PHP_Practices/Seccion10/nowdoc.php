<?php
/*

used to print a block of strings

*/

$name = "Santiago";
$number = 6;

//it doesn't recognize the variable value

echo <<< 'DOC_LABEL'
you can write anything insided this
<br>$name know how to code
<br>($number * 10)
<br>
new lines and strings
<br>
(true) ? "Some effect" : "No effect";
DOC_LABEL;