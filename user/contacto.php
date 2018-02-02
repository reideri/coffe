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
    $posts = contarDatos('post', $conexion);

    // Iniciamos Formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $asunto = $_POST['asunto'];
      $mensaje = $_POST['mensaje'];

      $errores = '';

      if (empty($email) || empty($asunto) || empty($mensaje)) {
        $errores .= 'Por favor ingrese todos los datos';
      } else {
        if ($email != $datos) {
          $errores .= 'Por favor escribe tu correo de registro';
        }
      }

      if ($errores == '') {
        # code...
      }



    }




    require 'views/index.view.php';
  }
} else {
  header('Location: '.RUTA.'sign-up');
}

 ?>
