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
      
      // ARREGLAR EL ARRAYMODIFICADO
      $arrayModificado = $arrayOriginal;
      
      
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
