<?php 

	session_start();
      if(isset($_SESSION["USUARIO"]["ADMINISTRADOR"]["NOMBRE"],  $_SESSION["USUARIO"]["ADMINISTRADOR"]["CEDULA"],$_SESSION["USUARIO"]["ADMINISTRADOR"]["CORREO"],$_SESSION["USUARIO"]["ADMINISTRADOR"]["PERFIL"])){
      	  unset($_SESSION["USUARIO"]["ADMINISTRADOR"]["NOMBRE"]);
          unset($_SESSION["USUARIO"]["ADMINISTRADOR"]["CEDULA"]);
          unset($_SESSION["USUARIO"]["ADMINISTRADOR"]["CORREO"]);
          unset($_SESSION["USUARIO"]["ADMINISTRADOR"]["PERFIL"]);
  		  session_destroy();
	}else{
		  unset($_SESSION["USUARIO"]["CLIENTE"]["NOMBRE"]);
          unset($_SESSION["USUARIO"]["CLIENTE"]["CEDULA"]);
          unset($_SESSION["USUARIO"]["CLIENTE"]["CORREO"]);
          unset($_SESSION["USUARIO"]["CLIENTE"]["PERFIL"]);
  		  session_destroy();
	}
	session_unset();
	header("Location: index.php");
  
?>