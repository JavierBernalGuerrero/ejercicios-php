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
        if (isset($_GET['arrayNumeros'])) {
          $numeros = $_GET['arrayNumeros'];
          echo var_dump($numeros), "<br>";
        }
        
        if (isset($_GET['nuevoNumero'])) {
          $numeros[$contador] = $_GET['nuevoNumero'];
          $contador = $_GET['contador'] + 1;
          echo $contador, "<br>";
        }
        
        
      
        if (count($numeros) <= 10) {
          echo 'Introduce el numero secreto: '
              . '<form action="Ejer02.php">'
              . '<input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus">'
              . '<input type="hidden" name="contador" value="', $contador, '">'
              . '<input type="hidden" name="arrayNumeros" value="', $numeros, '">'
              . '<input type="submit" value="Enviar">'
              . '</form>';
          
        } else {
          
          
        }
        
      ?>
    </div>
  </body>
</html>
