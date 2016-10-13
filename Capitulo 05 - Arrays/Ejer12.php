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
        Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del 
        ejercicio anterior. El programa pedirá que el usuario teclee la traducción al inglés de 
        cada una de las palabras y comprobará si son correctas. Al final, el programa deberá 
        mostrar cuántas respuestas son válidas y cuántas erróneas.
      </p>

      <?php
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
                        "fuego" => "Fire" ];
      
      // Se utiliza para pedir de forma aleatoria los valores de estas claves
      $clavesDiccionario = ["silla", "rojo", "mesa", "telefono", "pantalla", "numero", "rueda",
                            "hombre", "dibujar", "correr", "raton", "perro", "gato", "comida",
                            "mano", "color", "blanco", "negro", "crepusculo", "fuego" ];
      
      // Recogida de datos
      if (isset($_GET['contador'])) {
        $contador = $_GET['contador'];
        $palabraIntroducida = $_GET['palabraIntroducida'];
        $cadenaRespuestas = $_GET['respuestas'] . " " . $palabraIntroducida;
        $cadenaPreguntas = $_GET['preguntas'];
        
      } else {
        $contador = 0;
        
      }
      
      
      if ($contador == 5) {
        $cadenaRespuestas = substr($cadenaRespuestas, 1);
        $arrayRespuestas = explode(" ", $cadenaRespuestas);
//        var_dump($arrayRespuestas);
        
        $cadenaPreguntas = substr($cadenaPreguntas, 1);
        $arrayPreguntas = explode(" ", $cadenaPreguntas);
//        var_dump($arrayPreguntas);
        
        echo "Preguntas | Respuestas<br>";
        for ($i = 0; $i < count($arrayPreguntas); $i++) {
          echo "<br>$arrayPreguntas[$i] | $arrayRespuestas[$i]: ";
          if (array_search($arrayPreguntas[$i], $diccionario) == $arrayRespuestas[$i]) {
            echo "Correcto";
          } else {
            echo "Error";
          }
        }
        
      } else {
        
        $contador++;
        
        $pregunta = $diccionario[$clavesDiccionario[rand(0, 19)]];
        $cadenaPreguntas = $cadenaPreguntas . " " . $pregunta;
        
        echo $contador . "º Palabra: $pregunta";
        
        
        echo '<form action="Ejer12.php">'
        . '<input type="text" name="palabraIntroducida" autofocus="autofocus" required="required">'
        . '<input type="hidden" name="contador" value="', $contador, '">'
        . '<input type="hidden" name="respuestas" value="', $cadenaRespuestas, '">'
        . '<input type="hidden" name="preguntas" value="', $cadenaPreguntas, '">'
        . '<input type="submit" value="Introducir">'
        . '</form>';
      }
      ?>
    </div>
  </body>
</html>