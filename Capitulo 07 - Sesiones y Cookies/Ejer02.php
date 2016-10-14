<?php
  session_start();
  
  if (isset($_GET['numeroIntroducido'])) {
    $numeroIntroducido = $_GET['numeroIntroducido'];
    if ($numeroIntroducido >= 0) {
      
      $_SESSION['contador'] = $_GET['contador'];
      if ($numeroIntroducido % 2 != 0) {
        $_SESSION['contadorImpares'] += 1;
        $_SESSION['sumaNumerosImpares'] += $numeroIntroducido;
        
      } else {
      
        if ($numeroIntroducido > $_SESSION['maximoPar']) {
          $maximoPar = $numeroIntroducido;
          $_SESSION['maximoPar'] = $maximoPar;
        }
      }
    }
    
    $contador = $_SESSION['contador'];
    $sumaNumerosImpares = $_SESSION['sumaNumerosImpares'];
    $contadorImpares = $_SESSION['contadorImpares'];
    $maximoPar = $_SESSION['maximoPar'];
    
  } else {
    $_SESSION['contador'] = 0;
    $_SESSION['sumaNumerosImpares'] = 0;
    $_SESSION['sumaNumeros'] = 0;
    $_SESSION['maximoPar'] = 0;
    
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
        Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y 
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los 
        pares. El número negativo sólo se utiliza para indicar el final de la introducción de 
        datos pero no se incluye en el cómputo. Utiliza sesiones.
      </p>

      <?php
        // CONFIRMAR
        if ($numeroIntroducido >= 0) {
          $contador++;
          
          echo 'Introduce un numero (Para dejar de introducir numeros introduce un numero negativo):<br>'
            . $contador . 'º Numero:<br>'
            . '<form action="Ejer02.php">'
            . '<input type="number" name="numeroIntroducido" step="1" autofocus="autofocus" required="required">'
            . '<input type="hidden" name="contador" value="', $contador,'">'
            . '<input type="submit" value="Enviar">'
            . '</form>';
        } else {
          echo $contadorImpares . " " . $sumaNumerosImpares;
          
          echo "Se han introducido " . $contador . " numeros.";
          echo "La media de los numeros impares es: " . $sumaNumerosImpares / $contadorImpares;
          echo "El mayor de los numeros pares es el " . $maximoPar;
          
        }
      ?>
    </div>
  </body>
</html>