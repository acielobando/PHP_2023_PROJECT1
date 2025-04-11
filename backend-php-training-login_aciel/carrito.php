<?php 

session_start();

if( (!isset($_SESSION["User"]))){  
    
    $_SESSION["msg"] = true;
    header("Location: login.php");
   
    } 

/*if(isset($_SESSION["ver"]) ){
    $ver = $_SESSION["ver"];
if(count(array_unique($ver)) !== 1){
    header("Location: catalogo.php");
}
}*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/carrito.css">
</head>
<body>


<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<header>    <input type="submit" value="Cerrar" id="btn2" name="Salir"></header>
<section class="cont1">
<h1>Lista de productos</h1>

    <?php 



    if(isset($_SESSION['producto'])){
        
     $producto = $_SESSION['producto'];
     $qty = $_SESSION['qty'];
     $subtotal = [];


     foreach($producto as $key => $value){
        $subtotal[$key] = $producto[$key][2] *$producto[$key][3];
      array_push($producto[$key], $subtotal[$key]); }
     
         //BOTON DE VOLVER

 if(isset($_POST['Volver'])){
    $_SESSION["producto1"] = $producto;
    header("Location: catalogo.php");
 }         
            // BOTON DE CONFIRMAR

 if(isset($_POST['Confirmar'])){
    $_SESSION["producto"] = $producto;
    header("Location: confirmacion.php");
 }


           //BORRAR TODOS

                 if(isset($_POST['Clearall'])){
                
                 unset($producto);
               
 
          

                 }

                

            //ELIMINAR UNO
 foreach($producto as $key => $value){
                    if(isset($_POST["Eliminar$key"])){
            unset($producto[$key]);
    
            
            $_SESSION["producto"] = $producto;
         //   $total -= $producto[$key][4];
            }
            
            }
            

            //MODIFICAR
           

    foreach($producto as $key => $value){


                if(isset($_POST["Modificar$key"])){
                   
                    if(($_POST["mod$key"]) <= $qty[$key]){
                   
                          $producto[$key][2]=  $_POST["mod$key"];
                          $producto[$key][4] = $producto[$key][2] *$producto[$key][3];
                    $_SESSION["producto"] = $producto;
                   
            
            
                     
                }else{
                    echo '<script language="javascript">alert("Productos insuficientes!");</script>';
                   

                }


                }
                $total += $producto[$key][4];   
            
            
            }

   
   
             

    
        echo "<div class=\"mincont\">";
      
        echo "<div class=\"tituh4\">";
        echo "<h4>Producto </h4>";
        echo "<h4>Nombre </h4>";
        echo "<h4>Cantidad </h4>";
        echo "<h4>Precio </h4>";
        echo "<h4>Subtotal </h4>";
        echo "<h4>Acciones </h4>";
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
       

     echo "<input type=\"submit\" value=\"Modificar\" class=\"btn\" id=\"Modificar0\" name=\"Modificar$key\">";

     echo "<input type=\"submit\" value=\"Eliminar\" class=\"btn\" id=\"Eliminar0\" name=\"Eliminar$key\">";
   
     echo "</div>";
     echo "<input type=\"text\" placeholder=\"Cantidad\" id=\"cantidad$key\" class=\"npt\" name=\"mod$key\">";
  }
   

  
      
  echo "</div>";

  echo "<div class=\"info1\">";
  echo "<input type=\"submit\" value=\"Borrar\" class=\"Borrar\"   name=\"Clearall\">";
  echo "<p>Total: $total</p>";
  echo "</div>";

  ///
  ///
  ///
  ///
  ///

     

       
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
<!-- -->
<input type="submit" value="Volver" class= "btn1" name="Volver">
<input type="submit" value="Confirmar" class= "btn1" name="Confirmar">

</div>

   
<form>
</section>

</body>
</html>
