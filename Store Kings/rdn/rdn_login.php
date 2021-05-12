<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo es el login del sistema, valida el usuario contra la base de datos
	
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	30/01/2021		Fabricio Vindas			Creación del archivo

*/
	
	if(isset($_POST["btn_ingresar"])){		
		error_reporting(0);
		$num_identificacion = $_POST["txt_num_ide"];
		$contrasena = encriptar_user($_POST["txt_contrasena"]);
			$sql = "SELECT * FROM TIENDA_USUARIO WHERE NUM_IDENTIFICACION = ".$num_identificacion." AND DSC_PASSWORD = '".trim($contrasena)."'";
			$res = mysqli_query($_SESSION["MYSQL"], $sql);
			$res = mysqli_fetch_array($res);
				if($res["IDE_PERFIL"] == 1){
	                //variables de sesión administrador
	                $_SESSION["USUARIO"]["ADMINISTRADOR"]["NOMBRE"] = $res["DSC_NOMBRE"].' '.$res["DSC_APELLIDOS"];
	                $_SESSION["USUARIO"]["ADMINISTRADOR"]["CEDULA"] = $num_identificacion;
	                $_SESSION["USUARIO"]["ADMINISTRADOR"]["CORREO"] = $res["DSC_CORREO"];
	                $_SESSION["USUARIO"]["ADMINISTRADOR"]["PERFIL"] = $res["DSC_PERFIL"];
	                 if(mysqli_query($_SESSION["MYSQL"], $sql)){
				                  			?>
                	?>
		                <script>
						alertify.success('Acceso correcto, pronto ser&aacute; redireccionado.');
						setTimeout("location.href='admin_index.php'",2000); </script>
				    <?php
					}else{
					  ?>
						<script>alertify.error('Ha ocurrido un error al cargar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
						<?php     
						 }
                }elseif ($res["IDE_PERFIL"] == 2) {
	                //variables de sesión cliente}
	                 $_SESSION["USUARIO"]["CLIENTE"]["NOMBRE"] = $res["DSC_NOMBRE"].' '.$res["DSC_APELLIDOS"];
	                $_SESSION["USUARIO"]["CLIENTE"]["CEDULA"] = $num_identificacion;
	                $_SESSION["USUARIO"]["CLIENTE"]["CORREO"] = $res["DSC_CORREO"];
	                $_SESSION["USUARIO"]["CLIENTE"]["PERFIL"] = $res["DSC_PERFIL"];
	                $_SESSION["USUARIO"]["CLIENTE"]["TELEFONO"] = $res["NUM_TELEFONO"];
	                $_SESSION["USUARIO"]["CLIENTE"]["CODIGO"] = $res["DSC_CODIGO"];
	                 if(mysqli_query($_SESSION["MYSQL"], $sql)){
		                  ?>
		                <script>
						alertify.success('Acceso correcto, pronto ser&aacute; redireccionado.');
						setTimeout("location.href='principal.php'",2000); 
						</script>
						 <?php
						}else{
							  ?>
							<script>alertify.error('Ha ocurrido un error al cargar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
							<?php     
						 }
	
                }else{
				?>
				<script>alertify.error('Datos incorrectos.');</script>
				<?php
			}
		}
		
	if(isset($_POST["recuperar"])){
		$txt_correo[$_POST["txt_correo"]];
		$txt_num_ide[$_POST["txt_num_ide"]];
		$nuevaContra = $txt_num_ide;
		generar_codigo($nuevaContra);
		$sql = "UPDATE TIENDA_USUARIO SET DSC_PASSWORD = '".$nuevaContra."' 
		WHERE NUM_IDENTIFICACION = '.$txt_num_ide' AND  DSC_CORREO = '.$txt_correo'" ;
		if(mysqli_query($_SESSION["MYSQL"], $sql)){
		    ?>
				<script>
				  alertify.success('Sus datos han sido actualizados satisfactoriamente. Revise su correo.');
				  setTimeout("location.href='index.php'",2000); 
				</script>
				<?php
				//En un futuro aca va el código para mandar la nueva contra el correo
				}else{
				?>
				<script>alertify.error('Ha ocurrido un error al actualizar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
				<?php			
				}
	}
   
	include(CONFIG_PATH_GUI.'gui_login.php');
?>