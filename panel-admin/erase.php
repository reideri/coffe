<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

  $conexion = conexion($bd_config);

  $id = limpiarDatos($_POST['id']);

  $statement = $conexion->prepare("DELETE FROM solicitud WHERE id = :id");
  $statement->execute([
    ':id' => $id
  ]);

 ?>
