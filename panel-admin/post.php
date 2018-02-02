<?php session_start();

require '../admin/config.php';
require '../develop/functions.php';

if (isset($_SESSION['usuario'])) {


  $conexion = conexion($bd_config);
  $proveedores = contarDatos('provider', $conexion);
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $titulo = limpiarDatos($_POST['titulo']);
    $descripcion = limpiarDatos($_POST['descripcion']);
    $enlace = $_POST['url'];
    $thumb = $_FILES['thumb']['tmp_name'];
    $promotor = $_POST['promotor'];

    $archivo_subido = '../' . $new_config['img_folder'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $archivo_subido);

    $statement = $conexion->prepare('INSERT INTO post (id, titulo, extracto, thumb, URL, proveedor)
    VALUES (null, :titulo, :extracto, :thumb, :url, :proveedor)');
    $statement->execute([
      ':titulo' => $titulo,
      ':extracto' => $descripcion,
      ':thumb' => $_FILES['thumb']['name'],
      ':url' => $enlace,
      ':proveedor' => $promotor
    ]);

    header('Location: '.RUTA.'panel-admin/public.php');
  }


  require 'provider.php';
  require 'views/post.view.php';
} else {
  header('Location: '.RUTA);
}
