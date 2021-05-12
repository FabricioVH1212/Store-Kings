<link rel="stylesheet" type="text/css" href="css/css_admin_index.css">
<?php include('inc/header.php');?>
    <!-- begin container-centrado -->
    <div class="container centrado" style="position: relative;top:100px;">
        <!-- begin panel -->
        <div class="panel  panel-inverse">
          <?php echo panel_heading();?>
           <!-- begin panel-body -->
            <div class="panel-body">
                <h1 class = "text-white">Cat&aacute;logo de productos</h1>
                    <!-- begin container -->
                   <div class = "container" style=" display: flex; flex-wrap: wrap;">
                   <?php $null = true;
                      if($res_productos){
                       while ($productos = mysqli_fetch_assoc($res_productos)) {
                         if($productos["DSC_CODIGO"] != ''){
                          $null = false;?>
                          <!-- begin row -->
                          <div class = "row align-items-start">
                             <!-- begin col -->
                             <div class = "col">
                              <form method="post"action="<?= $_SERVER['PHP_SELF'];?>?accion=add&codigoproducto=<?= $productos["DSC_CODIGO"];?>">
                                <!-- begin card -->
                                  <div class="card text-white" style="width: 18rem;">
                                      <img class="card-img-top"data-src="<?=$productos["DSC_IMAGEN"]?>"style="max-height:200px;" alt="Card image cap">
                                         <!-- begin card-body -->
                                         <div class="card-body">
                                             <h5 class="card-title"><?=$productos["DSC_CODIGO"]?></h5>
                                              <p class="card-text"><?=$productos["DSC_DESCRIPCION"]?></p>
                                         </div>
                                         <!-- end card-body -->
                                         <!-- begin list-group -->
                                         <ul class="list-group list-group-flush">
                                              <li class="list-group-item"style="background: 000000;"><?=$productos["DSC_NOMBRE"]?></li>
                                              <li class="list-group-item"style="background: 000000;"><?="₡ ".$productos["NUM_PRECIO"]?></li>
                                         </ul>
                                          <!-- end list group -->
                                          <!-- begin inputs hidden -->
                                          <input type="hidden"name="codigo_producto"value="<?=$productos["DSC_CODIGO"];?>"/>
                                          <input type="hidden"name="descripcion_producto"value="<?=$productos["DSC_DESCRIPCION"];?>"/>
                                          <input type="hidden"name="hidden_nombre"value="<?=$productos["DSC_NOMBRE"];?>"/>
                                          <input type="hidden"name="hidden_precio"value="<?=$productos["NUM_PRECIO"];?>"/>
                                          <!-- end inputs hidden -->
                                          <div class="pull-right">
                                              <label class = "col-form-label, text-white text-left font-weight-bold">Cantidad
                                                  <input type="number" name="cantidad" class="form-control m-b-5 bg-warning" value="1" />
                                              </label>&nbsp;&nbsp;
                                              <button type="submit"name="btn_añadir"class="btn btn-warning col-lg"style="width: 70px;"> 
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                              </button>
                                         </div>
                                  </div>
                                   <!-- end card -->
                              </form>
                           </div>
                           <!-- end col -->
                      </div>
                      <!-- end row -->
                       <?php
                            }
                          }
                       if($null){?>              
                         <div class = "alert alert-danger text-center "role = "alert">No hay datos que mostrar</div>    
                           <?php
                                     }
                                }?>
                      </div>
                      <!-- end container -->
                      <!-- col-md-12 -->
                       <div class="col-md-12">
                                          <ul class = "pagination  pagination-lg">
                                             <!-- Botón flecha derecha -->
                                                <?php if($numeroPagina == 1){ ?>
                                                   <li class="paginate_button previous disabled " id="data-table-responsive_next"><a href="#" aria-controls="data-table-responsive" data-dt-idx="7" tabindex="0">&laquo;</a></li>
                                                <?php }else{?>
                                                  <li class="paginate_button active"><a href="?pagina=<?= $numeroPagina - 1;?>" aria-controls="data-table-responsive" data-dt-idx="6" tabindex="0">&laquo;</a></li>
                                                <?php } ?>
                                                 <!-- Botones centrales -->
                                                <?php 
                                                  for ($i=1; $i<= $totalPaginas; $i++) { 
                                                    if($numeroPagina == $i){
                                                      echo "<li class='paginate_button active'><a href='?pagina=$i'aria-controls='data-table-responsive' data-dt-idx='6' tabindex='0'>$i</a></li>";
                                                    }else{
                                                      echo "<li class='paginate_button'><a href='?pagina=$i'aria-controls='data-table-responsive' data-dt-idx='6' tabindex='0'>$i</a></li>";
                                                    }
                                                  }
                                                ?>
                                            <!-- Botón flecha izquierda -->
                                                <?php if($numeroPagina == $totalPaginas){ ?>
                                                   <li class="paginate_button next disabled" id="data-table-responsive_next"><a href="#" aria-controls="data-table-responsive" data-dt-idx="7" tabindex="0">&raquo;</a></li>
                                                  <li class="disabled"></a></li>
                                                <?php }else{?>
                                                  <li class="paginate_button next active"><a href="?pagina=<?= $numeroPagina + 1;?>" aria-controls="data-table-responsive" data-dt-idx="6" tabindex="0">&raquo;</a></li>
                                                <?php } ?>
                                          </ul> 
                          </div>
                          <!-- end col-md-12 -->
                </div>
                <!-- end panel-body -->
             <div class="panel-footer bg-dark text-white h4">Store Kings</div>
        </div>
        <!-- end panel -->
    </div>
     <!-- end container -->
