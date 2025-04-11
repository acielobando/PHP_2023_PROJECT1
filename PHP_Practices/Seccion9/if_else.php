<?php

$booleancond = FALSE;

if ($booleancond){
echo "This is a true condition";
}else {
    echo "This is a false condition";
}

$booleancond2 = FALSE;
echo "<br>";

if($booleancond && $booleancond2){
    echo "This is a false condition";
} else {
    echo "This is a true condition";
}

echo  "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_else</title>
</head>
<body>
    <?php if ($booleancond || true){ ?>
       
       <h1> This is a true condition </h1>
   
       <?php } else { ?>
        <h1> This is a false condition </h1>
      <?php } ?>
</body>
</html>

<?php

echo  "<br>";
$input1 = "Some text from the user";
$input2 = 34;

if(!is_null($input1)){
echo "$input1 is not empty";

}else {
    echo "$input1 is empty";
}
echo  "<br>";

if(isset($input1) && !is_null($input1)){
    echo "$input1 is not empty";
    
    }else {
        echo "$input1 is empty";
    }
    echo  "<br>";

    //best way to check id the field is empty
if(!empty($input1)){
    echo "$input1 is not empty";

}
else {
    echo "$input1 is empty";
}

echo  "<br>";


//without brackets 

if($input2 > 9)
echo "$input2 is greater than 9";
else 
echo "$input2 is less than 9"; //this only works with one line
//its better to always add braces $_COOKIE

//check if the student pass or failed

$result = "Passed";
if($result === "Passed"){
    echo "Student has passed the exam";
}
else {
    echo "Student has not passed the exam";
}
?>

