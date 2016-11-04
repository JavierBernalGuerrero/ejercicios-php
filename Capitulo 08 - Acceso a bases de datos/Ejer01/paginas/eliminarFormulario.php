<html>
  <head>
    <meta charset="UTF-8">
    <title>Mantenimiento de clientes</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="../../css/estilo.css"/>
  </head>
  <body>
    <?php
    // Conexion con la base de datos
    try {
      $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
      //echo "Se ha establecido una conexión con el servidor de bases de datos.";
      
    } catch (PDOException $e) {
      echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
      echo "Error: " . $e->getMessage();
    }
    
    $consulta = $conexion->query('SELECT dni, nombre, direccion, telefono '
                                . 'FROM cliente WHERE dni=' . $_POST['dni']);
    
    $clienteElegido = $consulta->fetchObject();
    ?>
    
    <h2>Mantenimiento de clientes</h2>
    <h4>Eliminación</h4>
    <div id="formularioEliminar">
      <p>¿Estas seguro de que quieres eliminar este cliente?</p>
      <form action="eliminarAccion.php" method="post">
        <input type="text" name="dni" disabled="disabled" value="<?= $clienteElegido->dni ?>">
        <input type="text" name="nombre" disabled="disabled" value="<?= $clienteElegido->nombre ?>">
        <input type="text" name="direccion" disabled="disabled" value="<?= $clienteElegido->direccion ?>">
        <input type="text" name="telefono" disabled="disabled" value="<?= $clienteElegido->telefono ?>">
        <br>
        <button class="btn waves-effect red" type="submit">
          <i class="material-icons">delete</i>
        </button>
        <!-- Agregar la accion de eliminar y el boton de volver a la pagina anterior -->
      </form>
    </div>
  </body>
</html>