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
        border: 1px solid black;
        margin: auto;
      }
      
      table td, table th {
        border: 1px solid black;
        width: 20px;
        height: 20px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Manipulacion de arrays: </h2>
      <p>
        Realiza un programa que pida 10 números por teclado y que los almacene en un array. A 
        continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente 
        el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe 
        comprobar que inicial es menor que final y que ambos números están entre 0 y 9. El 
        programa deberá colocar el número de la posición inicial en la posición final, rotando 
        el resto de números para que no se pierda ninguno. Al final se debe mostrar el array 
        resultante.
      </p>

      <?php
      // Recogida de datos
      if (isset($_GET['contador'])) {
        $contadorNumeros = $_GET['contador'];
        $numeroIntroducido = $_GET['nuevoNumero'];
        $cadenaNumeros = $_GET['cadenaNumeros'];
        $cadenaNumeros = $cadenaNumeros . " " . $numeroIntroducido;
        
      } else {
        $contadorNumeros = 0;
        
      }
      
      if ($contadorNumeros < 10) {
        
        // Formulario para rellenar el array
        
        $contadorNumeros++;
        echo $cadenaNumeros;
        
        ?>
          Contador:<?= $contadorNumeros ?><br>

          <form action="Ejer09.php">
            <input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus" required="required">
            <input type="hidden" name="cadenaNumeros" value="<?= $cadenaNumeros ?>">
            <input type="hidden" name="contador" value="<?= $contadorNumeros ?>">
            <input type="submit" value="Introducir">
          </form>

        <?php 
        
      } else {
        $arrayNumeros = substr($cadenaNumeros, 1);
        $arrayNumeros = explode(" ", $arrayNumeros);
        
        // Mostrar el array original
        ?>
        <table>
          <tr>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
          </tr>
          <tr>
        <?php
        
        for ($i = 0; $i < 10; $i++) {
          echo '<td>', $arrayNumeros[$i], '</td>';
        }
        echo '</tr></table>';
        
        if (isset($_GET['posicionInicial']) && isset($_GET['posicionFinal']) 
                                          && $_GET['posicionInicial'] < $_GET['posicionFinal']) {
          $posicionInicial = $_GET['posicionInicial'];
          $posicionFinal = $_GET['posicionFinal'];

          // Movimiento de las posiciones.
          for ($i = 9; $i > 0; $i--) {
            if ($i < $posicionFinal && $i > $posicionInicial) {
             $arrayNumerosOrdenados[$i] = $arrayNumeros[$i];
              
            } else {
              $arrayNumerosOrdenados[$i] = $arrayNumeros[$i - 1];
          
            }
          }
          $arrayNumerosOrdenados[0] = $arrayNumeros[9];
          $arrayNumerosOrdenados[$posicionFinal] = $arrayNumeros[$posicionInicial];


          // Mostrar el array modificado
          ?>
          <table>
            <tr>
              <th>0</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>9</th>
            </tr>
            <tr>
          <?php

          for ($i = 0; $i < count($arrayNumerosOrdenados); $i++) {
            echo '<td>', $arrayNumerosOrdenados[$i], '</td>';
          }
          echo '</tr></table>';

        } else {
          if (isset($_GET['posicionInicial']) && $_GET['posicionInicial'] >= $_GET['posicionFinal']) {
            echo 'Recuerda: "La posicion inicial tiene que ser menor que la posicion final."';
          }
          ?>


          <form action="Ejer09.php">
            <input type="number" name="posicionInicial" placeholder="Posicion inicial.." step="1" min="0" max="9" autofocus="autofocus" required="required">
            <br>
            <input type="number" name="posicionFinal" placeholder="Posicion final.." step="1" min="0" max="9" required="required">
            <br>
            <input type="hidden" name="cadenaNumeros" value="<?= $cadenaNumeros ?>">
            <input type="hidden" name="contador" value="<?= $contadorNumeros ?>">
            <input type="submit" value="Introducir">
          </form>

        <?php

        }

      }
      ?>
    </div>
  </body>
</html>