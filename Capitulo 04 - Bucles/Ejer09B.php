<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 04 - Bucles</title>
    </head>
    <body>
        <h2>Contar digitos de un numero: </h2>
        <?php 
            $numeroIntroducido = $_GET['numeroIntroducido'];
            
            $contadorDigitos = 0;
            while (floor($numeroIntroducido) > 0) {
                $numeroIntroducido = $numeroIntroducido / 10;
                $contadorDigitos++;
            }

            echo "<p>El numero ", $_GET['numeroIntroducido'], " tiene $contadorDigitos digitos.</p>"
        ?>
    </body>
</html>