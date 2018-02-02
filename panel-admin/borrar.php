<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);

  $id = limpiarDatos($_GET['id']);

  if (!$id) {
    header('Location: '.RUTA.'panel-admin/public.php');
  }

  $statement = $conexion->prepare('DELETE FROM post WHERE id = :id');
  $statement->execute([
    'id' => $id
  ]);

  header('Location: '.RUTA.'panel-admin/public.php');
} else {
  header('Location: '.RUTA);
}



 ?>
