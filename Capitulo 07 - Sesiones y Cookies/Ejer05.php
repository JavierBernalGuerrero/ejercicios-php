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
        width: 40%;
        float: left;
      }
      
      #carrito {
        width: 40%;
        float: right;
      }
      
      #productos img {
        width: 300px;
        height: 300px;
      }
    </style>
  </head>
  <body>
    <div>
      <h2>Operaciones varias con numeros: </h2>
      <p>
        Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. 
        Un catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer 
        al menos la descripción y el precio. Todos los productos deben tener una imagen que los 
        identifique. Al lado de cada producto del catálogo deberá aparecer un botón Comprar que 
        permita añadirlo al carrito. Si el usuario hace clic en el botón Comprar de un producto 
        que ya estaba en el carrito, se deberá incrementar el número de unidades de dicho producto. 
        Para cada producto que aparece en el carrito, habrá un botón Eliminar por si el usuario 
        se arrepiente y quiere quitar un producto concreto del carrito de la compra. A continuación 
        se muestra una captura de pantalla de una posible solución.
      </p>

      <div id="productos">
        <h3>Productos</h3>
        <div>
          <img src="http://srv-live.lazada.com.ph/p/image-4788321-1-product.jpg">
          <p>Nombre: Smartwatch DZ09</p>
          <p>Precio: 26,95 €</p>
          <!-- Completar el formulario -->
        </div>
      </div>
      
      <div id="carrito">
        <h3>Carrito</h3>
      </div>
    </div>
  </body>
</html>