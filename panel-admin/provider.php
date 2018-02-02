<?php

$success = '';
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['provider'])) {
  $proveedor = $_POST['proveedor'];

  if (empty($proveedor)) {
    $errores .= 'Agrega un proveedor';
  } else {
    $provider = $conexion->prepare('SELECT * FROM provider WHERE proveedor = :proveedor');
    $provider->execute([
      ':proveedor' => $proveedor
    ]);
    $provFind = $provider->fetch();

    if ($provFind != false) {
      $errores .= 'Este proveedor ya fue registrado';
    }
  }

  if ($errores == '') {
    $provider = $conexion->prepare('INSERT INTO provider (id, proveedor) VALUES (null, :proveedor)');
    $provider->execute([
      ':proveedor' => $proveedor
    ]);

    $success = true;
  }
}

 ?>
