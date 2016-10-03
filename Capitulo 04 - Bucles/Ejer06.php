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
            <h2>Muestra de bucles con do-while: </h2>
            <?php 
                $i = 320;
                do {
                    echo "<p>El valor de i es ", $i,"</p>"; 
                    $i -= 20;
                } while($i >= 160)
            ?>
        </div>
    </body>
</html>


