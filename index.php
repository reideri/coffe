<?php session_start();

require 'develop/functions.php';
require 'admin/config.php';

if (isset($_SESSION['email'])) {
  header('Location: '.RUTA.'user/');
}
require 'views/index.view.php';

 ?>
