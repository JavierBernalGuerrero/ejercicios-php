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
        </style>
    </head>
    <body>
        <div>
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
        </div>
    </body>
</html>