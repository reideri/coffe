<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <?php require 'views/requires/head.php'; ?>
</head>

<body>
    <section id="container">
      <?php require 'views/requires/header.php'; ?>

        <!--sidebar left end-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li>
                        <a href="<?php echo RUTA.'user'; ?>"><i class="fa fa-dashboard"></i><span>Panel</span></a>
                    </li>

                    <li class="sub-menu">
                        <a href="noticias.php"><i class="fa fa-table"></i><span>Noticias</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="payment.php"><i class="fa fa-usd"></i><span>Retirar </span></a>
                    </li>

                    <li class="active">
                        <a><i class="fa fa-comment"></i><span>Contacto </span></a>
                    </li>
                </ul>
            </div>

        </aside>
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">
                <!--tiles start-->
                <div class="row">
                    <div class="col-md-6">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Contactar a Coffefit</h3>
                            <div class="actions pull-right">
                              <i class="fa fa-chevron-down"></i>
                              <i class="fa fa-times"></i>
                            </div>
                        </div>
                                            <div class="panel-body">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tu correo</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Asunto</label>
                                                        <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>¿Que mensaje tienes para Coffefit?</label>
                                            <textarea class="form-control" name="mensaje" id="input13" placeholder="Hola, ...." style="height: 200px; resize: none"></textarea>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                    </div>
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
