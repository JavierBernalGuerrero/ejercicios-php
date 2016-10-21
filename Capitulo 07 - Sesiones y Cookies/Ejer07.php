<?php
  
  if (isset($_GET['colorFondo'])) {
    setcookie("colorFondo", $_GET['colorFondo'], time() + 7*24*60*60);
    // No se puede leer una coockie en la misma pagina que se crea, por eso creamos 
    // esta variable le da el color. Si no ponemos esta variable tendriamos que 
    // refrescar la pagina para cambiar el color directamente con la coockie.
    $colorFondo = $_GET['colorFondo'];
    
  } else {
    $colorFondo = $_COOKIE['colorFondo'];
    
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
      <h2>Operaciones con cookies: </h2>
      <p>
        Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color)
        de una página. Esta página debe tener únicamente algo de texto y un formulario para 
        cambiar el color.
      </p>
      
      <?php
      
        if ($colorFondo) {
          $colorFondo = $colorFondo;
          echo '<div style="background-color: ', $colorFondo, ';">';
          
        } else {
          echo '<div>';
          
        }
        
        echo '<form action="Ejer07.php">'
            . '<input type="color" name="colorFondo" value"', $color, '">'
            . '<input type="submit" value="Cambiar">'
            . '</form>'
            . '</div>';
      ?>
      
    </div>
  </body>
</html>