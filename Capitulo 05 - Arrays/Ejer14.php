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
        border-collapse: collapse;
        border: 3px solid black;
      }

      td, th {
        border: 1px solid black;
        background-color: black;
        width: 40px;
        height: 40px;
      }
      
      th {
        background-color: orange;
      }
      
      .alfilBlanco {
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Chess_Pieces_Sprite.svg/2000px-Chess_Pieces_Sprite.svg.png");
        background-size: 215px 100px;
        background-repeat: no-repeat;
        background-position: -69px -4px;;
      }
      
      .alfilNegro {
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Chess_Pieces_Sprite.svg/2000px-Chess_Pieces_Sprite.svg.png");
        background-size: 215px 100px;
        background-repeat: no-repeat;
        background-position: -69px -4px;
      }
      
      .movimientoAlfil {
        background-image: url("http://vignette2.wikia.nocookie.net/es.pokemon/images/8/8f/Circulo_rojo.png/revision/latest?cb=20080821091715");
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-position: 1px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Manipulacion de arrays: </h2>
      <p>
        Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué 
        casillas podría saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica 
        sobre el tablero con un color diferente para estas casillas donde puede saltar la figura. 
        El alfil se mueve siempre en diagonal. El tablero cuenta con 64 casillas. Las columnas se 
        indican con las letras de la “a” a la “h” y las filas se indican del 1 al 8.
      </p>

      <table>
        <tr>
          <th style="background-color: black;"></th>
          <th>A</th>
          <th>B</th>
          <th>C</th>
          <th>D</th>
          <th>E</th>
          <th>F</th>
          <th>G</th>
          <th>H</th>
        </tr>
        <?php
        
        $arrayTablero = [];
        $filaAlfil = rand(0, 7);
        $columnaAlfil = rand(0, 7);
        
        // Pinta el tablero
        for ($fila = 0; $fila < 8; $fila++) {
          echo '<tr><td style="background-color: orange;">', $fila + 1, '</td>';
          for ($columna = 0; $columna < 8; $columna++) {
            
            // Comprueba si es el alfil
            if ($fila == $filaAlfil && $columna == $columnaAlfil) { 
              
              // Comprueba el color de la casilla
              if (($fila + $columna) % 2 == 0) { 
                echo '<td class="alfilNegro" style="background-color: white;"></td>';
              } else {
                echo '<td class="alfilBlanco"></td>';
              }
            } else {
              
              // Comprueba los movimientos del alfil
              if (abs($filaAlfil - $fila) == abs($columnaAlfil - $columna)) {
                
                
                // Comprueba el color de la casilla
                if (($fila + $columna) % 2 == 0) {
                  echo '<td class="movimientoAlfil" style="background-color: white;"></td>';
                } else {
                  echo '<td class="movimientoAlfil"></td>';
                }
              } else {
                
                // Comprueba el color de la casilla
                if (($fila + $columna) % 2 == 0) {
                  echo '<td style="background-color: white;"></td>';
                } else {
                  echo '<td></td>';
                }
              }
            }
          }
          echo '</tr>';
        }
        ?>
      </table>
    </div>
  </body>
</html>