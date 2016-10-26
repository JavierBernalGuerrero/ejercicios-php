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
      #contenedor {
        position: relative;
        background-color: #C7B6FF;
        border-radius: 15px;
        text-align: center;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        width: 90%;
      }
      
      .mes {
        width: 90%;
        height: 50px;
        border-radius: 15px;
        margin: 5px;
        padding: 5px;
        background-color: grey;
        display: inline-flex;
        flex-flow: row nowrap;
        align-items: flex-start;
      }
      
      div .cuadranteTemperatura {
        margin-left: 10px;
        width: 25px;
        height: 25px;
        float: left;
      }
    </style>
  </head>
  <body>
    <div id="contenedor">
      <h2>Manipulacion de arrays: </h2>
      <p>
        Realiza un programa que pida 8 números enteros y que luego muestre esos números de 
        colores, los pares de un color y los impares de otro.
      </p>

      <?php
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                  "Septiembre", "Octubre", "Noviembre", "Diciembre"];
      
        // Recogida de datos
        if (isset($_GET['nuevaTemperatura'])) {
          $temperaturaMeses = $_GET['meses'];
          $temperaturaIntroducida = $_GET['nuevaTemperatura'];
          $temperaturaMeses = $temperaturaMeses . " " . $temperaturaIntroducida;
          $contador = $_GET['contador'] + 1;
          
        } else {
          $contador = 0;
          
        }
        
        if ($contador > 11) {
          // Aqui transformamos los datos en array
          $temperaturaMeses = substr($temperaturaMeses, 1);
          $temperaturaMeses = explode(" ", $temperaturaMeses);
          
          for ($mes = 0; $mes < 12; $mes++) {
            echo '<div class="mes">';
            
            
            echo $meses[$mes];
            
            for ($i = 0; $i < $temperaturaMeses[$mes]; $i++) {
              if ($i < 10) {
                $color = "white";

              } else if ($i < 20){
                $color = "blue";

              } else if ($i < 25) {
                $color = "orange";

              } else {
                $color = "red";

              }
              echo '<div class="cuadranteTemperatura" style="background-color: ', $color, '"></div>';
            }
            echo '</div>';
          }
          
        } else {
          echo "Temperatura en $meses[$contador]:"
          . '<form action="Ejer05.php">'
          . '<input type="number" name="nuevaTemperatura" step="1" min="0" autofocus="autofocus" required="required">'
          . '<input type="hidden" name="contador" value="', $contador, '">'
          . '<input type="hidden" name="meses" value="', $temperaturaMeses, '">'
          . '<input type="submit" value="Enviar">'
          . '</form>';
        }
      ?>
    </div>
  </body>
</html>