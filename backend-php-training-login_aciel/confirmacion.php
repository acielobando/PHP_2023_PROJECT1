
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
    <title>Confirmacion
    </title>
    <link rel="stylesheet" href="css/confirmacion.css">
</head>
<body>
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<header>    <input type="submit" value="Cerrar" id="btn2" name="Salir"></header>
<section class="cont1">
<h1>Factura</h1>


    <?php 

    if(isset($_SESSION['producto'])){
        
     $qty = $_SESSION['qty'];
     $producto = $_SESSION['producto'];
     $newvalue = [];

foreach($producto as $key => $value){   $total += $producto[$key][4];  }
 
       /* for($i=0; $i < count($name); $i++){
            $subtotal[$i]=($price[$i] * $cantidad[$i]);
           $total += $subtotal[$i];
        }*/

            if(isset($_POST['Volver'])){
                    header("Location: catalogo.php");
                  
                   
                 }
            
    //
    //
            

    if(isset($_POST['Descargar'])){

  
      $fecha = date("d-M-Y");   
        $archivo = fopen("Factura".$fecha.".txt", "w");   
       
     //   
     fwrite($archivo, "Factura");
     fwrite($archivo, "\n");

     fwrite($archivo, "\n");


     foreach($producto as $key => $value){
      
      fwrite($archivo, "Nombre :".$producto[$key][1]."\n");
      fwrite($archivo, "Cantidad :".$producto[$key][2]."\n");
      fwrite($archivo, "Precio :".$producto[$key][3]."\n");
      fwrite($archivo, "Subtotal :".$producto[$key][4]."\n");
   

fwrite($archivo, "\n");



     /* foreach($value as $key2 => $value2){
        
      fwrite($archivo, $key2."".$value2."");
  
      }*/
     }


fwrite($archivo, "\n");
     fwrite($archivo, "Total :".$total."\n");
        fclose($archivo);   


$arch = "sources/catalog.json";
if(file_exists($arch)){
  $archcontent = file_get_contents("$arch");
  $array = json_decode($archcontent, true);
  $catalogo = $array["products"];

$arch1 = fopen($arch, "w");

  foreach($catalogo as $key => $value){

     
      $array["products"][$key]["qty"] =  (string)((int) $array["products"][$key]["qty"] - (int)$producto[$key][2]);

     
    
  }





 file_put_contents($arch, json_encode($array));

  
}
       

   fclose($arch1);

    

   }

    
   
               

    
        echo "<div class=\"mincont\">";
      
        echo "<div class=\"tituh4\">";
        echo "<h4>Producto </h4>";
        echo "<h4>Nombre </h4>";
        echo "<h4>Cantidad </h4>";
        echo "<h4>Precio </h4>";
        echo "<h4>Subtotal </h4>";
        echo "</div>";
  foreach($producto as $key => $value){  

   
    echo "<div class=\"cont11\">";
    
     foreach($value as $key2 => $value2){
        if($value[0]){
            echo "<p id=\"ob".$key."\"  class=\"objeto\">";
            echo "<img src=\"sources/images/$value2\" alt=\"$value2\" id=\"$value2\" class=\"foto\">";
            echo "</p>";
        }else{
        echo "<p id=\"ob".$key."\"  class=\"objeto\">";
        echo $value2;
        echo "</p>";}
     
     }
       
   
     echo "</div>";
 
  }
   

  
      
  echo "</div>";



  ///
  ///
  ///
  ///
  ///

     

       echo "<div class=\"info1\">";
       echo "<p>Total: $total</p>";
       echo "</div>";

    }else{
        echo '<script language="javascript">alert("El carrito esta vacio");</script>';
        header("Location: catalogo.php");
    }
if(isset($_POST["Salir"])){
    session_unset();
    session_destroy();
    header("Location: login.php");
         
}


    ?>


<div class="action1"> 

<input type="submit" value="Volver" class= "btn1" name="Volver">
<input type="submit" value="Descargar" class= "btn1" name="Descargar">

</div>

   
<form>
</section>
</body>
</html>