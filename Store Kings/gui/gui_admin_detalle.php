<?php include('inc/header.php');?>
            <!-- begin container -->
            <div class = "container"style="position: relative;top:150px;">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                        <div class="alert alert-secondary fade show"style="height:50px;">
                              <div class="float-left">
                                  <a href="admin_index.php"class="btn btn-warning"><i class="fa fa-arrow-circle-left col-lg"aria-hidden="true"></i></a>
                              </div>
                               <div class = "float-right">
                                  <input type="submit"class="btn btn-xl btn-warning m-r-5"name="Guardar"value="Guardar Factura" onclick= "return imprimir_factura('imp');"> 
                              </div>
                        </div>
                        <!-- begin panel-body -->
                       <div class="panel-body text-dark"id="imp">
                              <?php
                                 $null = true;
                                   if($res_factura){
                                      while ($factura = mysqli_fetch_assoc($res_factura)) {
                                        if($factura["IDE_FACTURA"] != ''){
                                          $null = false;?>
                                         <div class="row ">
                                            <div class="mt-1 col-3">
                                                <img class="img-thumbnail"src="img/StoreKings-logo.jpg"width="150px"height="150px">
                                                <h4>FACTURA</h4>
                                                <h4><?=$factura["IDE_FACTURA"];?></h4>
                                            </div>
                                            <div class="mt-2 col-9 h5">
                                                <h1>Store Kings</h1>
                                                <p>11101 Coronado. San Jos&eacute;, Costa Rica</p>
                                                <p>wwww.storekings.com | storekings01@gmail.com | +506 7004-0300 / 8532-6146</p>
                                            </div>
                                         </div>
                                         <div class="row centrado text-left h5">
                                            <div class ="col"></div>
                                            <div class="col">
                                                <span><b>Fecha y hora de emisi&oacute;n:</b><br><?=$factura["FEC_FACTURACION"];?></span><br><br>
                                                <span><b>Moneda:</b>&nbsp;&nbsp;CRC ₡</span><br><br>
                                                <span><b>Comprobante:</b><?= ('<div class="alert alert-success" role="alert">Archivo almacenado satisfactoriamente <a href="'.$factura["DSC_ARCHIVO"].'" target = "_BLANK" rel="nofollow">Archivo</a></div>');?></span>
                                            </div>
                                            <div class ="col"></div>
                                            <div class="col">
                                                <span>Cuenta por:</span><br>
                                                <span class="font-weight-bold"><?=$factura["DSC_NOMBRE"]." ".$factura["DSC_APELLIDOS"];?></span><br>
                                                <span><?=$factura["DSC_DIRECCION"];?></span><br>
                                                <span><?=$factura["NUM_TELEFONO"];?></span><br>
                                                <span><?=$factura["DSC_CORREO"];?></span><br>
                                                <span><?=$factura["NUM_IDENTIFICACION"];?></span>
                                            </div>
                                         </div><hr>
                                          <?php
                                                 }
                                              }
                                            }?>
                                          <table class="table table-striped table-bordered table-hover table-dark text-dark table-responsive">
                                              <thead >
                                                <tr>
                                                   <th></th>
                                                   <th class="font-weight-bold"scope="col">Art&iacute;culo</th>
                                                   <th class="font-weight-bold"scope="col">Cantidad</th>
                                                   <th class="font-weight-bold"scope="col">Precio</th>
                                                   <th class="font-weight-bold"scope="col">Descripci&oacute;n</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              <?php
                                                  $null = true;
                                                  $subtotal = 0;
                                                  $i = 1;
                                                  if($res_detalle){
                                                    while($detalle=mysqli_fetch_assoc($res_detalle)) {
                                                      if($detalle["IDE_FACTURA"]!=''){
                                                        $null = false;?>
                                                        <tr>
                                                          <td width="1%"class="f-s-600 text-inverse"><?=$i++;?></td>
                                                          <td><?=$detalle["DSC_CODIGO"] ." - ".$detalle["DSC_NOMBRE"];?></td>
                                                          <td><?=$detalle["NUM_CANTIDAD"];?></td>
                                                          <td><?="₡ ".$detalle["NUM_PRECIO"];?></td>
                                                          <td><?=$detalle["DSC_DESCRIPCION"];?></td>
                                                          </tr>  
                                                          <?php
                                                          $subtotal=$subtotal + ($detalle["NUM_CANTIDAD"] * $detalle["NUM_PRECIO"]);
                                                          $IVA = 13*$subtotal/100;
                                                          $total= $subtotal + $IVA;
                                                                }
                                                              }
                                                            }?>         
                                                         </tbody>
                                                     </table> 
                                                <div class="row centrado">
                                                    <div class ="col"></div>
                                                    <div class ="col"></div>
                                                    <div class ="col">
                                                      <div class="text-left h5">
                                                        <span>Subtotal: &nbsp;&nbsp;&nbsp;<?= " ₡ ".number_format($subtotal).".00"?></span><br>
                                                        <span>Impuesto: (13%)</span><br><hr class="bg-dark">
                                                        <span>TOTAL: &nbsp;&nbsp;&nbsp;<?= " ₡ ".number_format($total).".00"?></span><br>
                                                      </div>
                                                    </div>
                                                </div><hr>
                                      </div> 
                                      <!-- end panel-body -->
                                  </div>
                                  <!-- end panel -->
                          </div>
            <!-- end container -->
