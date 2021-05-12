<?php
/*
	Autor: Fabricio Vindas Hernandez 
	
	Descripción: Este archivo es correspondiente a la área de pagos donde se procederá a hacer 
	la facturación requerida
	
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	22/02/2021		Fabricio Vindas			Creación del archivo

*/

include(CONFIG_PATH_GUI.'gui_pagos.php');
	$redireccion = false;
		if(isset($_POST["btn_sinpe"])){
				//Creación del archivo
			 	$nombre_archivo = $_FILES['file']['name'];
                $ext =  explode(".", $nombre_archivo);
			    $file_name = $_SESSION["USUARIO"]["CLIENTE"]["CEDULA"].'_'.$ext[0].'.'.$ext[1];
                                    
					define("Comprobante", "comprobantes/");
                        if(!file_exists(Comprobante)){
                           mkdir(Comprobante, 0777);
                        }
                                
                        if(move_uploaded_file($_FILES['file']['tmp_name'], Comprobante.$file_name)){
                            $archivo = Comprobante.$file_name;
                            //Creación de factura e inserción a la base de datos
                            $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
                            $txt_factura = "SK-".substr(str_shuffle($pattern),0,5);
                            $sql= "INSERT INTO tienda_factura(IDE_FACTURA,NUM_IDENTIFICACION,FEC_FACTURACION, DSC_DIRECCION, DSC_ARCHIVO,IDE_ESTADO) 
                                    VALUES('".$txt_factura."','".$_SESSION["USUARIO"]["CLIENTE"]["CEDULA"]."' ,'".date("Y-m-d H:i:s")."', '".$_POST["txt_direccion"]."', '".$archivo."',1)";
                              if(mysqli_query($_SESSION["MYSQL"], $sql)){
                                   if(!empty($_SESSION["CARRITO"])){
                                   	//Inserción del detalle de compra
		                             $count = count($_SESSION["CARRITO"]);
		                               $i = 0;
		                                foreach($_SESSION["CARRITO"] as $values){
		                                   $sql = "INSERT INTO TIENDA_DETALLE(IDE_FACTURA,DSC_CODIGO,NUM_CANTIDAD)
		                                        VALUES('".$txt_factura."','".$values["codigo_producto"]."','".$values["cantidad"]."')";
		                                    if(mysqli_query($_SESSION["MYSQL"], $sql)){
				                  			?>
											  <script>
											       alertify.success('Detalle agregado satisfactoriamente.');
											   </script>
										     <?php
											  }else{
											  ?>
											  <script>alertify.error('Ha ocurrido un error al agregar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
											                  <?php     
											 }
											 $i++;
		                                } //end foreach
		                                ?>
										  <script>alertify.success('El pago se realiz&oacute; de manera &eacute;xitosa');</script>
										  <?php  
										  $redireccion = true;  

								 	}else{
										 ?>
										  <script>alertify.error('Se debe añadir elementos al carrito');</script>
										  <?php  
										  $redireccion = true;   
										   } 	//end else
							  }else{
							      ?>
							      <script>alertify.error('Ha ocurrido un error al agregar su informaci&oacute;n, intente nuevamente, en caso de persistir el problema, comuniquese con administradores');</script>
							       <?php     
							       } // end else    
							   }//end if
					}// end btn

				  if($redireccion){
  ?>
  <script>  
      setTimeout("location.href='catalogo.php'",2000); 
  </script>
  <?php

  }	
?>