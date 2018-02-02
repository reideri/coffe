<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

if (isset($_SESSION['email'])) {
  $conexion = conexion($bd_config);

  // obtener los datos
  $datos = traerDatos('registro', $conexion);


  if ($datos['status'] == 'DISABLED') {
    session_destroy();
    header('Location: '.RUTA.'banned.php');
  } elseif ($datos['status'] == 'INACTIVE') {
    header('Location: '.RUTA.'sign-up/confirm.php');
  } else {
    // obtener datos de los post
    $ip = get_client_ip();
    if ($datos['ip'] == 'NULL') {
      $ips = $conexion->prepare("UPDATE registro SET ip = :ip WHERE email = :email");
      $ips->execute([
        ':ip' => $ip,
        ':usuario' => $_SESSION['email']
      ]);
    }


    $posts = contarDatos('post', $conexion);
    require 'views/faqs.view.php';
  }
} else {
  header('Location: '.RUTA.'sign-up');
}

 ?>
