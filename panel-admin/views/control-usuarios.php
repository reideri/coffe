<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coffefit - Panel de Control</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="assets/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="assets/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Feature detection -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <?php require 'views/requires/header.php'; ?>
        <!--sidebar left start-->
        <?php require 'views/requires/aside.php'; ?>
        <?php
          $style = '
            width: 20px;
            height: 20px;
            display: flex;
            padding: 0;
            color: #fff;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            align-content: center
          '
         ?>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
              <div class="col-sm-12">

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Tabla de control de usuarios</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                          </div>
                          <div class="panel-body">

                            <div class="table-responsive">
                              <?php if (empty($usuarios)): ?>
                                <p>No hay usuarios registrados</p>
                              <?php else: ?>
                                <table class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th style="width: 150px; overflow:hidden;">Usuario</th>
  				                            <th style="width: 150px; overflow:hidden;">Email</th>
                                      <th>Clics totales</th>
                                      <th>Ganancias Totales</th>
                                      <th>Estado</th>
                                      <th></th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($usuarios as $usuario): ?>
                                      <tr>
                                        <td><?php echo $usuario['id']; ?></td>
                                        <td style="width: 150px; overflow:hidden;"><?php echo $usuario['usuario']; ?></td>
                                        <td style="width: 150px; overflow:hidden;"><?php echo $usuario['email']; ?></td>
                                        <td><?php echo $usuario['clics']; ?></td>
                                        <td><?php echo $usuario['ingreso']; ?></td>
                                        <td><?php echo $usuario['status']; ?></td>
                                        <?php if ($usuario['status'] == 'DISABLED'): ?>
                                          <td><a href="<?php echo 'active.php?id='.$usuario['id']; ?>" class="btn btn-primary" style="<?php echo $style; ?>"><i class="fa fa-check" aria-hidden="false"></i></a></td>
                                        <?php else: ?>
                                          <td><a href="<?php echo 'banned.php?id='.$usuario['id']; ?>" class="btn btn-warning" style="<?php echo $style; ?>"><i class="fa fa-times" aria-hidden="false"></i></a></td>
                                        <?php endif; ?>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>
                              <?php endif; ?>
                            </div>



                    </div>
                </div>
               </div>

               <?php require 'paginacion.php'; ?>
             </section>
           </section>
        <!--main content end-->
    <!--Global JS-->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="assets/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/js/jquery.flot.example.js"></script>
    <!-- Morris  -->
    <script src="assets/plugins/morris/js/morris.min.js"></script>
    <script src="assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="assets/plugins/todo/js/todos.js"></script>
    <!--Load these page level functions-->
    <script>
        $(document).ready(function() {
            app.timer();
            app.map();
            app.weather();
            app.morrisPie();
        });
    </script>
           <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46627904-1', 'authenticgoods.co');
        ga('send', 'pageview');

</script>


<script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyD0ydqaOHAbteLsEUqxUwEWVmd1Ca6Fu_c",
    authDomain: "coffefit-2017.firebaseapp.com",
    databaseURL: "https://coffefit-2017.firebaseio.com",
    projectId: "coffefit-2017",
    storageBucket: "",
    messagingSenderId: "776868177252"
  };
  firebase.initializeApp(config);
</script>

</body>

</html>
