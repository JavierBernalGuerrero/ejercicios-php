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
      <form action="modificarAccion.php" method="post">
        <input type="text" name="dni" disabled="disabled" value="<?= $clienteElegido->dni ?>" required="required">
        <input type="hidden" name="dni" value="<?= $clienteElegido->dni ?>">
        <input type="text" name="nombre" placeholder="Nombre..." value="<?= $clienteElegido->nombre ?>" required="required" autofocus="autofocus">
        <input type="text" name="direccion" placeholder="Direccion..." value="<?= $clienteElegido->direccion ?>" required="required">
        <input type="text" name="telefono" placeholder="Telefono..." value="<?= $clienteElegido->telefono ?>" required="required">

        <br>

        <a href="../index.php" class="waves-effect waves-light btn">
          <i class="material-icons">undo</i>
        </a>
        <button class="btn waves-effect orange" type="submit">
          <i class="material-icons">mode_edit</i>
        </button>
        
      </form>
    </div>
  </body>
</html>