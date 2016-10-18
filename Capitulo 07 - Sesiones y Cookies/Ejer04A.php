<?php
  session_start();
  
  if (isset($_GET['nombreUsuario'])) {
    $nombreUsuario = $_GET['nombreUsuario'];
    $claveUsuario = $_GET['claveUsuario'];
    
    if ($nombreUsuario == "admin" && $claveUsuario == "admin") {
      $_SESSION['nombreUsuario'] = $nombreUsuario;
      $login = true;
      
    } else {
      $mensajeError = "Error durante la autentificacion. Nombre o contraseña introducida "
              . "de forma incorrecta.";
    }
    
  } else {
    $_SESSION['nombreUsuario'] = "";
    $login = false;
    $mensajeError;
    
  }
  
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 07 - Sesiones y Cookies</title>
    <style>
      body {
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100%;
        background-color: #403075;

      }

      div {
        position: relative;
        background-color: #C7B6FF;
        border-radius: 15px;
        text-align: center;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        width: 90%;

      }
    </style>
  </head>
  <body>
    <div>
      <h2>Operaciones varias con numeros: </h2>
      <p>
        Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera 
        de los programas de la relación anterior. La aplicación no nos dejará continuar hasta que 
        iniciemos sesión con un nombre de usuario y contraseña correctos.
      </p>

      <?php
        if (!$login) {
          if (isset($mensajeError)) {
            echo $mensajeError;
          }
          
          echo '<form action="Ejer04A.php">'
            . '<input type="text" name="nombreUsuario" placeholder="Nombre..." autofocus="autofocus" required="required">'
            . '<br><input type="password" name="claveUsuario" placeholder="Contraseña..." required="required">'
            . '<br><input type="submit" value="Entrar">'
            . '</form>';
          
        } else {
          echo "Estas logeado como " . $nombreUsuario . '<br><a href="Ejer04B.php">Continuar</a>';
          
        }
      ?>
    </div>
  </body>
</html>