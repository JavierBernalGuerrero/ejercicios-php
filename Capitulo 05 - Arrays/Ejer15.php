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
        display: inline;
        overflow: hidden;
        margin: auto;
      }
      
      td {
        width: 30px;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Manipulacion de arrays: </h2>
      <p>
        Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una 
        posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 
        columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto 
        la matriz original como la matriz resultado, ambas con los números convenientemente 
        alineados.
      </p>
      
      <?php
      $tamano = 12;
      $arrayOriginal = [$tamano][$tamano];
      
      // Crea el array con los valores aleatorios
      for ($fila = 0; $fila < $tamano; $fila++) {
        for ($columna = 0; $columna < $tamano; $columna++) {
          $numeroAleatorio = rand(0, 100);

          $arrayOriginal[$fila][$columna] = $numeroAleatorio;
        }
      }
      
      // Pinta el array original
      echo '<table>';
      for ($fila = 0; $fila < count($arrayOriginal); $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < count($arrayOriginal[$fila]); $columna++) {
          echo "<td>", $arrayOriginal[$fila][$columna], "</td>";
        }
        echo "</tr>";
      }
      echo '</table>';
      
      // Rotacion del array
      $arrayModificado = $arrayOriginal;
      
      for ($fila = 0; $fila < 6; $fila++) {
        $auxiliar1 = $arrayModificado[$fila][11 - $fila];
        for ($columna = 11 - $fila; $columna > $fila; $columna--) {
          $arrayModificado[$fila][$columna] = $arrayModificado[$fila][$columna - 1];
        } // Arriba

        $auxiliar2 = $arrayModificado[11 - y][11 - y];
        for ($columna = 11 - $fila; $columna > $fila + 1; $columna--) {
          $arrayModificado[$columna][11 - $fila] = $arrayModificado[$columna - 1][11 - $fila];
        } // Derecha
        $arrayModificado [$fila + 1][11 - $fila] = $auxiliar1;

        $auxiliar1 = $arrayModificado[11 - $fila][$fila];
        for ($columna = $fila; $columna < 11 - $fila - 1; $columna++) {
          $arrayModificado[11 - $fila][$columna] = $arrayModificado[11 - $fila][$columna + 1];
        } // Abajo
        $arrayModificado [11 - $fila][11 - $fila - 1] = $auxiliar2;

        for ($columna = $fila; $columna < 11 - $fila - 1; $columna++) {
          $arrayModificado[$columna][$fila] = $arrayModificado[$columna + 1][$fila];
        }
        $arrayModificado[11 - $fila - 1][$fila] = $auxiliar1;
      }
      
      
      // Pinta el array modificado
      echo '<table style="margin-left: 50px;">';
      for ($fila = 0; $fila < count($arrayModificado); $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < count($arrayModificado[$fila]); $columna++) {
          echo "<td>", $arrayModificado[$fila][$columna], "</td>";
        }
        echo "</tr>";
      }
      echo '</table>';
      ?>
      
    </div>
  </body>
</html>
