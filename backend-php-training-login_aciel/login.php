<?php 
session_start();


if( (isset($_SESSION["msg"]))){  
    
  echo '<script language="javascript">alert("Debe iniciar sesion antes de ingresar!");</script>';
 
  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section class="login">

     <h2>Iniciar sesión</h2>
      
       
     <?php 
    $arch = "sources/accounts.json";
    if(file_exists($arch)){
        
        $archcontent = file_get_contents("$arch");
       $array = json_decode($archcontent, true);
       $array2 = $array["accounts"];
  

       if(isset($_POST["submit"])) {
        
        if((empty($_POST["user"])) && (empty($_POST["password"]))) { 
          echo '<script language="javascript">alert("Campos vacios!");</script>';
        }


         
        else {
        
        $user = $_POST["user"];
        $pass = $_POST["password"];
 
        foreach ($array2 as $key => $value) { 
      
          if($user == $value["email"] && $pass ==  $value["password"]) {
      $_SESSION["User"] = $user;   
      header("Location: catalogo.php");}
       } 
       
        }  


        echo " <p>Error! Datos incorrectos</p>"; 
      }

        
      }

    else{
      echo '<script language="javascript">alert("El archivo no existe!");</script>';

    }
        ?>
      <form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
           <input type="text" placeholder="Usuario" id="user" name="user">
           <input type="text" placeholder="Contrasenna" id="password" name="password">
           <input type="submit" value="Acceder" id="btn" name="submit">


      </form>
     
    </section>
    

</body>
</html>