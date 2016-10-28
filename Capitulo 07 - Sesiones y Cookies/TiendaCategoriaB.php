<?php
  session_start();
  
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Capitulo 07 - Sesiones y Cookies</title>
    <style>
      body {
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100%;
        background-color: #403075;

      }

      div {
        position: relative;
        background-color: #C7B6FF;
        border-radius: 15px;
        text-align: center;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        width: 90%;

      }
      
      #productos {
        width: 60%;
        float: left;
      }
      
      #carrito {
        width: 35%;
        float: right;
      }
      
      #productos img {
        border-radius: 5px;
        width: 150px;
        height: 150px;
      }
      
      #carrito img {
        border-radius: 100%;
        float: left;
        width: 100px;
        height: 100px;
      }
      
      #productos div, #carrito div {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <?php 
    
      if (isset($_SESSION['productos'])) {
        $productos = $_SESSION['productos'];
        
      }
      
      if (isset($_GET['idComprar'])) {
        $claveProductoComprado = $_GET['idComprar'];
        $productos[$claveProductoComprado][cantidad]++;
        $_SESSION['productos'] = $productos;
      }
      
      if (isset($_GET['idEliminar'])) {
        $productos[$_GET['idEliminar']][cantidad] = 0;
        $_SESSION['productos'] = $productos;
      }
    ?>
    <div>
      <h2>Tienda online: </h2>
      <p>
        Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para 
        ello, cada uno de los productos del catálogo deberá tener un botón Detalle que, al ser 
        accionado, debe llevar al usuario a la vista de detalle que contendrá una descripción 
        exhaustiva del producto en cuestión. Se podrán añadir productos al carrito tanto desde 
        la vista de listado como desde la vista de detalle.
      </p>

      <div id="productos">
        <h3>Productos</h3>
        <?php 
          foreach ($productos as $key => $value) {
            if ($key == $_GET['idDetalle']) {
              echo '<div><form action="TiendaCategoriaB.php">'
                  . '<img src="', $value[imagen], '" style="float: left;">'
                  . '<h4>', $value[nombre], '</h4>'
                  . '<p>Su precio es de : ', $value[precio], '€ y ', $value[detalle], '</p>'
                  . '<input type="hidden" name="idComprar" value="', $key, '">'
                  . '<input type="hidden" name="idDetalle" value="', $_GET['idDetalle'], '">'
                  . '<input type="submit" value="Comprar">'
                  . '</form>';

              echo '<form action="TiendaCategoriaA.php">'
                  . '<input type="submit" value="Volver">'
                  . '</form></div>';
            }
          }
        ?>
      </div>
      
      <div id="carrito">
        <h3>Carrito</h3>
        <?php
        foreach ($productos as $key => $value) {
          if ($value['cantidad'] > 0) {
            echo '<div><form action="TiendaCategoriaB.php">'
                  . '<img src="', $value[imagen], '">'
                  . '<p>Nombre: ', $value[nombre], '</p>'
                  . '<p>Precio: ', $value[precio], '€</p>'
                  . '<p>Unidades: ', $value[cantidad], '</p>'
                  . '<input type="hidden" name="idEliminar" value="', $key, '">'
                  . '<input type="hidden" name="idDetalle" value="', $_GET['idDetalle'], '">'
                  . '<input type="submit" value="Eliminar">'
                  . '</form></div>';
            $precioTotal += $value[precio] * $value[cantidad];
              
          }
        }
        
        if (isset($precioTotal)) {
          echo "<br>Precio total: $precioTotal €";
        }
        ?>
      </div>
    </div>
  </body>
</html>