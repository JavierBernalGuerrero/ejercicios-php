<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Capitulo 04 - Bucles</title>
    </head>
    <body>
        <h2>Muestra de bucles con do-while: </h2>
        <?php 
            $i = 320;
            do {
                echo "<p>El valor de i es ", $i,"</p>"; 
                $i -= 20;
            } while($i >= 160)
        ?>
    </body>
</html>


