<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

if (isset($_SESSION['email'])) {
  $conexion = conexion($bd_config);
  $datos = traerDatos('registro', $conexion);

  if ($datos['status'] == 'DISABLED') {
    session_destroy();
    header('Location: '.RUTA.'banned.php');
  } elseif ($datos['status'] == 'INACTIVE') {
    header('Location: '.RUTA.'sign-up/confirm.php');
  } else {
    $posts = contarDatos('post', $conexion);
    if ($datos['ingreso'] < 20) {
      header('Location: '.RUTA);
    }
  }


  require 'views/payment.view.php';
} else {
  header('Location: '.RUTA.'sign-up');
}




 ?>
