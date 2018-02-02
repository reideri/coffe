<?php

require 'admin/config.php';
require 'develop/functions.php';

$conexion = conexion($bd_config);
$id = id_articulo($_GET['id']);
$user = usuario_articulo($_GET['usuario']);
$provider = id_articulo($_GET['provider']);
$post = contarDatos('post', $conexion);
$ip = get_client_ip();


// Datos de visita
$visita = $conexion->prepare('UPDATE registro SET visit = visit+1 WHERE usuario = :usuario');
$visita->execute([
  ':usuario' => $user
]);

$visit = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario');
$visit->execute([
  ':usuario' => $user
]);
$visited = $visit->fetch();
$visited = $visited['visit'];

$counter = $visited % 3;

print_r($counter);

$post = $post[0];
// comprobar si hay URL GET con ID y Registro
$id_noticia = obtener_post_por_id('post', $conexion, $id);
$user_noticia = obtener_post_por_usuario($conexion, $user);



$id_noticia = $id_noticia[0];
$user_noticia = $user_noticia[0];
// print_r($user_noticia['usuario']);

$proveedor = obtener_post_por_get('provider', $conexion, $provider);
$proveedor = $proveedor[0];

$provide = $proveedor['id'];


if (!$id_noticia || $user_noticia['usuario'] != $user) {
  header('Location: '.RUTA);
}


// if ($ip == $user_noticia['ip'] || $ip == 'NULL') {
//   // header('Location: '.$id_noticia['URL']);
// }


  if ($user == $user_noticia['usuario'] && !empty($id_noticia)) {
    $proveedorClics = $conexion->prepare("UPDATE provider SET clics = clics+1 WHERE id = $provide");
    $proveedorClics->execute();
    if ($counter == 0) {
      $id_user = $user_noticia['id'];
      // Contador
      $contador = $conexion->prepare("UPDATE registro SET clics = clics+1 WHERE id = $id_user");
      $contador->execute();

      $clics = $conexion->prepare('SELECT * FROM registro WHERE usuario = :usuario');
      $clics->execute([
        ':usuario' => $user
      ]);
      $clic = $clics->fetch();

      // ganancia en dolares
      $ganancia = ($clic['clics'] * 0.80) / 1000;

      // ganancia
      $ingreso = $conexion->prepare("UPDATE registro SET ingreso = $ganancia WHERE usuario = :usuario");
      $ingreso->execute([
        ':usuario' => $user
      ]);

      header('Location: '.$id_noticia['URL']);
    } else {
      if ($user == $user_noticia['usuario'] && !empty($id_noticia)) {
        header('Location: '.$id_noticia['URL']);
      }
    }
} else {
  header('Location: '.RUTA);
}




 ?>
