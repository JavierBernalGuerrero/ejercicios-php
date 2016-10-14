<?php
  session_start();
  
  if (isset($_GET['numeroIntroducido'])) {
    $numeroIntroducido = $_GET['numeroIntroducido'];
    if ($numeroIntroducido >= 0) {
      
      $_SESSION['contador'] = $_GET['contador'];
      $_SESSION['sumaNumeros'] += $numeroIntroducido;
      
    }
    
    $contador = $_SESSION['contador'];
    $sumaNumeros = $_SESSION['sumaNumeros'];
  } else {
    $_SESSION['contador'] = 0;
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
      <h2>Media de un conjunto de numeros: </h2>
      <p>
        Escribe un programa que calcule la media de un conjunto de números positivos introducidos 
        por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario 
        indicará que ha terminado de introducir los datos cuando meta un número negativo. 
        Utiliza sesiones.
      </p>

      <?php
      
        if ($numeroIntroducido >= 0) {
          $contador++;
          
          echo 'Introduce un numero (Para dejar de introducir numeros introduce un numero negativo):<br>'
            . $contador . 'º Numero:<br>'
            . '<form action="Ejer01.php">'
            . '<input type="number" name="numeroIntroducido" step="1" autofocus="autofocus" required="required">'
            . '<input type="hidden" name="contador" value="', $contador,'">'
            . '<input type="submit" value="Enviar">'
            . '</form>';
        } else {
          echo "La media de los numeros es: " . $sumaNumeros / $contador;
          
        }
      ?>
    </div>
  </body>
</html>