<?php
try {
  $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
  //echo "Se ha establecido una conexión con el servidor de bases de datos.";

} catch (PDOException $e) {
  //echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
  //echo "Error: " . $e->getMessage();
}

$consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=" . $_POST['dni']);

if ($consulta->rowCount() == 1) {
  $delete = 'DELETE FROM cliente WHERE dni=' . $_POST['dni'];
  //echo $delete;
  
  $conexion->exec($delete);
  
  header("Location: ../index.php");
  
}