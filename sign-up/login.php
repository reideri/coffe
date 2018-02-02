<?php session_start();

$error = '';
if (isset($_POST['ingresar'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  if (empty($username) || empty($pass)) {
    $error .= '<p>Por favor rellene todos los campos</p>';
  } else {
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario AND password = :password');
    $statement->execute([
      ':usuario' => $username,
      ':password' => $pass
    ]);
    $login = $statement->fetch();

    if ($login !== false) {
      $_SESSION['usuario'] = $username;
      header('Location: '.RUTA.'user');
      // echo '<script>location.href="http://localhost/coffefit/user"</script>';
    } else {
      $error .= '<p>Tu usuario y/o contraseña son incorrectos</p>';
    }
  }

  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario AND password = :password');
  $statement->execute([
    ':usuario' => $username,
    ':password' => $pass
  ]);
  $login = $statement->fetch();
}


 ?>
