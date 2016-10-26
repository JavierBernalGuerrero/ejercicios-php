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
        Realiza un programa que pida 8 números enteros y que luego muestre esos números de 
        colores, los pares de un color y los impares de otro.
      </p>

      <?php
        // Recogida de datos
        if (isset($_GET['nuevoNumero'])) {
          $arrayNumeros = $_GET['arrayNumeros'];
          $numeroIntroducido = $_GET['nuevoNumero'];
          $arrayNumeros = $arrayNumeros . " " . $numeroIntroducido;
          $contador = $_GET['contador'] + 1;
          
        } else {
          $contador = 1;
          
        }
        if ($contador > 8) {
          // Aqui transformamos los datos en array
          $arrayNumeros = substr($arrayNumeros, 1);
          $arrayNumeros = explode(" ", $arrayNumeros);
          
          foreach ($arrayNumeros as $numero) {
            if ($numero % 2 == 0) {
              echo '<span style="color: blue;">', $numero, ' </span>';
              
            } else {
              echo '<span style="color: red;">', $numero, ' </span>';
              
            }
          }
          
        } else {
          echo $contador, 'º numero: '
          . '<form action="Ejer06.php">'
          . '<input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus" required="required">'
          . '<input type="hidden" name="contador" value="', $contador, '">'
          . '<input type="hidden" name="arrayNumeros" value="', $arrayNumeros, '">'
          . '<input type="submit" value="Enviar">'
          . '</form>';
        }
      ?>
    </div>
  </body>
</html>