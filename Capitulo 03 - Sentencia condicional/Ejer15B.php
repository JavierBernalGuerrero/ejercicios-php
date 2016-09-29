<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Averiguar primera cifra: </h2>
        <?php 

            if ($_GET['pregunta1'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta2'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta3'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta4'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta5'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta6'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta7'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta8'] == "verdadero") {
                $puntuacion += 3;
            }

            if ($_GET['pregunta9'] == "verdadero") {
                $puntuacion += 3;
            }
            
            if ($_GET['pregunta10'] == "verdadero") {
                $puntuacion += 3;
            }
            
            if (($puntuacion >= 0) && ($puntuacion <= 10)) {
                System.out.print("¡Enhorabuena! tu pareja parece ser totalmente fiel.");
                
            } else {
                if (($puntuacion >= 11) && ($puntuacion <= 22)) {
                    System.out.print("Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.");
                
                    
                } else {
                    System.out.print("Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.");

                }
            }
        ?>
    </body>
</html>