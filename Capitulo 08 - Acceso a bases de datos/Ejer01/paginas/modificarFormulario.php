<html>
  <head>
    <meta charset="UTF-8">
    <title>Mantenimiento de clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="../../css/estilo.css"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <h4>Modificación</h4>
    <div id="formularioModificar">
      <h5>¿Estas seguro de que quieres modificar este cliente?</h5>
      <table>
        <thead>
          <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
          </tr>
        </thead>
        <tfoot></tfoot>
        <tbody>
          <tr>
            <!-- Tengo que arreglar el margen que deja dentro de la cuadricula y terminar la accion de modificar. -->
            <td><input type="text" name="dni" placeholder="<?= $clienteElegido->dni ?>" required="required"></td>
            <td><?= $clienteElegido->nombre ?></td>
            <td><?= $clienteElegido->direccion ?></td>
            <td><?= $clienteElegido->telefono ?></td>
          </tr>
        </tbody>
      </table>
      <form action="eliminarAccion.php" method="post">
        <input type="hidden" name="dni" disabled="disabled" value="<?= $clienteElegido->dni ?>">
        <a href="../index.php" class="waves-effect waves-light btn">
          <i class="material-icons">undo</i>
        </a>
        <button class="btn waves-effect orange" type="submit">
          <i class="material-icons">mode_edit</i>
        </button>
        <!-- Agregar la accion de eliminar y el boton de volver a la pagina anterior -->
      </form>
    </div>
  </body>
</html>