<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 04 - Bucles</title>
    <style>
      body {
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100%;
        background-color: #403075;
      }

      div {
        background-color: #C7B6FF;
        border-radius: 15px;
        text-align: center;
        margin: auto;
        padding: 10px;
        
      }
      
      img {
        height: 70px;
        width: 50px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Piramide Hueca: </h2>
      <?php 
        $altura = $_GET['numeroIntroducido'];

        
        for ($y = 1; $y <= $altura; $y++) {
          echo "<div>";
          for ($x = 0; $x < $y; $x++) {
            if ($y == $altura) {
              echo '<img src="http://latamirindera.cero.io/lataVacia.png">';
              
            } else {
              if ($x == 0 || $x == $y - 1) {
                echo '<img src="http://latamirindera.cero.io/lataVacia.png" style="margin-right:', 15 * $y ,'px; margin-left:', 15 * $y ,'px;">';
              
              }
            }
          }
          echo "</div>";
          
        }
      ?>
    </div>
  </body>
</html>