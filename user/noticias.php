<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

if (isset($_SESSION['email'])) {
  $conexion = conexion($bd_config);

  // Traer Datos
  $datos = traerDatos('registro', $conexion);
  if ($datos['status'] == 'DISABLED') {
    session_destroy();
    header('Location: '.RUTA.'banned.php');
  } elseif ($datos['status'] == 'INACTIVE') {
    header('Location: '.RUTA.'sign-up/confirm.php');
  } else {
    // traer Posts
    $posts = importarDatos('post', $conexion);
    $provider = importarDatos('post', $conexion);
    $provider = $provider[0];
    $proveedor = obtener_post_por_get('provider', $conexion, $provider['proveedor']);
    $proveedor = $proveedor[0];

    require 'views/noticias.view.php';
  }
} else {
  header('Location: '.RUTA);
}


 ?>
