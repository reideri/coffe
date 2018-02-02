<?php

function conexion(){
  $server="localhost";
  $name="root";
  $pwd="";
  $namedatabase="coffefit";
  $Sql = mysqli_connect($server,$name,$pwd,$namedatabase);
  if($Sql){
    echo "Bien, se conecto con exito";
  }
  else{
    return die("Error al conectar con la base de datos");
  }
}

?>
