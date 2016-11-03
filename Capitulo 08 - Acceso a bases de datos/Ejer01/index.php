<html>
  <head>
    <meta charset="UTF-8">
    <title>Mantenimiento de clientes</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/estilo.css"/>
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
    ?>
    
    <h2>Mantenimiento de clientes</h2>
    <table>
      <thead>
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th>Modificar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
        <?php
        // Consulta de datos del cliente
        $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
        
        while ($cliente = $consulta->fetchObject()) {
        ?>
          <tr>
            <td><?= $cliente->dni ?></td>
            <td><?= $cliente->nombre ?></td>
            <td><?= $cliente->direccion ?></td>
            <td><?= $cliente->telefono ?></td>
            <td>
              <form action="modificarFormulario.php">
                <input type="hidden" value="<?= $cliente->dni ?>">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                  <i class="material-icons">mode_edit</i>
                </button>
              </form>
            </td>
            <td>
              <form action="eliminarFormulario.php">
                <input type="hidden" value="<?= $cliente->dni ?>">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                  <i class="material-icons">delete</i>
                </button>
              </form>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
