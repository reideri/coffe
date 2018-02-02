<?php
   include 'views/requires/headerDash.php';
?>

    <!-- Main content -->
    <section class="content">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Info boxes -->

      <!-- Main row -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Comparte y monetiza los clics</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a  target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">soporte@coffefit.com</a>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Panel de Usuario</a></li>
                            <li class="active">Notas</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="user" src="https://www.coffefit.com/img/post/17898260-30439310-5-0-1499156570-1499156573-650-1-1499156573-650-0c369e17e2-1499626569.jpg">
                            <div class="white-box">
                                <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> Feb 1</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 10</a></div>
                                <h3 class="m-t-20 m-b-20">No más de 35 Caracteres.</h3>
                                <p>Los psicólogos revelan frases que usa un hombres que ya no ama a su pareja</p>
                                <button class="btn btn-info btn-rounded waves-effect waves-light m-t-20">Compartir</button>
                            </div>
                        </div>

            </div>
            <!-- /.container-fluid -->
    <?php include 'requires/footer.php'?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'footer.php'?>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
