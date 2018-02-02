<?php


function conexion($bd_config){
  try {
    $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'], $bd_config['username'], $bd_config['password']);
    return $conexion;
  } catch (PDOException $e) {
    return false;
  }
}

function get_client_ip() {
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

function limpiarDatos($datos){
  $datos = htmlspecialchars($datos);
  $datos = trim($datos);
  $datos = stripslashes($datos);
  $datos = filter_var($datos, FILTER_SANITIZE_STRING);

  return $datos;
}

function limpiarEmail($datos){
  $datos = filter_var($datos, FILTER_SANITIZE_EMAIL);
  return $datos;
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_users($table, $post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM $table ORDER BY id LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtenerUsers($table, $post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM $table WHERE status = 'ACTIVE' ORDER BY id LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function traerDatos($table, $conexion){
  $name = $conexion->prepare("SELECT * FROM $table WHERE email = :email");
  $name->execute([
    ':email' => $_SESSION['email']
  ]);
  return $name->fetch(PDO::FETCH_ASSOC);
}


function contarDatos($table, $conexion){
  $name = $conexion->prepare("SELECT * FROM $table ORDER BY id");
  $name->execute();
  return $name->fetchAll(PDO::FETCH_ASSOC);
}

function contarDatosRequest($table, $conexion, $status){
  $name = $conexion->prepare("SELECT * FROM $table WHERE status = :status ORDER BY id");
  $name->execute([':status' => $status]);
  return $name->fetchAll(PDO::FETCH_ASSOC);
}

function importarDatos($table, $conexion){
  $name = $conexion->prepare("SELECT * FROM $table ORDER BY id DESC");
  $name->execute();
  return $name->fetchAll(PDO::FETCH_ASSOC);
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function usuario_articulo($user){
	return limpiarDatos($user);
}

function obtener_post_por_id($table, $conexion, $get){
	$resultado = $conexion->query("SELECT * FROM $table WHERE id = $get LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_post_por_usuario($conexion, $get){
	$resultado = $conexion->prepare("SELECT * FROM registro WHERE usuario = :usuario LIMIT 1");
  $resultado->execute([
    ':usuario' => $get
  ]);
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_post_por_get($table, $conexion, $id){
	$resultado = $conexion->prepare("SELECT * FROM $table WHERE id = :proveedor LIMIT 1");
  $resultado->execute([
    ':proveedor' => $id
  ]);
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function gananciaUsuario($conexion, $user){
  $username = $conexion->prepare("SELECT * FROM registro WHERE email = $user LIMIT 1");
  $username->execute();
  $username = $username->fetch();
  return $username;
}

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

 ?>
