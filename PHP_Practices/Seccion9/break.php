<?php


/*

*/


//print 1 to 10 using infinite loop
$counter = 1;
do{

    echo $counter;
    $counter++;
    echo "<br>";
    if ($counter >=10) {
        break;
        
    }

}while(true);

//break multiple loop



$loop1 = 1;

$loop2 = 1;

$loop3 = 1;


for (; $loop1 <= 10; $loop1++) { 
   while ($loop2 <= 10){
    do{
         
       
        if ($loop3 == 5) {
            echo "<br>";
            break;
            
         }
       echo "Loop3 : $loop3";
        echo "<br>";
        $loop3++;
    }while($loop3 <= 10);
   

    if ($loop2 == 6) {
        echo "<br>";
        break;
     }
   echo "Loop2 : $loop2";
   echo "<br>";
   $loop2++;
   }
     if ($loop1 == 7) {
        echo "<br>";
        break;
     }
   echo "Loop1 : $loop1";
   echo "<br>";
}
