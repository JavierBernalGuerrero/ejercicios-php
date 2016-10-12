<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 05 - Arrays</title>
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
      <h2>Manipulacion de arrays: </h2>
      <p>
        Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los 
        almacene en un array. El programa debe ser capaz de pasar todos los números pares a las 
        primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas 
        restantes. Utiliza arrays auxiliares si es necesario.
      </p>

      <?php
      if (isset($_GET['arrayNumeros'])) {
        $numerosAleatorios = $_GET['arrayNumeros'];

        $numerosAleatorios = substr($numerosAleatorios, 1);
        $numerosAleatorios = explode(" ", $numerosAleatorios);

        echo "Este es el array original: ";
        foreach ($numerosAleatorios as $numero) {
          echo "$numero ";
        }


        $arrayModificado = [];

        // Los numeros impares los empieza a meter por el final.
        $indiceImpares = count($numerosAleatorios) - 1;
        $indicePares = 0;

        for ($i = 0; $i < count($numerosAleatorios); $i++) {
          if ($numerosAleatorios[$i] % 2 == 0) {
            $arrayModificado[$indicePares] = $numerosAleatorios[$i];
            $indicePares++;
          } else {
            $arrayModificado[$indiceImpares] = $numerosAleatorios[$i];
            $indiceImpares--;
          }
        }

        echo "<br>Este es el array modificado: ";
        for ($i = 0; $i < count($arrayModificado); $i++) {
          echo "$arrayModificado[$i] ";
        }

        // Por algun motivo, el foreach no muestra el orden correctamente.
//          foreach ($arrayModificado as $numero) {
//            echo "$numero ";
//          }
      } else {

        for ($i = 0; $i < 20; $i++) {
          $numerosAleatorios = $numerosAleatorios . " " . rand(0, 100);
        }

        echo "Este es tu array generado de forma aleatoria: <br> $numerosAleatorios";


        echo '<form action="Ejer07.php">'
        . '<input type="hidden" name="arrayNumeros" value="', $numerosAleatorios, '">'
        . '<input type="submit" value="Comenzar">'
        . '</form>';
      }
      ?>
    </div>
  </body>
</html>