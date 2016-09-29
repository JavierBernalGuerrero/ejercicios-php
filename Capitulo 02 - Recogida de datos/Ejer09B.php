<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 02 - Recogida de datos</title>
    </head>
    <body>
        <h2>Volumen de un cono: </h2>
        <?php $volumen = (pi() * pow($_GET['radio'], 2) * $_GET['altura']) / 3 ?>
        <p>
            El volumen del cono es: <?php echo $volumen ?> metros cubicos.
        </p>
    </body>
</html>
