<?php session_start();

require '../develop/functions.php';
require '../admin/config.php';

if (isset($_SESSION['email'])) {
  header('Location: '.RUTA.'user/');
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  if (empty($email) || empty($pass)) {
    $error .= '<p>Por favor rellene todos los campos</p>';
  } else {
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('SELECT * FROM registro WHERE email = :email AND password = :password');
    $statement->execute([
      ':email' => $email,
      ':password' => $pass
    ]);
    $login = $statement->fetch();

    if ($login !== false) {
      $_SESSION['email'] = $email;
      header('Location: '.RUTA.'user');
    } else {
      $error .= '<p>Tu usuario y/o contraseña son incorrectos</p>';
    }
  }
}


require 'views/index.view.php';

 ?>
