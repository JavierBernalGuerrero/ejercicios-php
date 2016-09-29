<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Resolucion de ecuaciones de primer grado "(ax + b = 0)": </h2>
        <?php 
            $variableA = $_GET['variableA'];
            $variableB = $_GET['variableB'];

            if (variableA == 0) {
                echo "<p>No tiene solucion, a no puede ser 0.</p>";

            } else {
                echo "<p>El resultado es: x = ", -$variableB / $variableA, "</p>";
                
            }
        ?>
    </body>
</html>
