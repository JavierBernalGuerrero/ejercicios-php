<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 04 - Bucles</title>
    <style>
      body {
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100%;
        background-color: #403075;
      }

      div {
        background-color: #C7B6FF;
        border-radius: 15px;
        text-align: center;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        width: 400px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Numeros primos: </h2>
      <?php 
        $nIntroducido = $_GET['numeroIntroducido'];

        $esPrimo = true;
        for ($x = 2; $x < $nIntroducido && ($esPrimo); $x++) {
          if ($nIntroducido % $x == 0) {
            $esPrimo = false;
          }
        }
        
        // Resolucion del ejercicio
        echo "El numero $nCandidato ";
        if ($esPrimo) {
          echo "es primo.";
          
        } else {
          echo "no es primo";
          
        }
        
        // A partir de aqui, calcula desde 0 hasta un numero introducido cuantos son primos. Muestra los primos
        /*for ($nCandidato = 1; $nCandidato <= $nIntroducido; $nCandidato++) {
          $esPrimo = true;
          
          for ($x = 2; $x < $nCandidato && ($esPrimo); $x++) {
            if ($nCandidato % $x == 0) {
              $esPrimo = false;
            }
          }

          if ($esPrimo) {
            echo "$nCandidato ";
          }
        }*/
      ?>
    </div>
  </body>
</html>