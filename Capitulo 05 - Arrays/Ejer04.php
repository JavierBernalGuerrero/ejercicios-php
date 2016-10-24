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
        Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por 
        pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a 
        continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista 
        generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un 
        color diferente.
      </p>

      <?php
      // Recogida de datos
      if (isset($_GET['numeroIntroducido'])) {
        $numerosAleatorios = explode(" ", $_GET['arrayNumeros']);
        
      } else {
        $numerosAleatorios = [];
        for ($i = 0; $i < 100; $i++) {
          $numerosAleatorios[$i] = rand(0, 20);
        }
        
      }
      
      $arrayEnString = implode(" ", $numerosAleatorios);
      
      echo '<p>';
      for ($i = 0; $i < count($numerosAleatorios); $i++) {
        if (isset($_GET['numeroIntroducido']) && $numerosAleatorios[$i] == $_GET['numeroIntroducido']) {
          echo '<span style="background-color: black; color: white;">', $numerosAleatorios[$i], '</span> ';
          
        } else {
          echo '<span>', $numerosAleatorios[$i], '</span> ';
        
          
        }
      }
      echo '</p>';

      echo 'Introduce un numero: '
      . '<form action="Ejer04.php">'
      . '<input type="number" name="numeroIntroducido" step="1" min="0" autofocus="autofocus" required="required">'
      . '<input type="hidden" name="arrayNumeros" value="', $arrayEnString, '">'
      . '<input type="submit" value="Enviar">'
      . '</form>';
      
      ?>
    </div>
  </body>
</html>
