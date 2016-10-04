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
            <h2>Piramide Hueca: </h2>
            <form action="Ejer20B.php">
                <p>Introduce la altura de la piramide y su material: </p>
                <input type="number" name="numeroIntroducido" step="1" min="1">
                <select name="material">
                  <option value="http://latamirindera.cero.io/lataVacia.png">Lata</option>
                  <option value="http://www.ladrillerasanjoaquin.com/imagenes/Rejilla@.png">Ladrillo</option>
                  <option value="http://vignette3.wikia.nocookie.net/hayday/images/2/21/Lingote_de_hierro.png/revision/latest?cb=20160125220830&path-prefix=es">Hierro</option>
                  <option value="http://www.teknopointinternacional.net/es_ES/media/f6dc850db56a396b717ab20d0512dc0b.cms_1_1024_1_1024__/llistons-de-fusta.png">Madera</option>
                  <option value="http://www.qrshoppers.com/images/portfolio/recent/item4.png">Botella</option>
                </select>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>