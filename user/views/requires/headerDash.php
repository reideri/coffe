<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coffefit | Panel de Usuario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Load Facebook SDK for JavaScript -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><span class="fa fa-coffee"></span></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Coffefit</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://www.coffefit.com/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $datos['usuario']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://www.coffefit.com/img/logo.png" class="img-circle" alt="User Image">

                <p>
                   <?php echo $datos['usuario']; ?>
                  <small>!Te damos la bienvenida!</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="log-out.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
                <div class="pull-right">

                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://www.coffefit.com/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $datos['usuario'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Trabajando</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo RUTA.'user'; ?>">
            <i class="fa fa-phone"></i>
            <span>Panel de Control</span>

            </span>
          </a>
        </li>
        <li>
          <a href="noticias.php">
            <i class="fa fa-money"></i>
            <span>Ganar dinero</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">Nuevos</span>
            </span>
          </a>
        </li>
        <li>
          <a href="payment.php">
            <i class="fa fa-paypal"></i> <span>Retirar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">15/11/2017</small>
            </span>
          </a>
        </li>
        <li>
          <a href="http://contact.coffefit.com/">
            <i class="fa fa-phone"></i>
            <span>Contáctanos</span>

            </span>
          </a>
        </li>


  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        +1000 usuarios ganando en Coffefit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Panel</a></li>
        <li class="active">Panel de Usuario</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Visitas</span>
              <span class="info-box-number"><?php echo $datos['clics']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingresos</span>
              <span class="info-box-number"><?php echo '$ '.$datos['ingreso']; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-external-link"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Post</span>
              <span class="info-box-number"><?php echo count($posts); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-life-bouy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Contacto</span>
              <span class="info-box-number"><a href="https://www.facebook.com/groups/1908508282731862/">Soporte</a></span>
            </div>


            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      <!-- /.row -->

      <!-- Main row -->
