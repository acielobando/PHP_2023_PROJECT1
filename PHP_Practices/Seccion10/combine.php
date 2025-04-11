<?php

//'.' dot used to combine two strings together

$firstname = "Santiago";
$lastname = "Gonzalez";

$fullname = $firstname . $lastname;
echo $fullname;

//you can even attach other variables such as integers, booleans etc
echo "<br>";

$age = 17;
$information= $fullname . $age;
echo $information;
