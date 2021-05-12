<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo es la página principal
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	30/01/2021		Fabricio Vindas			Creación del archivo

*/
	$res_cliente = historial_cliente();
	$redireccion = false;
		
           //Este query es para el lado del cliente         	
        if(isset($_GET["update"])){
                $sql = "UPDATE TIENDA_FACTURA SET IDE_ESTADO = 0 WHERE IDE_FACTURA = '{$_GET["id_factura"]}'";
                	if(mysqli_query($_SESSION["MYSQL"], $sql)){
						$redireccion = true;
							?>
							<script>
							alertify.success('Sus datos han sido borrados satisfactoriamente.');
							</script>
						<?php
							}else{
							?>
							<script>alertify.success('Ha ocurrido un error al eliminar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
						<?php			
						}	
            }

	  if($redireccion){
  ?>
  <script>  
      setTimeout("location.href='historial.php'",2000); 
  </script>
  <?php
  } 
  include(CONFIG_PATH_GUI.'gui_historial.php');
?>