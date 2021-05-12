<?php include('inc/header.php')?>
    <!-- begin container -->
    <div class = "container"style="position: relative;top:150px;">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                      <!-- begin panel-heading -->
                        <div class="panel-heading">
                          <h4 class="panel-title">Store Kings || Productos</h4>
                        </div>
                       <!-- end panel-heading -->
                       <div class="alert alert-secondary fade show" style="height: 50px;">
                              <div class="float-left">
                                   <a  href = "admin_index.php" class = "btn btn-sm btn-warning m-r-5"><i class="fa fa-arrow-circle-left col-lg " aria-hidden="true"></i></a>
                              </div>
                              <div class="float-right">
                                  <a href="mantenimiento_catalogo.php" class="btn btn-sm btn-warning m-r-5 text-white">Agregar producto</a>
                              </div>
                      </div>
                       <!-- end alert -->
                       <!-- begin panel-body -->
                       <div class="panel-body">
                            <h1 class = "text-center">Lista de productos</h1>
                            <div id="data-table-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class = "row">
                                    <div class="col-sm-6">
                                          <div class="dataTables_length"id="data-table-responsive_length">
                                            <form>
                                                <label class="col-form-label font-weight-bold">
                                                    "Mostrar "
                                                    <select name="sel_valor" aria-controls="data-table-responsive" class="form-control input-sm" id="sel_valor">
                                                        <option value="4">4</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    "Entradas"&nbsp;
                                                    <button class = "btn btn-warning"type="submit" name="btn_enviar"><i class = "fa fa-redo"></i></button>
                                                </label>
                                            </form>
                                          </div>
                                    </div>
                                    <!-- end col-sm-6 -->
                                     <div class="col-sm-6">
                                           <div id="data-table-responsive_filter" class="dataTables_filter">
                                            <label>Buscar:
                                              <input type="search" class="form-control input-sm" placeholder="" aria-controls="data-table-responsive">
                                            </label>
                                          </div>
                                     </div>
                                     <!-- end col-sm-6 -->
                                </div> 
                                <!-- end row -->
                                <div class = "row">
                                    <div class="col-sm-12">
                                          <table  id="data-table-responsive" class="table table-responsive table-bordered bg-black" >
                                                <thead>
                                                  <tr>
                                                      <th class = "text-white text-nowrap"width="1%">C&oacute;digo de producto</th>
                                                      <th class = "text-white text-nowrap"width="1%" data-orderable="false">Foto</th>
                                                      <th class = "text-white text-nowrap"scope="col">Nombre</th>
                                                      <th class = "text-white text-nowrap"scope="col">Precio</th>
                                                      <th class = "text-white text-nowrap"scope="col">Descripci&oacute;n</th>
                                                      <th class = "text-white text-nowrap"scope="col">Clasificaci&oacute;n</th>
                                                  </tr>
                                              </thead>
                                               <tbody>
                                                  <tr class="odd gradeX">
                                                      <?php
                                                      $null = true; 
                                                      $contador = 0;
                                                      if($res_productos){
                                                      while ($productos = mysqli_fetch_array($res_productos)) {
                                                              if($productos["DSC_CODIGO"] != ''){
                                                                   $null = false;
                                                                              ?>
                                                          <td width="1%" class="f-s-600 text-inverse text-white "><?=$productos["DSC_CODIGO"]?></td>
                                                          <td width="1%" class="with-img"><?= '<img class="img-rounded height-30" data-src ="' .$productos["DSC_IMAGEN"].'">'?>
                                                          </td>
                                                          <td class = "text-white"><?=$productos["DSC_NOMBRE"]?></td>
                                                          <td class = "text-white"><?="₡ " .$productos["NUM_PRECIO"]?></td>
                                                          <td class = "text-white"><?=$productos["DSC_DESCRIPCION"]?></td>
                                                          <td class = "text-white"><?=$productos["DSC_CODIGO"]?></td>
                                                          <td class = "text-white">
                                                             <a href="mantenimiento_catalogo.php?codigoproducto=<?=$productos["DSC_CODIGO"]?>&ruta=<?=$productos["DSC_IMAGEN"]?>" class="btn btn-warning" title="Editar">
                                                                 <i class="fas fa-pencil-alt"></i>
                                                              </a>
                                                              <a href="?delete=true&codigoproducto=<?=$productos["DSC_CODIGO"]?>&ruta=<?=$productos["DSC_IMAGEN"]?> " class="btn btn-danger" title="Eliminar" onclick= "if(confirm('¿Estas seguro que desea realizar esta acci\u00F3n?')) return true;else return false;" >
                                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                              </a>
                                                          </td>
                                                      </tr>
                                                      <?php
                                                            }
                                                            $contador++;
                                                          }
                                                          if($null){
                                                            ?>              
                                                              <tr>
                                                                 <td colspan="6"><h4 class = "text-center">No hay datos que mostrar</h4></td>
                                                              </tr>
                                                          <?php
                                                             }
                                                          }
                                                    ?>    
                                                  </tbody>
                                              </table>  
                                    </div>
                                    <!-- end col-sm-12 -->
                                </div>
                                <!-- end row -->
                                <div class="row">
                                  <div class="col-sm-5">
                                    <?php while ($fila = mysqli_fetch_array($res_total)) {?>
                                    <div class="dataTables_info" id="data-table-responsive_info" role="status" aria-live="polite"><?= "Mostrando " .$contador. " de " .$registro_por_pagina. " en total son ".$fila["TOTAL"]." productos"?></div>
                                    <?php
                                     }
                                     ?>
                                  </div>
                                  <!-- end col-sm-5 -->
                                  <div class="col-sm-7">
                                      <div class="dataTables_paginate paging_simple_numbers" id="data-table-responsive_paginate">
                                            <ul class = "pagination  pagination-lg">
                                               <!-- Botón flecha derecha -->
                                                  <?php if($numeroPagina == 1){ ?>
                                                     <li class="paginate_button previous disabled" id="data-table-responsive_next"><a href="#" aria-controls="data-table-responsive" data-dt-idx="7" tabindex="0">&laquo;</a></li>
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
                                  </div>
                                    <!-- end col-sm-7 -->
                                </div>
                                <!-- end row -->
                       </div>
                       <!-- end panel-body -->
                </div>
                <!-- end panel -->
    </div>
    <!-- end container -->

	         