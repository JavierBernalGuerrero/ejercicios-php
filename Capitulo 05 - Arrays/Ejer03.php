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
        Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los 
        elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, 
        el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la 
        posición 0. Finalmente, muestra el contenido del array.
      </p>

      <?php
      // Recogida de datos
      if (isset($_GET['nuevoNumero'])) {
        $numerosAleatorios = $_GET['arrayNumeros'];
        $numeroIntroducido = $_GET['nuevoNumero'];

        $numerosAleatorios = $numerosAleatorios . " " . $numeroIntroducido;

        $contador = $_GET['contador'] + 1;
      } else {
        $contador = 1;
      }

      if ($contador > 15) {
        // Aqui transformamos los datos en array
        $numerosAleatorios = substr($numerosAleatorios, 1);
        $numerosAleatorios = explode(" ", $numerosAleatorios);


        $ultimaPosicion = $numerosAleatorios[count($numerosAleatorios) - 1];
        for ($i = count($numerosAleatorios) - 1; $i > 0; $i--) {
          $numerosAleatorios[$i] = $numerosAleatorios[$i - 1];
        }
        $numerosAleatorios[0] = $ultimaPosicion;

        foreach ($numerosAleatorios as $numero) {
          echo "$numero<br>";
        }
      } else {

        echo "Contador: $contador<br>";

        echo 'Introduce un numero: '
        . '<form action="Ejer03.php">'
        . '<input type="number" name="nuevoNumero" step="1" min="0" autofocus="autofocus" required="required">'
        . '<input type="hidden" name="contador" value="', $contador, '">'
        . '<input type="hidden" name="arrayNumeros" value="', $numerosAleatorios, '">'
        . '<input type="submit" value="Enviar">'
        . '</form>';
      }
      ?>
    </div>
  </body>
</html>
