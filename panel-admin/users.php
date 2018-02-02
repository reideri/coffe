<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {
  $conexion = conexion($bd_config);
  $usuarios = obtenerUsers('registro', $dates_config['pages'], $conexion);


  require 'views/control-usuarios.php';
} else {
  header('Location: '.RUTA);
}




 ?>
