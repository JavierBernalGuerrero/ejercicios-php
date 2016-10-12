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
        Realiza un programa que pida 10 números por teclado y que los almacene en un array. A 
        continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para 
        ello una tabla. Seguidamente el programa pasará los primos a las primeras posiciones, 
        desplazando el resto de números (los que no son primos) de tal forma que no se pierda 
        ninguno. Al final se debe mostrar el array resultante.
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



      if ($contadorNumeros == 10) {
        $cadenaNumeros = substr($cadenaNumeros, 1);
        $arrayNumeros = explode(" ", $cadenaNumeros);
        
        
        echo "Este es el array original: ";
        foreach ($arrayNumeros as $numero) {
          echo "$numero ";
        }
        
        $arrayResultado = [];
        $indice = 0;
        
        // Calculamos los primos y los movemos al principio del nuevo array
        for ($i = 0; $i < count($arrayNumeros); $i++) {
          $esPrimo = true;
          for ($x = 2; $x < $i && $esPrimo; $x++) {
            if ($arrayNumeros[$i] % $x == 0) {
              $esPrimo = false;
            }
            
          }
          
          if ($esPrimo) {
            $arrayResultado[$indice] = $arrayNumeros[$i];
            $indice++;
            
            $arrayNumeros[$i] = null;
          }
        }
        
        
        // Recogemos los demas valores y los agregamos al array
        for ($i = 0; $i < count($arrayNumeros); $i++) {
          if ($arrayNumeros[$i] != null) {
            $arrayResultado[] = $arrayNumeros[$i];
          }
        }
        
        echo "<br>Este es el array modificado: ";
        foreach ($arrayResultado as $numero) {
          echo "$numero ";
        }
        
      } else {
        
        $contadorNumeros++;
        echo "Contador: $contadorNumeros<br>";
        
        echo '<form action="Ejer08.php">'
        . '<input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus" required="required">'
        . '<input type="hidden" name="cadenaNumeros" value="', $cadenaNumeros, '">'
        . '<input type="hidden" name="contador" value="', $contadorNumeros, '">'
        . '<input type="submit" value="Introducir">'
        . '</form>';
      }
      ?>
    </div>
  </body>
</html>