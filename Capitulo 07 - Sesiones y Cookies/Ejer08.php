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

  // Las coockies no pueden contener un array como las sesiones.
  // Para trabajar con arrays en las coockies tenemos que crear una coockie por cada
  // entrada del diccionario.
  foreach ($diccionario as $key => $value) {
    setcookie($key, $value, time() + 7*24*60*60);

  }
  
  if (isset($_GET['nuevaClave'])) {
    setcookie($_GET['nuevaClave'], $_GET['nuevoValor'], time() + 7*24*60*60);
    $diccionario[$_GET['nuevaClave']] = $_GET['nuevoValor'];
  }
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 07 - Sesiones y Cookies</title>
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
    print_r($_COOKIE['diccionario']);
    <div>
      <h2>Diccionarios: </h2>
      <p>
        Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El 
        programa pedirá que el usuario teclee la traducción al español de cada una de las palabras 
        y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas 
        son válidas y cuántas erróneas. La aplicación debe tener una opción para introducir los 
        pares de palabras (inglés - español) que se deben guardar en cookies; de esta forma, si 
        de vez en cuando se dan de alta nuevas palabras, la aplicación puede llegar a contar con 
        un número considerable de entradas en el mini-diccionario.
      </p>
      
      <?php
      
      
      // -- Añadir conjuntos al diccionario --
      echo '<form action="Ejer08.php">'
        . '<input type="text" name="nuevaClave" placeholder="Nueva clave..." required="required">'
        . '<input type="text" name="nuevoValor" placeholder="Nuevo valor..." required="required">'
        . '<input type="submit" value="Guardar">'
        . '</form>';
      
      
      
      
      // -- Comienzo del programa que dirige el test y las correcciones --
      
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
        
        $cadenaPreguntas = substr($cadenaPreguntas, 1);
        $arrayPreguntas = explode(" ", $cadenaPreguntas);
        
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
        
        
        echo '<form action="Ejer08.php">'
        . '<input type="text" name="palabraIntroducida" autofocus="autofocus" required="required">'
        . '<input type="hidden" name="contador" value="', $contador, '">'
        . '<input type="hidden" name="respuestas" value="', $cadenaRespuestas, '">'
        . '<input type="hidden" name="preguntas" value="', $cadenaPreguntas, '">'
        . '<input type="submit" value="Introducir">'
        . '</form>';
      }
      
      print_r($diccionario);
      ?>
    </div>
  </body>
</html>