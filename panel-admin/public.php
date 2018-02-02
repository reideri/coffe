<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);

  // traer Posts
  $posts = contarDatos('post', $conexion);

  require 'views/public.view.php';
} else {
  header('Location: '.RUTA);
}


 ?>
