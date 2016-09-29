<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Averiguar primera cifra: </h2>
        <?php 
            $numeroIntroducido = $_GET['numeroIntroducido'];

            echo "<p>La primera cifra es el ", strrev($numeroIntroducido) % 10, "</p>"
        ?>
    </body>
</html>