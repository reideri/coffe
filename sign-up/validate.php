<?php

require '../admin/config.php';
require '../develop/functions.php';

$conexion = conexion($bd_config);

$user = limpiarDatos($_GET['user']);
$TOKEN = limpiarDatos($_GET['rqst']);
$code = '71f3ff0c3d4d4mr1fn0c47n3uc0d4r751g3r01r4u5u';

$state = obtener_post_por_usuario($conexion, $user);
$state = $state[0];
$id = $state['id'];

if (!$user || $TOKEN != $code || $state['status'] != 'INACTIVE') {
  header('Location: '.RUTA.'sign-up');
}


$status = 'ACTIVE';
$statement = $conexion->prepare("UPDATE registro SET status = :status WHERE id = $id");
$statement->execute([
  ':status' => $status
]);

require 'views/validate.view.php';

 ?>
