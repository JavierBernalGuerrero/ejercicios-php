<html>
  <head>
    <meta charset="UTF-8">
    <title>Mantenimiento de clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="../css/estilo.css"/>
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
    
    // LA PAGINACION NO FUNCIONA CORRECTAMENTE
    if (isset($_GET['indicePaginacion'])) {
      $limiteConsultas = $conexion->query('SELECT COUNT(*) FROM cliente') - 1;
      switch ($_GET['indicePaginacion']) {
        case 'first':
          $_SESSION['indicePaginacion'] = 0;
          break;
        case 'back':
          if ($_SESSION['indicePaginacion'] - 5 >= 0) {
            $_SESSION['indicePaginacion'] -= 5;
            
          } else {
            $_SESSION['indicePaginacion'] = 0;
          }
          break;
        case 'next':
          if ($_SESSION['indicePaginacion'] + 5 <= $limiteConsultas) {
            $_SESSION['indicePaginacion'] += 5;
            
          } else {
            $_SESSION['indicePaginacion'] = $limiteConsultas - $_SESSION['indicePaginacion'] + 5;
          }
          break;
        case 'last':
          $_SESSION['indicePaginacion'] = $limiteConsultas - $_SESSION['indicePaginacion'] + 5;
          break;
      }
      
    } else {
      $_SESSION['indicePaginacion'] = 0;
      
    }
    ?>
    
    <h2>Mantenimiento de clientes</h2>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "dniRepetido") {
          echo '<h5 id="error">Error: El DNI introducido ya existe en la base de datos.</h5>';
          
        } else if ($_GET['error'] == "dniNoEncontrado") {
          echo '<h5 id="error">No existe ningun cliente con ese DNI.</h5>';
        }
      }
    ?>
    <h4>Listado</h4>
    <div id="paginacion">
      <a href="index.php?indicePaginacion=last" class="waves-effect waves-light btn">
        <i class="material-icons">last_page</i>
      </a>
      <a href="index.php?indicePaginacion=next" class="waves-effect waves-light btn">
        <i class="material-icons">keyboard_arrow_right</i>
      </a>
      <a href="index.php?indicePaginacion=back" class="waves-effect waves-light btn">
        <i class="material-icons">keyboard_arrow_left</i>
      </a>
      <a href="index.php?indicePaginacion=first" class="waves-effect waves-light btn">
        <i class="material-icons">first_page</i>
      </a>
    </div>
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
      <tfoot>
        <tr>
          <form action="paginas/insertarAccion.php" method="post">
            <td>
              <input type="text" name="dni" placeholder="DNI..." required="required" autofocus="autofocus">
            </td>
            <td>
              <input type="text" name="nombre" placeholder="Nombre..." required="required">
            </td>
            <td>
              <input type="text" name="direccion" placeholder="Direccion..." required="required">
            </td>
            <td>
              <input type="text" name="telefono" placeholder="Telefono..." required="required">
            </td>
            <td colspan="2">
              <button class="btn waves-effect waves-light" type="submit">
                <i class="material-icons">add</i>
              </button>
            </td>
          </form>
        </tr>
      </tfoot>
      <tbody>
        <?php
        // Consulta de datos del cliente
        $consulta = $conexion->query('SELECT dni, nombre, direccion, telefono '
                                    . 'FROM cliente LIMIT ' . $_SESSION['indicePaginacion'] . ', 5');
        
        while ($cliente = $consulta->fetchObject()) {
        ?>
          <tr>
            <td><?= $cliente->dni ?></td>
            <td><?= $cliente->nombre ?></td>
            <td><?= $cliente->direccion ?></td>
            <td><?= $cliente->telefono ?></td>
            <td>
              <form action="paginas/modificarFormulario.php" method="post">
                <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                <button class="btn waves-effect orange" type="submit">
                  <i class="material-icons">mode_edit</i>
                </button>
              </form>
            </td>
            <td>
              <form action="paginas/eliminarFormulario.php" method="post">
                <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                <button class="btn waves-effect red" type="submit">
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
    <footer>
      <p><i class="material-icons">copyright</i> Javier Bernal Guerrero</p>
    </footer>
  </body>
</html>
