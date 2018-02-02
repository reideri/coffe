<?php session_start();

$conexion = conexion($bd_config);
$statement = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario OR email = :email LIMIT 1');
$statement->execute([
  ':usuario' => $usuario,
  ':email' => $email
]);

 ?>
