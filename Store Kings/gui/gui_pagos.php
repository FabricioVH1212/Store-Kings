<?php 
    include('inc/header.php');
    if(empty($_SESSION["CARRITO"])){
      ?>
    <script> 
        alertify.error("Tiene que añadir elementos al carrito"); 
        setTimeout("location.href='catalogo.php'",1000); 
    </script>
    <?php
    }
?>
    <!-- begin container-centrado -->
    <div class="container centrado" style="position: relative;top:100px;">
        <!-- begin .panel -->
        <div class="panel  panel-inverse">
          <?php echo panel_heading();?>
           <!-- begin panel-body -->
                    <div class="panel-body">
                      <h1 class = "text-center">Detalles de la orden</h1>
                      <!-- begin row -->
                      <div class = "row">
                            <!-- begin col-md-6 -->
                            <div class = "col-md-6">
                                <?php 
                                $estado = "pagos";
                                echo tabla_carrito($estado);?>
                            </div>
                            <!-- end col-md-6 -->
                            <!-- begin col-md-6 -->
                             <div class = "col-md-6 ">
                                <h3 class = "text-center">Detalles de env&iacute;o</h3>
                                <h4 class="text-center"><?=date("d/m/Y h:i A") ?></h4>
                                   <form class = ""  method="POST" enctype="multipart/form-data">
                                    <!-- begin row -->
                                   <div class="row">
                                      <!-- begin col-md-6 -->
                                      <div class = "col-md-6">
                                          <h4 class = "text-left">Ced&uacute;la: <?= $_SESSION["USUARIO"]["CLIENTE"]["CEDULA"]?></h4>
                                          <h4 class = "text-left">Correo: <?=  $_SESSION["USUARIO"]["CLIENTE"]["CORREO"]?></h4>
                                           <h4 class = "text-left">C&oacute;digo Postal: <?=  $_SESSION["USUARIO"]["CLIENTE"]["CODIGO"]?></h4>
                                      </div>
                                      <!-- end col-md-6 -->
                                      <!-- begin col-md-6 -->
                                      <div class = "col-md-6">
                                            <h4 class = "text-left">Nombre: <?= $_SESSION["USUARIO"]["CLIENTE"]["NOMBRE"]?></h4>
                                             <h4 class = "text-left">Tel&eacute;fono: <?=  $_SESSION["USUARIO"]["CLIENTE"]["TELEFONO"]?></h4>
                                              <h4 class = "text-left">Direcci&oacute;n</h4>
                                              <textarea class="form-control"name = "txt_direccion"required></textarea>
                                      </div>
                                      <!-- end col-md-6 -->
                                      <!-- begin col-md-12 -->
                                      <div class = "col-md-12"><br>
                                        <p class = "alert alert-success h5"><strong>Metodos de pago</strong><br>Actualmente contamos con dos formas de pago, dar click para m&aacute;s detalles<br>
                                       </p>
                                        <div class = "float-right">
                                           <a href = "#modal-dialog"class = "btn btn-warning my-2 my-sm-0" data-toggle="modal"><i class = "fa fa-paypal"></i>&nbsp; V&iacute;a paypal</a>
                                        </div>
                                        <div class = "float-left">
                                             <a href = "#modal-dialog1" class = "btn btn-warning my-2 my-sm-0" data-toggle="modal"><i class = "fa fa-phone"></i>&nbsp;<i class = "fa fa-money"></i>&nbsp; Sinpe Movil o Transferencia bancaria</a>
                                        </div>
                                      </div>
                                      <!-- end col-md-12 -->
                                </div>
                                <!-- begin row -->
                          </div>
                          <!-- end col-md-6 -->
                      </div>
                      <!-- end row -->
                     </div>
                     <!-- end panel-body -->
                  <div class="panel-footer bg-dark text-white h4">Store Kings</div>
        </div>
        <!-- end panel -->
    </div>
     <!-- end container -->

  
            <div class="modal fade" id="modal-dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #000000;">
                                <div class = "container centrado">
                                    <?=titulo();?>    
                                </div>
                                <button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" style="background-color: gray;">
                                <!-- begin panel-body -->
                                <div class="panel-body">
                                    <div class="row">  
                                        <div class="col-md-6">
                                            <div class="col-md-6 pay-forms">
                                                <img class="pp-img" src="img/paypal.png"  width = "100" height = "100" alt="Image Alternative text" title="Image Title">
                                                <p class = "alert alert-danger role: 'alert'">Importante: Usted ser&aacute; redireccionado al sitio web de PayPal para completar su pago seguro.</p>
                                                <a class="btn btn-primary">Pago a trav&eacute;s de PayPal</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-6 number-paymk">
                                                    <section class="creditly-wrapper payf_wrapper">
                                                        <div class="credit-card-wrapper">
                                                            <div class="first-row form-group">
                                                                <div class="controls">
                                                                    <label class="control-label">T&iacute;tular de la tarjeta</label>
                                                                    <input class="billing-address-name form-control" type="text" name="name" placeholder="Rodney Herrera">
                                                                </div>
                                                                <div class="paymntf_card_number_grids my-2">
                                                                    <div class="fpay_card_number_grid_left">
                                                                        <div class="controls">
                                                                            <label class="control-label">N&uacute;mero de tarjeta</label>
                                                                            <input class="number credit-card-number-2 form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                                                autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
                                                                        </div>
                                                                    </div>
                                                                    <div class="fpay_card_number_grid_right mt-2">
                                                                        <div class="controls">
                                                                            <label class="control-label">CVV</label>
                                                                            <input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
                                                                        </div>
                                                                    </div>
                                                                    <div class="clear"> </div>
                                                                </div>
                                                                <div class="controls">
                                                                    <label class="control-label">V&aacute;lido hasta</label>
                                                                    <input class="expiration-month-and-year-2 form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                                </div>
                                                            </div>
                                                            <input class="submit" type="submit" name = "btn_paypal"value="Proceder pago">
                                                        </div>
                                                    </section>
                                                    </div>
                                        </div>
                                  </div>   
                                </div> 
                                <!-- end panel-body -->
                            </div>
                            <div class="modal-footer"style="background-color: #000000;">
                                <a href="javascript:;" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
                                <input class="btn btn-warning" type="submit" name = "btn_paypal"value="Realizar pago">
                            </div>
                        </div>
                    </div>
                </div> <!-- end modal -->

                 <div class="modal fade" id="modal-dialog1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #000000;">
                            <div class = "title centrado">
                                <?=titulo();?>    
                            </div>
                            <button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body" style="background-color: gray;">
                            <!-- begin panel-body -->
                            <div class="panel-body">
                               
                               <div class = "row">
                                        <div class = "col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group row m-b-15">
                                                        <img src="img/sinpe.png"  width = "100" height = "100">
                                                        <div class = "alert alert-success role 'alert'">
                                                            <strong>Pasos para realizar transferencia:</strong><br>
                                                            <ol>
                                                                <li>Contar con cuenta de Sinpe-Movil o realizar la transferencia en el banco.</li>
                                                                <li>Realizar la transacci&oacute;n al siguiente n&uacute;mero +506 8532 6146(Sinpe) o a la cuenta BAN 405053305303030.</li>
                                                                <li>Una vez realizada la transacci&oacute;n tomar un screenshot del comprobante y adjuntarlo en formato pdf.</li>
                                                                <li>En caso de no adjuntar el comprobante tambi&eacute;n se puede mandar al n&uacute;mero anteriormente indicado mediante un mensaje de WhatsApp.</li>
                                                                <li>Y por &uacute;ltimo se coordina el env&iacute;o de su producto.</li>
                                                            </ol>
                                                        </div>
                                                    </div>                   
                                                </div>
                                        </div>
                                    <div class = "col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group row m-b-15">
                                                    <label class="col-form-label col-md-12">Adjuntar archivo</label>
                                                    <div class="col-md-12">
                                                         <input type="file" name="file" class="form-control m-b-5"required>
                                                    </div> 
                                                </div>
                                                <div class = "alert alert-danger role 'alert'">
                                                    <strong>Nota:</strong><br>
                                                    La idea de adjuntar la foto del comprobante y dem&aacute;s es para que el sistema realice
                                                    una facturaci&oacute;n propia de la tienda. 
                                                    Por lo tanto no es obligado porque igual se coordina el env&iacute;o pero no va a tener derecho a dicha factura.
                                                </div>              
                                            </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- end panel-body -->
                        </div>
                        <div class="modal-footer"style="background-color: #000000;">
                            <a href="javascript:;" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
                            <input class="btn btn-warning" type="submit" name = "btn_sinpe"value="Proceder pago">
                        </div>
                    </div>
                </div>
            </div><!-- end modal -->
        </form>
