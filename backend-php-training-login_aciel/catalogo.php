<?php 


session_start();

if( (!isset($_SESSION["User"]))){  

    $_SESSION["msg"] = true;
    header("Location: login.php");
   
    } 
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/catalogo.css">
</head>
<body>
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<header>    <input type="submit" value="Cerrar" id="btn2" name="Salir"></header>
<section class="cont1">

<h1>Catálogo</h1>

    <?php
$arch = "sources/catalog.json";
if(file_exists($arch)){


$archcontent = file_get_contents("$arch");
$array = json_decode($archcontent, true);
$catalogo = $array["products"];

$cantidad = [];
$name = [];
$img = [];
$price = [];
$subtotal = [];
$ver = [];
$msg1 = [];
$producto = [];


echo "<div class=\"cont2\">";

//

// BOTON DED AGREGAR

//


if(isset($_POST["Agregar"])){
 

  // restricciones 
  foreach ($catalogo as $key => $value) {
  
$pattern1 = "/^[0-9]{1}$/";
$pattern2 = "/^[0-10]{2}$/";


$patternnan = "/^[a-z]$/";
$patternless = "//";


if(isset($_SESSION["producto1"])){
  $producto1 = $_SESSION["producto1"];
 
  if((empty($_POST[ "inp$key" ])) && (!in_array($key, $producto1))  ){

    continue;
   }



}
else{
  if(empty($_POST["inp$key"])){

    continue;
   } 
}
  


  //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||

                       // RESTRICCIONES \\

   
 //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||





    if(($_POST["inp$key"]<=$value["qty"]) && ($_POST["inp$key"] > 0)  && (is_numeric($_POST["inp$key"])) && 
     ((preg_match($pattern1,$_POST["inp$key"]))  or  (preg_match($pattern2,$_POST["inp$key"])) )){

      $ver[$key] = 1;

    } else{

      $ver[$key] = 0;

      $msg1[$key] = $key;

    /*  if(preg_match($patternnan,$_POST["inp$key"])){
        $msg1[$key] = $key;
      }*/

  } }



  //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||

                //  APLICAR VALORES PARA LA SESION \\

   
 //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||


  
     foreach($catalogo as $key => $value){
     

/*
   if((empty($_POST["inp$key"]))  && (!isset($_SESSION["producto1"]))  ){ // la otra vondicion debe estar afuera
        //problema del porquie se elimina el producto 2 despues de volver //
      
       continue;
        }*/

       
   //  if(isset($_POST["inp$key"])){   /// apartir del 2 producto no se toman los valores
         $cantidad[$key] = $_POST["inp$key"];  
        
         $name[$key] = $value["name"];
       
         $img[$key] = $value["img"]; 
       
         $price[$key] = $value["price"];
       
         $qty[$key] = $value["qty"];
    
       // verificar si existe inf adicional de la cantidad
     
      
         if(isset($_SESSION["producto1"]) ){
          $producto1 = $_SESSION['producto1'];
         
    

             $cantidad[ $key ] = (int)$cantidad[$key] + (int)$producto1[$key][2];

      // si la cantidad es mayor a la estipulada, entonces 
   
             if($cantidad[$key] > $value["qty"]){   
          
          }
       
        

         }
        
/*
switch(true){

case (empty($cantidad[$key]) && (!isset($_POST["producto1"]))) :

continue ;


case (empty($cantidad[$key]) &&  isset($_SESSION["producto1"])) :

  if(array_key_exists($key, $cantidad)){
    continue;
   }




}
*/

         /*if(empty($cantidad[$key]) && !isset($_POST["producto1"]) ){ // la otra vondicion debe estar afuera
          //problema del porquie se elimina el producto 2 despues de volver
        
         continue;
          }
    
           
          elseif (empty($cantidad[$key]) &&  isset($_SESSION["producto1"])) {
           if(array_key_exists($key, $cantidad)){
            continue;
           }
          }
     */
         // se asigna cada valor dentro del array de producto
     

 
          

    /*     if(isset($_SESSION["producto1"]) ){

         var_dump( $cantidad[$key]);
          $producto1 = $_SESSION['producto1'];
         echo 'producto';
          var_dump($producto1) ;         
          if(!isset($producto[$key])){
           continue;
          }
          echo '<br> producto';
          var_dump($producto1) ; 
         } else{
        
        
        
        if(empty($_POST["inp$key"]) ){
         
          
          continue;
        
          } }*/
        

if(isset($_SESSION["producto1"])){
  $producto1 = $_SESSION["producto1"];
//  echo "prpducto 1 :";

 // var_dump($producto1);
  
  if((empty($cantidad[ $key ])) && (!in_array($key, $producto1))  ){

    continue;
   }



}
else{
  if(empty($cantidad[ $key ])){

    continue;
   } 
}











///////////////////////////////////////////////////////

////////////////////////////////////////////////////////

        
      /*
         if(empty($cantidad[ $key ])){

          continue;
         }

*/
   


/*

if(empty($_POST[ "inp$key" ])){

  continue;
 }  
*/ 



///echo "cantidad AAAA" ;
       //   var_dump( $cantidad[$key]);
        $producto[$key] = [$img[$key], $name[$key], $cantidad[$key], $price[$key]];
      //  echo "producto final AAAA" ;
      //  var_dump($producto);
  


    }
    

 
 

      // anhadir el subtotal a producto
    /*  
      
    }*/

    //crear las sesion que se utilizaran en carrito
    $_SESSION["producto"] = $producto;
    $_SESSION["qty"] = $qty;
     



    //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||

                     //  REDIRECCION A CARRITO \\

   
 //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||


if (in_array(0, $ver)) {

}

else{

  header("Location: carrito.php");
}


}



  //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||

                     //  MOSTRAR JSON \\

   
 //////////|||||||||\\\\\\\\\\\\\\\\||||||||||////////////////||||||||


//Mostrar la informacion del json
foreach($catalogo as $key => $value){
  if(($value["qty"] != 0)){
    echo "<div class=\"inf\">";
echo "<img src=\"sources/images/$value[img]\" alt=\"$value[img]\" id=\"$value[img]\" class=\"foto\">";
 
echo "Codigo: ".($value["id"])."<br>";
echo "Nombre: ".($value["name"])."<br>";
echo "Precio: ".($value["price"])."<br>";

echo "<input type=\"text\" placeholder=\"Cantidad\" id=\"cantidad\" name=\"inp$key\">";
 

if(isset($msg1[$key]) && $msg1[$key] == $key){
echo "<p id=\"msg1$key\">Error al introducir la cantidad!</p>";
}
  
  
    




echo "</div>";
}}
echo "</div>";
}

else{
    echo '<script language="javascript">alert("El archivo no existe!");</script>';

  }
if(isset($_POST["Salir"])){
    session_unset();
    session_destroy();
    header("Location: login.php");
         
}

    ?>
    <input type="submit" value="Agregar" id="btn" name="Agregar">

    </form>
  
    </section>


</body>
</html>