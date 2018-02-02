<?php session_start();
require 'admin/config.php';
require 'develop/functions.php';


session_destroy();

header('Location: '.RUTA.'sign-up');

 ?>
