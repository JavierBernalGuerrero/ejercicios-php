<?php
  session_start();
  
  if (isset($_GET['numeroIntroducido'])) {
    $numeroIntroducido = $_GET['numeroIntroducido'];
    $sumaNumeros = $_SESSION['sumaNumeros'];
    
    $sumaNumeros += $numeroIntroducido;
    $_SESSION['sumaNumeros'] = $sumaNumeros;
    
    $contador = $_GET['contador'];
    
  } else {
    $contador = 0;
    $_SESSION['sumaNumeros'] = 0;
    
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
        Escribe un programa que permita ir introduciendo una serie indeterminada de números 
        mientras su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar 
        el total acumulado, el contador de los números introducidos y la media. Utiliza sesiones.
      </p>

      <?php
        if ($sumaNumeros <= 10000) {
          $contador++;
          
          echo 'Introduce un numero:<br>'
            . $contador . 'º Numero:<br>'
            . '<form action="Ejer03.php">'
            . '<input type="number" name="numeroIntroducido" step="1" autofocus="autofocus" required="required">'
            . '<input type="hidden" name="contador" value="', $contador,'">'
            . '<input type="submit" value="Enviar">'
            . '</form>';
        } else {
          
          echo "<p>La suma de los numeros introducidos es " . $sumaNumeros . "</p>";
          echo "<p>Se han introducido " . $contador . " numeros.</p>";
          echo "<p>La media de los numeros introducidos es " . $sumaNumeros / $contador . "</p>";
          
        }
      ?>
    </div>
  </body>
</html>