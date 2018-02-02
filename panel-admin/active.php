<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);

  $id = limpiarDatos($_GET['id']);

  if (!$id) {
    header('Location: '.RUTA.'panel-admin/users.php');
  }

  $status = 'ACTIVE';
  $statement = $conexion->prepare("UPDATE registro SET status = :status WHERE id = $id");
  $statement->execute([
    ':status' => $status
  ]);

  header('Location: '.RUTA.'panel-admin/users.php');
} else {
  header('Location: '.RUTA);
}



 ?>
