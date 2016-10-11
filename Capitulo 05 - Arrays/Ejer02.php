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
        Escribe un programa que pida 10 números por teclado y que luego muestre los números 
        introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo 
        respectivamente.
      </p>
      
      <?php
        if (isset($_GET['nuevoNumero'])) {
          $numeros = $_GET['arrayNumeros'];
          $numeroIntroducido = $_GET['nuevoNumero'];
          
          $numeros = $numeros . " " . $numeroIntroducido;
          
          $contador = $_GET['contador'] + 1;
          
        } else {
          $contador = 1;
        }
      
        if ($contador > 10) {
          $numeros = substr($numeros, 1); // <- El primer valor es igual a "". 
          // He podido comprobar esto gracias a la funcion "var_dump($numeros)".
          $numeros = explode(" ", $numeros);
          
          
          /*
          foreach ($numeros as $numero) {
            echo "$numero<br>";
          }
          */
          
          $maximo = max($numeros);
          $minimo = min($numeros);
          
          echo "Maximo: $maximo<br>";
          echo "Minimo: $minimo<br>";
          
          
        } else {
        
          echo "Contador: $contador<br>";
          
          echo 'Introduce el numero secreto: '
              . '<form action="Ejer02.php">'
              . '<input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus" required="required">'
              . '<input type="hidden" name="contador" value="', $contador, '">'
              . '<input type="hidden" name="arrayNumeros" value="', $numeros, '">'
              . '<input type="submit" value="Enviar">'
              . '</form>';
        }
        
      ?>
    </div>
  </body>
</html>
