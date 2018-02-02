<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {

  $status = 'INACTIVE';
  $conexion = conexion($bd_config);

  $registros = contarDatosRequest('registro', $conexion, $status);


  require 'views/index.view.php';
} else {
  header('Location: '.RUTA);
}


 ?>
