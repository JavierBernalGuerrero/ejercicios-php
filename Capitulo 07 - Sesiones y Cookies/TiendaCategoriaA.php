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
        width: 50%;
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
      
      #categorias a {
        padding: 5px;
        color: black;
        text-decoration: none;
        background-color: white;
        border-right: 1px solid black;
        border-bottom: 1px solid black;
        border-radius: 10px;
        box-shadow: 5px 5px 10px #555;
      }
      
      #categorias a:hover {
        border-right: 0px;
        border-bottom: 0px;
        border-top: 1px solid black;
        border-left: 1px solid black;
        color: white;
        background-color: green;
      }
    </style>
  </head>
  <body>
    <?php 
    
      if (isset($_SESSION['productos'])) {
        $productos = $_SESSION['productos'];
        
      } else {
        $productos = [
            'P001' => ['nombre' => 'Smartwatch DZ09', 'precio' => 26.95, 'cantidad' => 0,
                'detalle' => 'tiene las siguientes caracteristicas: <br>'
                  . '· Procesador: CPU MTK6260A 533 MHz<br>'
                  . '· Pantalla: 1.56 pulgadas LCD TFT HD OGS<br>'
                  . '· Batería: 380 mAh Li-Ion',
                'categoria' => 'smartwatch',
                'imagen' => 'imagenes/p001.png'],
            'P002' => ['nombre' => 'SmartWatch 2 SW2', 'precio' => 127.05, 'cantidad' => 0,
                'detalle' => 'tiene las siguientes caracteristicas: <br>'
                  . '· Procesador: ST-Microeletronics STM32F439 / ARM Cortex-M4<br>'
                  . '· Pantalla: LCD transflectiva de 1,6 pulgadas<br>'
                  . '· Batería: 225 mAh',
                'categoria' => 'smartwatch',
                'imagen' => 'imagenes/p002.jpg'],
            'P003' => ['nombre' => 'SmartWatch Z80 3G', 'precio' => 64.14, 'cantidad' => 0,
                'detalle' => 'tiene las siguientes caracteristicas: <br>'
                  . '· Procesador: Exynos 3250 a 1GHz<br>'
                  . '· Pantalla: 1.2 pulgadas circular Super AMOLED<br>'
                  . '· Batería: 250mAh',
                'categoria' => 'smartwatch',
                'imagen' => 'imagenes/p003.jpg'],
            'P004' => ['nombre' => 'Apple MacBook Pro Retina', 'precio' => 2529, 'cantidad' => 0,
                'detalle' => 'tiene las siguientes caracteristicas: <br>'
                  . '· Procesador: i7 - 2,5GHz<br>'
                  . '· Pantalla: LED de 15,4 pulgadas<br>'
                  . '· Batería: Litio de 99,5 vatios/hora',
                'categoria' => 'portatil',
                'imagen' => 'imagenes/p004.jpg'],
            'P005' => ['nombre' => 'Asus ROG GX700VO-GC009T', 'precio' => 2999, 'cantidad' => 0,
                'detalle' => 'tiene las siguientes caracteristicas: <br>'
                  . '· Procesador: i7 - 2,7GHz<br>'
                  . '· Pantalla: LED de 17,3 pulgadas<br>'
                  . '· Batería: 6 celdas',
                'categoria' => 'portatil',
                'imagen' => 'imagenes/p005.jpg']
            ];
        
        $_SESSION['productos'] = $productos;
        $_SESSION['idCategoria'] = "todo";
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
      
      if (isset($_GET['idCategoria'])) {
        $_SESSION['idCategoria'] = $_GET['idCategoria'];
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
      <div id="categorias">
        Categorias: 
        <a href="TiendaCategoriaA.php?idCategoria=todo">Todo</a>
        <a href="TiendaCategoriaA.php?idCategoria=smartwatch">SmartWatch</a>
        <a href="TiendaCategoriaA.php?idCategoria=portatil">Portatil</a>
      </div>

      <div id="productos">
        <h3>Productos</h3>
        <?php 
          $categoriaEncontrada = false; // Comprueba si la categoria se ha encontrado o no.
          $idCategoria = $_SESSION['idCategoria'];
          
          foreach ($productos as $key => $value) {
            // Comprueba si: Es la categoria seleccionada y mostrar todas las categorias
            if ($idCategoria == $value[categoria] || $idCategoria == "todo" ) {
              
              $categoriaEncontrada = true;
              
              echo '<div><form action="TiendaCategoriaA.php">'
                  . '<img src="', $value[imagen], '">'
                  . '<p>Nombre: ', $value[nombre], '</p>'
                  . '<p>Precio: ', $value[precio], '€</p>'
                  . '<input type="hidden" name="idComprar" value="', $key, '">'
                  . '<input type="submit" value="Comprar">'
                  . '</form>';

              echo '<form action="TiendaCategoriaB.php">'
                  . '<input type="hidden" name="idDetalle" value="', $key, '">'
                  . '<input type="submit" value="Detalle">'
                  . '</form></div>';

            }
          
            
          }
          
          if (!$categoriaEncontrada) {
            echo '<div>No existen productos en esta categoria</div>';
          }
        ?>
      </div>
      
      <div id="carrito">
        <h3>Carrito</h3>
        <?php
        foreach ($productos as $key => $value) {
          if ($value['cantidad'] > 0) {
            echo '<div><form action="TiendaCategoriaA.php">'
                  . '<img src="', $value[imagen], '">'
                  . '<p>Nombre: ', $value[nombre], '</p>'
                  . '<p>Precio: ', $value[precio], '€</p>'
                  . '<p>Unidades: ', $value[cantidad], '</p>'
                  . '<input type="hidden" name="idEliminar" value="', $key, '">'
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