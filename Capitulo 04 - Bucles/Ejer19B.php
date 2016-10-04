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
      <h2>Piramide Rellena: </h2>
      <?php 
        $altura = $_GET['numeroIntroducido'];
        $material = $_GET['material'];
        
        for ($y = 1; $y <= $altura; $y++) {
          echo "<div>";
          for ($x = 0; $x < $y; $x++) {
            echo '<img src="', $material,'">';
            
          }
          echo "</div>";
          
        }
      ?>
    </div>
  </body>
</html>