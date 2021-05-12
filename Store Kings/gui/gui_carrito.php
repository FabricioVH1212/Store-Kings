<?php include('inc/header.php');?>
    <!-- begin container-->
    <div class="container centrado" style="position: relative;top:100px;">
         <!-- begin panel -->
        <div class="panel panel-inverse">
                <?=panel_heading();?>
                <!-- begin panel-body -->
                <div class="panel-body">
                    <h1 class = "text-center">Carrito de compras</h1>
                        <?php 
                        $estado = "carrito";
                        echo tabla_carrito($estado);
                        ?>
                </div>
                <!-- end panel-body -->
             <div class="panel-footer bg-dark text-white h4">Store Kings</div>
        </div>
        <!-- end panel -->
    </div>
     <!-- end container -->
