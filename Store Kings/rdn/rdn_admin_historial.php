<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo observar el historial por parte del administrador
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	05/03/2021		Fabricio Vindas			Creación del archivo

*/
	 $redireccion = false;
	 $res_persona = historial_factura();
	 //Este query es para el lado del administrador
	     if(isset($_GET["delete"])){
                        $sql = "DELETE FROM TIENDA_FACTURA TFA INNER JOIN TIENDA_DETALLE TDE ON (TDE.IDE_FACTURA = TFA.IDE_FACTURA) WHERE IDE_FACTURA = '{$_GET["id_factura"]}'";
                        $filename = $_GET["ruta"];
                        //Eliminar archivo del directorio
                        if (file_exists($filename)) {
                        $success = unlink($filename);
                            if (!$success) {
                                throw new Exception("No se puede eliminar $filename");
                            }
                        }
                        if(mysqli_query($_SESSION["MYSQL"], $sql)){
											$redireccion = true;
											?>
											<script>
												alertify.success('Sus datos han sido borrados satisfactoriamente.');
											</script>
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
      setTimeout("location.href='admin_historial.php'",2000); 
  </script>
  <?php
  } 
  include(CONFIG_PATH_GUI.'gui_admin_historial.php');
?>