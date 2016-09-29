<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 03 - Recogida de datos</title>
    </head>
    <body>
        <h2>Saludo personalizado: </h2>
        <?php 
            switch ($_GET['hora']) {
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                    echo "<p>Buenos dias</p>";
                    break;

                case 13:
                case 14:
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                    echo "<p>Buenas tardes</p>";
                    break;

                default:
                    echo "<p>Buenas noches</p>";
                    break;
            }
        ?>
    </body>
</html>
