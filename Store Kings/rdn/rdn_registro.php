<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo es para el registro de los clientes a Store Kings
	
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	30/1/2021		Fabricio Vindas			Creación del archivo

*/
	
	$num_identificacion = '';
    $nombre = '';
    $apellidos = '';
    $correo = '';
    $pass = '';
    $confirm = '';
    $cpostal = '';
    $telefono = '';
    
	//si se ha accionado la opciones de guardar
	if(isset($_POST["btn_registro"])){
		$num_identificacion = $_POST["txt_num_ide"];
        $nombre = $_POST["txt_nombre"];
        $apellidos = $_POST["txt_apellidos"];
        $correo = $_POST["txt_correo"];
        $contrasena = encriptar_user($_POST["txt_contrasena"]);
        $confirm = $_POST["txt_confirm"];
        $cpostal = $_POST["txt_postal"];
        $telefono = $_POST["txt_telefono"];

         $sql= "INSERT INTO tienda_usuario(NUM_IDENTIFICACION, DSC_NOMBRE, DSC_APELLIDOS, DSC_CORREO, DSC_PASSWORD, DSC_CODIGO, NUM_TELEFONO,IDE_PERFIL,IDE_ESTADO) VALUES('$num_identificacion', '$nombre', '$apellidos', '$correo','$contrasena', '$cpostal', '$telefono', 2, 1)";
        $verifica_user= mysqli_query($_SESSION["MYSQL"], "SELECT * FROM tienda_usuario WHERE NUM_IDENTIFICACION = '$num_identificacion' ");

            if(mysqli_query($_SESSION["MYSQL"], $sql)){
                        if (mysqli_num_rows($verifica_user) >0 )
                            {
                                ?>
                                <script>alertify.success('La cuenta ingresada ya existe ');window.history.go(-1);</script>";
                            <?php
                                exit;
                            }
                            ?>
                            <script>
                            alertify.success('La cuenta ha sido creada satisfactoriamente.');
                            setTimeout("location.href='index.php'",2000); 
                            </script>
                    <?php
                    }else{
                      ?>
                        <script>alertify.error('Ha ocurrido un error al cargar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
                        <?php     
                         }
    }
	
include(CONFIG_PATH_GUI.'gui_registro.php');
?>