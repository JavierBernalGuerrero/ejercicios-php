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
        margin-top: 50px;
        padding: 10px;
        width: 400px;
      }
      
      img {
        height: 70px;
        width: 40px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Piramide Rellena: </h2>
      <?php 
        $altura = $_GET['numeroIntroducido'];

        
        for ($i = 0; $i < $altura; $i++) {
          echo '<img src="http://latamirindera.cero.io/lataVacia.png"';
        }
      ?>
    </div>
  </body>
</html>