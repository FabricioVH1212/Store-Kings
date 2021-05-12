<link href ="css/css_tablas.css" rel="stylesheet">
<?php include('inc/header.php')?>
        <!-- begin container -->
        <div class = "container"style = "position:relative; top:150px;">
            <!-- begin panel -->
        <div class="panel  panel-inverse">
             <!-- begin panel-heading -->
               <div class="panel-heading">
                   <h4 class="panel-title">Store Kings || Historial</h4>
                </div>
             <!-- end panel-heading -->
             <!-- begin alert -->
             <div class="alert alert-secondary fade show"style="height:50px;">
                 <div class="float-left">
                    <a href="admin_index.php"class="btn btn-warning"><i class="fa fa-arrow-circle-left col-lg "aria-hidden="true"></i></a>
                 </div>
            </div>
            <!-- end alert -->
             <!-- begin panel-body -->
             <div class="panel-body">
                 <h1 class="text-center">Historial de compras</h1><hr class="my-4">
                    <!-- begin centrado -->
                    <div class="centrado">
                                <!-- begin tabla -->
                                <div class = "tabla table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                                     <table class="table table-bordered"cellspacing="0">
                                        <tr class="GridViewScrollHeader">
                                            <th scope="col">N&uacute;mero de factura</th>
                                            <th scope="col">Identificaci&oacute;n</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Direcci&oacute;n</th>
                                            <th scope="col">Detalle</th>
                                        </tr>
                                          <?php
                                            $null = true;
                                            if($res_persona){
                                            while ($persona = mysqli_fetch_assoc($res_persona)) {
                                                    if($persona["IDE_FACTURA"] != ''){
                                                         $null = false;
                                                                    ?>
                                        <tr class="GridViewScrollItem">
                                            <td><?=$persona["IDE_FACTURA"]?></td>
                                            <td><?=$persona["NUM_IDENTIFICACION"]?></td>
                                            <td><?=$persona["DSC_NOMBRE"]." ".$persona["DSC_APELLIDOS"]?></td>
                                            <td><?=$persona["FEC_FACTURACION"]?></td>
                                            <td><?=$persona["DSC_DIRECCION"]?></td>
                                            <td>
                                            <a href="admin_detalle.php?id_factura=<?=$persona["IDE_FACTURA"]?>&num_ide=<?=$persona["NUM_IDENTIFICACION"]?>" class="btn btn-warning">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="?delete=true&id_factura=<?=$persona["IDE_FACTURA"]?>&ruta=<?=$persona["DSC_ARCHIVO"]?>" onclick= "if(confirm('¿Estas seguro que desea realizar esta acci\u00F3n?')) return true;else return false;" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            </td>
                                            <?php
                                                 }
                                                }
                                            }
                                            if($null){?>              
                                                  <td class="bg-red-darker text-white h4"colspan="6" align="center">Actualmente no hay datos para mostrar</td>   
                                                   <?php
                                               }
                                            ?>
                                        </tr>
                                    </table>
                                </div>
                                <!-- end tabla -->
                    </div>
                    <!-- end centrado -->
              </div>
             <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end container -->
    <br/>
