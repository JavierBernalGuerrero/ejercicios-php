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
      
      #numero {
        position: absolute;
        top: 140px;
        left: 0px;
        width: 30%;
      }
      
      #cuadrado {
        position: absolute;
        top: 140px;
        left: 380px;
        width: 30%;
      }
      
      #cubo {
        position: absolute;
        top: 140px;
        left: 755px;
        width: 30%;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Manipulacion de arrays: </h2>
      <p>
        Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y 
        “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array 
        “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. 
        En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”. A 
        continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.
      </p>
      
      <?php
        $capacidadArray = 20;
        
        // Asigna valores aleatorios al array "numero
        echo '<div id="numero">';
        for ($i = 0; $i < $capacidadArray; $i++) {
          $numero[$i] = rand(0, 100);
          
          echo $numero[$i], '<br>';
        }
        echo '</div>';
        
        // Asigna valores cuadrados del array "numero"
        echo '<div id="cuadrado">';
        for ($i = 0; $i < count($numero); $i++) {
          $cuadrado[$i] = pow($numero[$i], 2);
          
          echo $cuadrado[$i], '<br>';
        }
        echo '</div>';
        
        // Asigna valores cubicos del array "numero"
        echo '<div id="cubo">';
        for ($i = 0; $i < count($numero); $i++) {
          $cubo[$i] = pow($numero[$i], 3);
          
          echo $cubo[$i], '<br>';
        }
        echo '</div>';
      ?>
    </div>
  </body>
</html>
