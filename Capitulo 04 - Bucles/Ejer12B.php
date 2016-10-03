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
            <h2>Serie Fibonacci: </h2>
            <?php 
                $$nIntroducido = $_GET['numeroIntroducido'];

                $valorA = 0;
                $valorB = 1;
                $suma = 0;

                if ($$nIntroducido == 0) {
                  echo "No se ha introducido ningun digito";
                  
                } else {
                  echo "$valorA ";
                  for ($i = 1; $i < $$nIntroducido; $i++) {
                    echo "$valorB ";
                    $suma = $valorA + $valorB;
                    $valorA = $valorB;
                    $valorB = $suma;
                  }
                }
            ?>
        </div>
    </body>
</html>