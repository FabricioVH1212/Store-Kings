<link rel = "stylesheet" href = "css/css_admin_index.css">
<?php include('inc/header.php');?>
        <div class = "container"style = "position:relative; top:150px;">
        <!-- begin panel -->
        <div class="panel  panel-inverse">
             <!-- begin panel-heading -->
               <div class="panel-heading">
                   <h4 class="panel-title">Store Kings || Inicio</h4>
                </div>
             <!-- end panel-heading -->
             <!-- begin panel-body -->
             <div class="panel-body">
                <!-- begin centrado -->
                <div class = "centrado">
                    <h1 class="text-center">Bienvenido<br><?=$_SESSION["USUARIO"]["ADMINISTRADOR"]["NOMBRE"]?></h1><hr class="my-4">
                        <!-- begin container-card -->
                        <div class="container-card">
                                <div class="card" >
                                    <figure><img data-src="img/Admin/Actualizar.jpg"></figure>
                                    <div class="contenido-card">
                                        <h3 class = "text-white">Actualizar cat&aacute;logo</h3>
                                        <p class = "text-white">Manten actualizado el cat&aacute;logo de productos constantemente.</p>
                                        <a href = "admin_catalogo.php" class="btn btn-xl btn-warning m-r-5 text-dark" >Actualizar cat&aacute;logo</a> 
                                    </div>
                                </div>
                                <div class="card">
                                    <figure><img data-src="img/Admin/Historial.PNG"></figure>
                                    <div class="contenido-card">
                                        <h3 class = "text-white">Historial</h3>
                                        <p class = "text-white">En este apartado puedes ver el historial de compras.</p>
                                        <a href="admin_historial.php" class="btn btn-xl btn-warning m-r-5 text-dark" >Historial</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <figure><img data-src="img/Admin/Salir.PNG"></figure>
                                    <div class="contenido-card">
                                        <h3 class = "text-white">Salir del sistema</h3>
                                        <p class = "text-white">Selecciona esta opci&oacute;n para salir de la aplicaci&oacute;n.</p>
                                        <a href="salir.php" name = "btn_salir" class="btn btn-xl btn-warning m-r-5 text-dark">Salir</a>
                                    </div>
                                </div>
                        </div><!-- end container-card -->
                </div><!-- end centrado -->
           </div>
             <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end container -->        
