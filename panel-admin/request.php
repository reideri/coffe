<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);
  $id_articulo = id_articulo($_GET['id']);

  if (empty($id_articulo)) {
    header('Location: '.RUTA.'panel-admin');
  }

  $usuario = obtener_post_por_id('registro', $conexion, $id_articulo);
  $usuario = $usuario[0];

  if (!$usuario) {
    header('Location: '.RUTA.'panel-admin');
  }

  require 'views/request.view.php';
} else {
  header('Location: '.RUTA);
}

 ?>
