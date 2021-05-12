<link rel = "stylesheet" href = "css/css_login.css">
    <img data-src="img/Storekings.png" class = "login-box" height="200px;" width="300px;">
    <!-- begin login-box -->
    <div class="login-box">
          <i class="flag-icon flag-icon-cr flag-icon-squared"></i>
          <h1>Ingrese aqu&iacute;</h1>
          <form id="formlg" action = "index.php" method="POST">
            <!-- USERNAME INPUT -->
            <label for="num_ide">N&uacute;mero de identificaci&oacute;n</label>
            <input type="text" placeholder="Ingrese su ced&uacute;la" name = "txt_num_ide" id = "txt_num_ide" >
            <!-- PASSWORD INPUT -->
            <label for="password">Contrase&ntilde;a</label>
            <input type="password" placeholder="Ingrese la contrase&ntilde;a" name="txt_contrasena" id="txt_contrasena" >
            <input type="submit" class="botonlg" name="btn_ingresar" onclick="return validar_datos('login')" value="Ingresar">
            <a href="#modal-dialog" data-toggle="modal">¿Perdi&oacute; su contrase&ntilde;a?</a>
            <a href="registro.php">¿No tiene una cuenta?</a>
        </form>
    </div>
    <!-- end login-box -->

 <!--Modal recuperación-->
 <div class="modal fade" id="modal-dialog">
                <!-- begin modal-dialog -->
                <div class="modal-dialog modal-lg">
                    <!-- begin moda-content -->
                    <div class="modal-content">
                        <!-- begin modal-header -->
                        <div class="modal-header" style="background-color: #000000;">
                            <?= titulo();?>
                            <button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <!-- end modal-header -->
                        <!-- begin modal-body -->
                        <div class="modal-body bg-grey-darker" >
                            <!-- begin panel-body -->
                            <div class="panel-body">
                                <h4 class="text-center">Recuperar contrase&ntilde;a</h4>
                                <form class="form-horizontal form-bordered">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label" for="txt_num_ide">N&uacute;mero de identificaci&oacute;n</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" placeholder="N&uacute;mero de identificaci&oacute;n" name="txt_num_ide" id="txt_num_ide"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label" for="datepicker-default">Correo electr&oacute;nico</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" placeholder="Correo electr&oacute;nico" name="txt_correo"id="txt_correo"/>
                                        </div>
                                    </div>
                                </form>
                            </div> 
                            <!-- end panel-body -->
                        </div>
                        <!-- end modal-body -->
                        <!-- begin modal-footer -->
                        <div class="modal-footer"style="background-color: #000000;">
                            <a href="javascript:;" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
                            <button class="btn btn-warning" name="recuperar" onclick="return validar_datos('recupera_contrasena')">Cambiar</button>
                        </div>
                        <!-- end modal-footer -->
                    </div>
                    <!-- end modal-content -->
                </div>
                <!-- end modal-dialog -->
 </div><!--Modal recuperación-->