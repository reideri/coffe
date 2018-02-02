<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

$error = '';
if (isset($_POST['ingresar'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  if (empty($username) || empty($pass)) {
    $error .= '<p>Por favor rellene todos los campos</p>';
  }

  if ($username == $user_coffefit['usuario'] && $pass == $user_coffefit['password']) {
    $_SESSION['usuario'] = $username;
    header('Location: '.RUTA.'panel-admin');
  }
}

require 'views/index.view.php';

 ?>
