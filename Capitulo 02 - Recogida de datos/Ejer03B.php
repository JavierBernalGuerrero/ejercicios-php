<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 02 - Recogida de datos</title>
    </head>
    <body>
        <h2>Conversor: Pesetas - Euros</h2>
        <p>
            La cantidad equivalente a <?php echo $_GET['pesetas'] ?> ptas en euros son <?php echo ($_GET['pesetas'] / 166.386) ?>€.
        </p>
    </body>
</html>
