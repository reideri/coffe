<?php
   include 'views/requires/headerDash.php';
?>
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Monedero</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a  target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">soporte@coffefit.com</a>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Panel de Usuario</a></li>
                            <li class="active">Monedero</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                  <div class="col-md-12 col-lg-4 col-sm-12">
                        <div class="panel wallet-widgets">
                            <div class="panel-body">
                                <ul class="side-icon-text">
                                    <li><a href="#"><span class="circle circle-md bg-success di vm"><i class="ti-plus"></i></span><span class="di vm"><h1 class="m-b-0">$0</h1><h5 class="m-t-0"></h5></span></a></li>
                                    <p>Pagar a {CORREO PAYPAL}</p>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="white-box">
                            <h3 class="box-title">Información de cobros</h3>
                            <!-- sample modal content -->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myLargeModalLabel">Requisitos antes de emitir un cobro.</h4> </div>
                                        <div class="modal-body">
                                            <h4>Aviso ante la violación de nuestros terminos y condiciones...</h4>
                                            <p>Ten en cuenta que nosotros antes de pagar a un usuario, primero nos tomamos todo el tiempo necesario para verificar que el usuario esta cumpliendo y siguiendo nuestros <a>Terminos y condiciones</a>, de lo contrario el usuario sera enviado a revisión y su pago sera anulado.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <!-- /.modal -->
                            <!-- Button trigger modal -->
        <button class="btn btn-block btn-info" alt="default" data-toggle="modal" data-target=".bs-example-modal-lg">Ver</button>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                          <h3 class="box-title m-b-0">Realizar un cobro</h3>
                            <div id="exampleValidator" class="wizard">
                                <form id="validation" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="wizard-content">
                                        <div class="wizard-pane" role="tabpanel" aria-expanded="false">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Saldo a retirar</label>
                                                <div class="col-xs-5">
                                                    <center><h3>{SALDO}</h3></center>
                                            </div>
                                        </div>
                                        <div class="wizard-pane active" role="tabpanel" aria-expanded="true">
                                            <div class="form-group">
                                                <label class="col-xs-3 control-label">Se pagara a</label>
                                                <div class="col-xs-5">
                                                  <center><h3>{CORREO}<small style="color: #427df4;"> Via Paypal</small></h3></center>
                                            </div>
                                        </div>
                                        <div class="wizard-pane" role="tabpanel" aria-expanded="false">

                                        </div>
                                    </div>
                                </form>
                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Disponible los 21 de cada mes.</button>
                        </div>
                    </div>
                </div>

            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->
    </div>
    <?php include 'requires/footer.php'?>
    <!-- /#wrapper -->
    <!-- jQuery -->
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
