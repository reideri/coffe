<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['email'])) {
  header('Location: '.RUTA.'user');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = limpiarDatos(strtoupper($_POST['nombre']));
  $usuario = limpiarDatos(strtoupper($_POST['usuario']));
  $password = limpiarDatos($_POST['password']);
  $email = limpiarEmail($_POST['email']);
  $pages = $_POST['pages'];
  $thumb = $_FILES['thumb']['tmp_name'];
  $status = 'INACTIVE';
  $ip = get_client_ip();

  $archivo_subido = '../' . $new_config['img_registro'] . $_FILES['thumb']['name'];
  move_uploaded_file($thumb, $archivo_subido);

  $errores = '';

  if (empty($nombre) || empty($usuario) || empty($password) || empty($email) || empty($pages) || empty($thumb) ||!isset($_REQUEST['terminos'])) {
    $errores .= '<p>Por favor rellena todos los campos</p>';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores .= '<p>Por favor ingresa un E-mail valido</p>';
  } else {
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario OR email = :email LIMIT 1');
    $statement->execute([
      ':usuario' => $usuario,
      ':email' => $email
    ]);
    $resultado = $statement->fetch();

    if ($resultado != false) {
      $errores .= '<p>Este usuario y/o este E-mail ya existen</p>';
    }
  }

  if ($errores == '') {
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('INSERT INTO registro (id, nombre, usuario, password, email, pages, thumb, status, ip)
    VALUES(null, :nombre, :usuario, :password, :email, :pages, :thumb, :status, :ip)');
    $statement->execute([
      ':nombre' => $nombre,
      ':usuario' => $usuario,
      ':password' => $password,
      ':email' => $email,
      ':pages' => $pages,
      ':thumb' => $_FILES['thumb']['name'],
      ':status' => $status,
      ':ip' => $ip
    ]);

    header('Location: '.RUTA.'sign-up/confirm.php');
  }


}
require 'views/index.view.php';

 ?>
