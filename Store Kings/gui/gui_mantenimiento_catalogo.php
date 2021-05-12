<?php include('inc/header.php')?>
  <!-- begin container -->
  <div class="container"style="position: relative;top:100px;">
        <!-- begin panel -->
        <div class="panel  panel-inverse">
             <!-- begin panel-heading -->
               <div class="panel-heading">
                   <h4 class="panel-title">Store Kings || Cat&aacute;logo</h4>
                </div>
             <!-- end panel-heading -->
             <!-- begin alert -->
             <div class="alert alert-secondary fade show"style="height:50px;">
                 <div class="float-left">
                    <a  href="admin_catalogo.php"class="btn btn-sm btn-warning m-r-5"><i class="fa fa-arrow-circle-left col-lg " aria-hidden="true"></i></a>
                 </div>
            </div>
            <!-- end alert -->
             <!-- begin panel-body -->
             <div class="panel-body">
                 <h1 class="text-center">Cat&aacute;logo de productos</h1><hr class="my-4">
                  <!-- begin row -->
                        <div class = "row">
                            <div class="col-md-6">
                               <form action="#"method="POST"enctype="multipart/form-data">
                                  <div class = "row">
                                      <div class = "col-md-3"></div>
                                          <div class="col-md-3">
                                              <div class="card" style="width: 18rem;">
                                                <?php if(isset($_GET["codigoproducto"])){?>
                                                  <img id="uploadPreview1" class="card-img-top" data-src="<?=$imagenProducto?>"style = "max-height : 200px;"alt="Foto del usuario">
                                                  <?php 
                                                      }else{ ?>
                                                  <img id="uploadPreview1" class="card-img-top" data-src="img/StoreKings-logo.jpg"style = "max-height : 200px;"alt="Foto del usuario">
                                                  <?php }?>  
                                                  <div class="card-body">
                                                    <p class="card-text"><b>Seleccione una imagen para el producto</b></p>
                                                    <input class="form-control text-center" id="uploadImage1" type="file" name="file" onchange="previa_imagen(1);"/>
                                                  </div>
                                                </div>
                                          </div>
                                    </div>       
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group row m-b-15" >
                                        <label class="col-form-label col-md-3 , text-white font-weight-bold " >Código del producto:</label>
                                          <div class="col-md-9">
                                            <input type="text"name="txt_CodigoProducto"id="txt_CodigoProducto"class="form-control m-b-5" placeholder="Código del producto"value="<?=$codigoProducto?>" required />
                                          </div>
                                    </div>                    
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3 , text-white font-weight-bold" >Nombre del producto:</label>
                                           <div class="col-md-9">
                                              <input type = "text" class="form-control" name="txt_NombreProducto" id = "txt_NombreProducto" placeholder = "Nombre del producto" value = "<?=$nombreProducto?>" required />
                                          </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3 ,  text-white font-weight-bold">Precio del producto:</label>
                                          <div class="col-md-9">
                                              <input type="number" name="txt_PrecioProducto" id = "txt_PrecioProducto" class="form-control m-b-5" placeholder="Precio del producto:" value = "<?=$precioProducto?>" required />
                                          </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                         <label class="col-form-label col-md-3 text-white font-weight-bold">Descripci&oacute;n del producto:</label>
                                           <div class="col-md-9">
                                              <textarea class="form-control" name="txt_Descripcion" id = "txt_Descripcion" placeholder="Escribe una descripci&oacute;n para el producto" required><?=$dscDescripcion?></textarea>
                                           </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                          <label class="col-form-label col-md-3 text-white font-weight-bold">Tipo de producto:</label>
                                             <div class="col-md-9">
                                               <select name="sel_tipo_producto" id="sel_tipo_producto" class="form-control" required="required">
                                                <option value="NA">-- Seleccione --</option>
                                                   <?php
                                                      while($tipo_producto= mysqli_fetch_assoc($resultado)) {
                                                          $selected = '';
                                                          if($tipo_producto["IDE_PRODUCTO"] == $tipoProducto)
                                                            $selected = "selected = 'selected'";
                                                           ?>
                                                            <option value="<?php echo $tipo_producto["IDE_PRODUCTO"]?>" <?=$selected?>><?php echo $tipo_producto["DSC_PRODUCTO"] ?></option>
                                                           <?php
                                                        }
                                                      ?>
                                                  </select> 
                                              </div>
                                      </div> 
                               </div>
                               <div class = "col-md-12">
                                      <div class = "pull-right">
                                          <a href="admin_catalogo.php" class="btn btn-sm btn-danger">Cancelar</a>
                                          <button type="submit" name="<?= $botton?>" class="btn btn-sm btn-dark m-r-5"><?= $botton?></button>
                                      </div>
                               </div>
                          </form>
                      </div>
                      <!-- end row -->
             </div>
             <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
  <!-- end container -->
     