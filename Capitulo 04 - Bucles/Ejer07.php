<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 04 - Bucles</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet"> 
    <style>
      #contenedor {
        position: relative;
      }

      img {
        width: 600px;
        height: 500px;
      }

      #display {
        position: absolute;
        font-size: 25px;
        font-family: 'Orbitron', sans-serif;
        top: 187px;
        left: 400px;
        width: 150px;
        height: 25px;
        background-color: black;
        color: white;
        text-align: center;
        vertical-align: middle;
      }

      a:link, a:visited {
        color: white;
        text-decoration: none;
      }

      a:link:active, a:visited:active {
        color: white;
      }
    </style>
  </head>
  <body>
    <div id="contenedor">
      <h2>Caja fuerte: </h2>
      <img src="https://images-na.ssl-images-amazon.com/images/I/912XeCpuo6L._SL1500_.jpg" usemap="#teclas">
      <?php
        $contadorDigitos = intval($_GET['contador']);
        $combinacion = $_GET['combinacion'] * 10 + $_GET['digito'];
        $nSecreto = 1234;
        

        if (isset($_GET['digito'])) {
            $contadorDigitos++;
        }

        if ($contadorDigitos == 4) {
          if ($combinacion == $nSecreto) {
            // ABIERTA
            echo '<div id="display">ABIERTA</div>';
          } else {
            // CERRADA
            echo '<div id="display"><a href="Ejer07.php">ERROR</a></div>';
          }
        } else {
          echo '<map name="teclas">
            <area shape="circle" coords="320,220,13" alt="1" href="Ejer07.php?digito=1&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="350,220,13" alt="2" href="Ejer07.php?digito=2&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="385,220,13" alt="3" href="Ejer07.php?digito=3&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="320,255,13" alt="4" href="Ejer07.php?digito=4&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="350,255,13" alt="5" href="Ejer07.php?digito=5&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="385,255,13" alt="6" href="Ejer07.php?digito=6&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="320,290,13" alt="7" href="Ejer07.php?digito=7&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="350,290,13" alt="8" href="Ejer07.php?digito=8&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="385,290,13" alt="9" href="Ejer07.php?digito=9&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="350,320,13" alt="0" href="Ejer07.php?digito=0&&combinacion=',$combinacion,'&&contador=',$contadorDigitos,'">
            <area shape="circle" coords="254,270,16" alt="borrar" href="Ejer07.php?contador=0">
          </map>';

          echo '<div id="display">',$combinacion,'</div>';
        }
      ?>
    </div>
  </body>
</html>
