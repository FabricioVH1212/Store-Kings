<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo es del catálogo
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	31/01/2021		Fabricio Vindas			Creación del archivo

*/
    $redireccion = false;
    $registro_por_pagina = 3;
    $numeroPagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $primerRegistro = ($numeroPagina-1)*$registro_por_pagina;

    $sql = "SELECT * FROM tienda_productos order by DSC_CODIGO DESC LIMIT $primerRegistro, $registro_por_pagina";
    $res_productos = mysqli_query($_SESSION["MYSQL"], $sql);

    $query = "SELECT DSC_CODIGO,DSC_IMAGEN,DSC_NOMBRE,NUM_PRECIO,DSC_DESCRIPCION FROM tienda_productos ORDER BY DSC_CODIGO DESC";
    $res = mysqli_query($_SESSION["MYSQL"], $query);
    $total_productos = mysqli_num_rows($res);
    $totalPaginas = ceil($total_productos/$registro_por_pagina);
    
      $total = "SELECT count(*) TOTAL FROM tienda_productos";
      $res_total = mysqli_query($_SESSION["MYSQL"], $total);

	  //Elimina el producto
      if(isset($_GET["delete"])){
        $sql = "DELETE FROM tienda_productos WHERE DSC_CODIGO = '{$_GET["codigoproducto"]}'";
            if(mysqli_query($_SESSION["MYSQL"], $sql)){
                  unlink($_GET["ruta"]); //Borra la imagen del servidor
                  $redireccion = true;
                  ?>
                  <script>alertify.success('Registro eliminado satisfactoriamente.');</script>
                  <?php
                }else{
                  ?>
                  <script>alertify.error('Ha ocurrido un error al eliminar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
                  <?php     
                } 
      }
      
   if($redireccion){
  ?>
  <script>  
      setTimeout("location.href='admin_catalogo.php'",2000); 
  </script>
  <?php

  } 
include(CONFIG_PATH_GUI.'gui_admin_catalogo.php');

?>