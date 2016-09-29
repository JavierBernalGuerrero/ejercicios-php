<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Resolucion de ecuaciones de segundo grado "(ax&sup2; + bx + c = 0)": </h2>
        <?php 
            $variableA = $_GET['variableA'];
            $variableB = $_GET['variableB'];
            $variableC = $_GET['variableC'];

            // El discriminante indica si la raiz se puede realizar o no.
            $discriminante = pow($variableB, 2) - 4 * $variableA * variableC;
            if ($discriminante < 0) {
                echo "Error, el discriminante es negativo.";
                
            } else {
                $resultado1 = (-$variableB + (sqrt(pow($variableB, 2) - 4 * $variableA * variableC))) / 2 * $variableA;
                $resultado2 = (-$variableB - (sqrt(pow($variableB, 2) - 4 * $variableA * variableC))) / 2 * $variableA;
                
                echo "<p>Los resultados son: </p>";
                echo "<p>a) $resultado1 ||| b) $resultado2</p>";
              
            }
            
        ?>
    </body>
</html>
