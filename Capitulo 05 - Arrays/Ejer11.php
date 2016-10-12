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
        Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su 
        traducción). Utiliza un array asociativo para almacenar las parejas de palabras. El 
        programa pedirá una palabra en español y dará la correspondiente traducción en inglés.
      </p>

      <?php
      // Recogida de datos
      if (isset($_GET['palabraIntroducida'])) {
        $diccionario = ["silla" => "Chair", 
                        "rojo" => "Red",
                        "mesa" => "Table",
                        "telefono" => "Phone",
                        "pantalla" => "Screen",
                        "numero" => "Number",
                        "rueda" => "Wheel",
                        "hombre" => "Man",
                        "dibujar" => "Draw",
                        "correr" => "Run",
                        "raton" => "Mouse",
                        "perro" => "Dog",
                        "gato" => "Cat",
                        "comida" => "Foot",
                        "mano" => "Hand",
                        "color" => "Color",
                        "blanco" => "White",
                        "negro" => "Black",
                        "crepusculo" => "Twilight",
                        "fuego" => "Fire",
                        ];
        
        $palabraIntroducida = $_GET['palabraIntroducida'];
        
        if ($diccionario["$palabraIntroducida"]) {
          echo $diccionario["$palabraIntroducida"];
          
        } else {
          echo "Esa palabra no se encuentra en nuestro diccionario";
          
        }
        
        echo '<br><a href="Ejer11.php">Volver</a>';
        
      } else {
        
        echo "Introduce una palabra para buscar su correspondiente traduccion:<br>";
        
        echo '<form action="Ejer11.php">'
        . '<input type="text" name="palabraIntroducida" autofocus="autofocus" required="required">'
        . '<input type="submit" value="Buscar">'
        . '</form>';
      }
      ?>
    </div>
  </body>
</html>