<?php
/*
	Autor: Fabricio Vindas Hernandez 
	
	Descripción: Este archivo es correspondiente al perfil del cliente, puede actualizar los datos de ser necesario
	
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	03/02/2021		Fabricio Vindas			Creación del archivo

*/
	$redireccion = false;
	$cliente = datos_cliente();

	if(isset($_POST["btn_enviar"])){
		//consultar por la contraseña actual
		$sql = "SELECT DSC_PASSWORD FROM TIENDA_USUARIO WHERE NUM_IDENTIFICACION = ".$_SESSION["USUARIO"]["CLIENTE"]["CEDULA"];
		$res_persona = mysqli_query($_SESSION["MYSQL"], $sql);
		$persona = mysqli_fetch_assoc($res_persona);
			if($persona["DSC_PASSWORD"] == encriptar_user($_POST["txt_contrasena"])){
					if($_POST["txt_contrasena1"] == $_POST["txt_confirm"]){
						if($persona["DSC_PASSWORD"] != encriptar_user($_POST["txt_confirm"])){
							$sql = "UPDATE TIENDA_USUARIO SET DSC_NOMBRE = '".$_POST["txt_nombre"]."', DSC_APELLIDOS = '".$_POST["txt_apellidos"]."',DSC_CORREO = '".$_POST["txt_email"]."', NUM_TELEFONO = '".$_POST["txt_telefono"]."', DSC_CODIGO = '".$_POST["txt_codigo"]."',DSC_PASSWORD = '".encriptar_user($_POST["txt_confirm"])."'WHERE NUM_IDENTIFICACION = ".$_SESSION["USUARIO"]["CLIENTE"]["CEDULA"];
										if(mysqli_query($_SESSION["MYSQL"], $sql)){
											$redireccion = true;
											?>
											<script>
												alertify.success('Sus datos han sido actualizados satisfactoriamente.');
												setTimeout("location.href='perfil.php'",2000); 
											</script>
											<?php
										}else{
											?>
											<script>alertify.error('Ha ocurrido un error al actualizar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
											<?php			
										}		
							}else{
									?>
									<script>alertify.error('Debe indicar una contrase&ntilde;a distinta a la anterior.');</script>
									<?php
								}
							}else{
								?>
								<script>alertify.error('La contrase&ntilde;a nueva no coincide con la repetici&oacute;n.');</script>
								<?php
							}
					}else{
						?>
						<script>alertify.error('La contrase&ntilde;a anterior no coincide.');</script>
						<?php			
					}	
	}


	  if($redireccion){
  ?>
  <script>  
      setTimeout("location.href='principal.php'",2000); 
  </script>
  <?php

  } 
include(CONFIG_PATH_GUI.'gui_perfil.php');

?>