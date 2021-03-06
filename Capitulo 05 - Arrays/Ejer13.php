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
      
      table {
        margin: auto;
      }
      
      td {
        color: white;
        background-color: black;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Manipulacion de arrays: </h2>
      <p>
        Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos 
        comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es 
        decir, no se puede repetir ninguno. Muestra a continuación por pantalla el contenido del 
        array de tal forma que se cumplan los siguientes requisitos:
      </p>
      <ul style="margin-left: 200px; text-align: left;">
        <li>Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.</li>
        <li>El mínimo debe aparecer en color azul.</li>
        <li>El resto de números debe aparecer en color negro.</li>
      </ul>

      <table>
      <?php
        $arrayBidimensional = [];
        $numeroMinimo = PHP_INT_MAX;
        
        // Crea el array con todos los valores aleatorios
        for ($fila = 0; $fila < 6; $fila++) {
          for ($columna = 0; $columna < 9; $columna++) {
            
            do {
              
              $numeroAleatorio = rand(100, 999);
            } while (in_array_r($numeroAleatorio, $arrayBidimensional));
            
            $arrayBidimensional[$fila][$columna] = $numeroAleatorio;
          }
        }
        
        
        // Recoge el numero con menor valor y sus coordenadas
        for ($fila = 0; $fila < 6; $fila++) {
          for ($columna = 0; $columna < 9; $columna++) {
            if ($numeroMinimo > $arrayBidimensional[$fila][$columna]) {
              $numeroMinimo = $arrayBidimensional[$fila][$columna];
              $filaMinimo = $fila;
              $columnaMinimo = $columna;
              
            }
          }
        }
        
        // Pinta la tabla con todos los valores
        for ($fila = 0; $fila < 6; $fila++) {
          echo "<tr>";
          for ($columna = 0; $columna < 9; $columna++) {
            
            // Pinta de azul el numero minimo
            if ($numeroMinimo == $arrayBidimensional[$fila][$columna]) {
              echo '<td style="background-color: blue;">', $arrayBidimensional[$fila][$columna], '</td>';
              
            } else {
              // Pinta de verde las diagonales del numero minimo
              if (abs($columnaMinimo - $columna) == abs($filaMinimo - $fila)) {
                echo '<td style="background-color: green;">', $arrayBidimensional[$fila][$columna], '</td>';

              } else {
                echo "<td>", $arrayBidimensional[$fila][$columna], "</td>";

              }
            }
          }
          echo "</tr>";
        }
        
        // Esta funcion complementa a la funcion "in_array" para 
        // que analice funciones multidimensionales
        function in_array_r($needle, $haystack) {
          $existe = false;
          foreach ($haystack as $array) {
            if (in_array($needle, $array)) {
              $existe = true;
            }
          }
          return $existe;
        }
      ?>
      </table>
    </div>
  </body>
</html>