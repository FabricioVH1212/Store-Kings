<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo es la página principal
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	30/01/2021		Fabricio Vindas			Creación del archivo

*/
	function validar_campo()
  {
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
  
  }

  if (isset($_POST['btn_enviar'])){
    if( (isset($_POST["name"]) && !empty($_POST["name"])) &&
    isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["subject"]) && !empty($_POST["subject"])&&
    isset($_POST["message"]) && !empty($_POST["message"]) ){
      
         
    $destinoMail = "fabriciomario01@gmail.com";
    $name = validar_campo($_POST["name"]);
    $email = validar_campo($_POST["email"]);
    $message = validar_campo($_POST["message"]);
   
    $content = "Nombre: " . $name ;
    $content =  "\n Correo:" .$email;
    $content = "\n Mensaje: " .$message;
   
     mail($mail, "Mensaje de contacto del cliente" .$nombre, $content);
    return print "Ok";

      mail($destinoMail,$email,$Message,$content);
      if($mail){
        echo ('<div class="alert alert-success" role="alert">Correo enviado exitosamente!</div>');
        echo "<script>setTimeout(\"location.href='index.php'\", 3000)</script>";
      }
      else{
        echo ('<div class="alert alert-danger" role="alert">El correo no pudo ser enviado</div>');

      }
      

    }
  }
include(CONFIG_PATH_GUI.'gui_principal.php');

?>