<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo para hacer el crud básico del catálogo
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	31/01/2021		Fabricio Vindas			Creación del archivo

*/
      $redireccion = false;
  if(isset($_GET["codigoproducto"])){
  //editando
      $sql = "SELECT DSC_CODIGO, DSC_NOMBRE, NUM_PRECIO, DSC_DESCRIPCION, DSC_IMAGEN,IDE_TIPO_PRODUCTO FROM TIENDA_PRODUCTOS
           WHERE DSC_CODIGO ='{$_GET["codigoproducto"]}'";
      $res_productos = mysqli_query($_SESSION["MYSQL"], $sql);    
      $productos = mysqli_fetch_assoc($res_productos);
      $botton = "Actualizar";
      $codigoProducto = $_GET["codigoproducto"];
      $nombreProducto = $productos["DSC_NOMBRE"];
      $precioProducto = $productos["NUM_PRECIO"];
      $dscDescripcion = $productos["DSC_DESCRIPCION"];
      $tipoProducto   = $productos["IDE_TIPO_PRODUCTO"];
      $imagenProducto = $productos["DSC_IMAGEN"];
  }else{
  //nuevo registro
    $botton = "Añadir";
    $codigoProducto = '';   
    $nombreProducto = '';
    $precioProducto = '';
    $dscDescripcion = '';
    $tipoProducto = '';
    $imagenProducto = '';
  }

     $resultado = tipo_producto();
                        
     if(isset($_POST["Añadir"])){
         $nombre_archivo = $_FILES['file']['name']; // Para conocer el nombre del archivo
                         $tipo = $_FILES['file']['type'];
                         $tamano = $_FILES['file']['size'];

                         if (($nombre_archivo == !NULL) && ($_FILES['file']['size']));
                         {
                           //indicamos los formatos que permitimos subir a nuestro servidor
                           if (($_FILES["file"]["type"] == "image/gif")
                            || ($_FILES["file"]["type"] == "image/jpeg")
                            || ($_FILES["file"]["type"] == "image/jpg")
                            || ($_FILES["file"]["type"] == "image/png")){
               
                             // Ruta donde se guardarán las imágenes que subamos
                             $directorio = "catalogo_imagenes/" ;
               
                             // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
               
                             move_uploaded_file($_FILES['file']['tmp_name'],$directorio.$nombre_archivo);
               
                           }else  if($nombre_archivo == !NULL) {
                             //Si existe la variable pero se pasa del tamaño permitido
                             echo ('<script>alertify.error("La imagen se pasa del tamaño permitido")</script>');
                         
                           }
                           else{
                             //Si no cumple con el formato
                             echo ('<script>alertify.error("No se puede subir una imagen en ese formato")</script>');
                           }
               
                       }   
        $sql = "INSERT INTO tienda_productos (DSC_CODIGO,DSC_NOMBRE, NUM_PRECIO, DSC_DESCRIPCION,DSC_IMAGEN,IDE_TIPO_PRODUCTO,IDE_ESTADO) VALUES ('".$_POST["txt_CodigoProducto"]."', '".$_POST["txt_NombreProducto"]."', '".$_POST["txt_PrecioProducto"]."', '".$_POST["txt_Descripcion"]."','".$directorio.$nombre_archivo."','".$_POST["sel_tipo_producto"]."',1)"; 
          if(mysqli_query($_SESSION["MYSQL"], $sql)){
                  $redireccion = true;
                echo('<script>
                    alertify.success("Producto agregado satisfactoriamente.");
                  </script>');
                }else{
                  echo('<script>alertify.error("Ha ocurrido un error al agregar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores");</script>');
                } 
     }

     if(isset($_POST["Actualizar"])){
            $sql = "SELECT DSC_IMAGEN FROM TIENDA_PRODUCTOS WHERE DSC_CODIGO = '{$_GET["codigoproducto"]}'";
            if(mysqli_query($_SESSION["MYSQL"], $sql)){
                 unlink("ruta");
                 if(unlink("ruta") == true){
                    $nombre_archivo = $_FILES['file']['name']; // Para conocer el nombre del archivo
                         $tipo = $_FILES['file']['type'];
                         $tamano = $_FILES['file']['size'];

                         if (($nombre_archivo == !NULL) && ($_FILES['file']['size']));
                         {
                           //indicamos los formatos que permitimos subir a nuestro servidor
                           if (($_FILES["file"]["type"] == "image/gif")
                            || ($_FILES["file"]["type"] == "image/jpeg")
                            || ($_FILES["file"]["type"] == "image/jpg")
                            || ($_FILES["file"]["type"] == "image/png")){
               
                             // Ruta donde se guardarán las imágenes que subamos
                             $directorio = "catalogo_imagenes/" ;
               
                             // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
               
                             move_uploaded_file($_FILES['file']['tmp_name'],$directorio.$nombre_archivo);
               
                           }else  if($nombre_archivo == !NULL) {
                             //Si existe la variable pero se pasa del tamaño permitido
                             echo ('<script>alertify.error("La imagen se pasa del tamaño permitido")</script>');
                         
                           }
                           else{
                             //Si no cumple con el formato
                             echo ('<script>alertify.error("No se puede subir una imagen en ese formato")</script>');
                           }
               
                       }   
               $sql = "UPDATE tienda_productos SET DSC_CODIGO = '".$_POST["txt_CodigoProducto"]."',DSC_NOMBRE = '".$_POST["txt_NombreProducto"]."',NUM_PRECIO = '". $_POST["txt_PrecioProducto"]."',DSC_DESCRIPCION = '".$_POST["txt_Descripcion"]."',IDE_TIPO_PRODUCTO = '". $_POST["sel_tipo_producto"]."',DSC_IMAGEN = '".$directorio.$nombre_archivo."'WHERE DSC_CODIGO = '{$_GET["codigoproducto"]}'";
                if(mysqli_query($_SESSION["MYSQL"], $sql)){
                          $redireccion = true;
                          ?>
                          <script>
                            alertify.success('Producto actualizado satisfactoriamente.');
                          </script>
                          <?php
                        }else{
                          ?>
                          <script>alertify.error('Ha ocurrido un error al actualizar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
                          <?php     
                        } 
              }     
     }
		}
    if($redireccion){
  ?>
  <script>  
      setTimeout("location.href='admin_catalogo.php'",2000); 
  </script>
  <?php

  }	

 include(CONFIG_PATH_GUI.'gui_mantenimiento_catalogo.php');
?>