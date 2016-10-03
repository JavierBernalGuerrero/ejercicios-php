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
            <h2>Calcula media: </h2>
            <?php 
                $contadorNumero = $_GET['contadorNumero']; 
                $media = $_GET['media'];

                $numeroIntroducido = $_GET['numeroIntroducido'];

                if ($numeroIntroducido >= 0) {
                    if (isset($_GET['numeroIntroducido'])) {
                        $media += $numeroIntroducido;
                        $contadorNumero++;
                    }

                } else {
                    $media /= $contadorNumero; 
                    echo "La media es $media";

                }
            ?>

            <form action="Ejer10.php" method="get">
                <p>Introduce un numero: </p>
                <input type="number" name="numeroIntroducido" autofocus="focus" step="1" required="required">
                <input type="hidden" name="contadorNumero" value="<?=$contadorNumero?>">
                <input type="hidden" name="media" value="<?=$media?>">

                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>
