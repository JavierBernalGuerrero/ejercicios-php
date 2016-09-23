<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 01 - Conceptos básicos</title>
    </head>
    <body>
        <table>
            <?php
                $cantidad = 32; // En pesetas
                echo "$cantidad € son ", round($cantidad * 166.386, 2), "Pta";
            ?>
        </table>
    </body>
</html>