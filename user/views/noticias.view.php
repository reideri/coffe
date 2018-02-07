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
            <?php foreach ($posts as $post): ?>
                <div class="col-md-6 col-lg-3 col-xs-12 col-sm-6"> <img class="img-responsive" alt="<?php echo $post['titulo']; ?>" src="<?php echo RUTA; ?>img/post/<?php echo $post['thumb']; ?>">
                    <div class="white-box">
                        <!-- <div class="text-muted"><span class="m-r-10"><i class="icon-calender"></i> Feb 1</span> <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 10</a></div>-->
                        <h3 class="m-t-20 m-b-20"><?php echo $post['titulo']; ?></h3>
                        <p><?php echo $post['extracto']; ?></p>
                        <div class="fb-share-button" data-href="<?php echo RUTA.'redirect.php?id='.$post['id'].'&usuario='.$datos['usuario'].'&provider='.$provider['proveedor']; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                        <button class="btn btn-info btn-rounded waves-effect waves-light m-t-20">Compartir</button>
                    </div>
                </div>
            <?php endforeach ?>

            </div>
            <!-- /.container-fluid -->
    <?php include 'requires/footer.php'; ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'footer.php'; ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
