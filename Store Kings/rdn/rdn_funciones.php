<?php
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Este archivo es de todas la funciones
*/
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion para encriptar contraseña
	parametros: 
		$password: contraseña enviada por el cliente	
*/
function encriptar_user($password){
	$salt = md5($password);
	$password = crypt($password, $salt);

	return $password;
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que retorna los datos del cliente
*/
function datos_cliente(){
	$sql = "SELECT NUM_IDENTIFICACION,DSC_NOMBRE, DSC_APELLIDOS, DSC_CORREO, DSC_CODIGO, NUM_TELEFONO FROM TIENDA_USUARIO WHERE NUM_IDENTIFICACION = ".$_SESSION["USUARIO"]["CLIENTE"]["CEDULA"];
	$res_cliente = mysqli_query($_SESSION["MYSQL"], $sql);
	$cliente = mysqli_fetch_assoc($res_cliente);

	return $cliente;	
}	
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que retorna la factura de un cliente en específico
*/
function detalle_cliente(){
	$sql = "SELECT * FROM TIENDA_FACTURA TFA INNER JOIN TIENDA_USUARIO TUS ON (TUS.NUM_IDENTIFICACION = TFA.NUM_IDENTIFICACION) WHERE IDE_FACTURA = '{$_GET["id_factura"]}' AND TUS.NUM_IDENTIFICACION = '{$_GET["num_ide"]}'";
	$res_factura = mysqli_query($_SESSION["MYSQL"], $sql);

	return $res_factura;	
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que retorna el detalle de factura de un cliente en específico
*/
function detalle_factura(){
	 $sql = "SELECT * FROM TIENDA_DETALLE TDE INNER JOIN TIENDA_FACTURA TFA ON(TFA.IDE_FACTURA = TDE.IDE_FACTURA) INNER JOIN TIENDA_PRODUCTOS TPR ON(TPR.DSC_CODIGO = TDE.DSC_CODIGO) WHERE TDE.IDE_FACTURA = '{$_GET["id_factura"]}' AND NUM_IDENTIFICACION = '{$_GET["num_ide"]}'";
	$res_detalle = mysqli_query($_SESSION["MYSQL"], $sql);

	return $res_detalle;	
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion para crear la nueva contraseña
	parametros: 
		$longitud: tamaño de los caracteres del password
*/
function generar_codigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{rand(0,$max)};
 return $key;
}	
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que retorna el historial de compra del cliente
*/
function historial_cliente(){
	$sql = "SELECT * FROM TIENDA_FACTURA TFA INNER JOIN TIENDA_USUARIO TUS ON(TUS.NUM_IDENTIFICACION = TFA.NUM_IDENTIFICACION)
	 WHERE TFA.IDE_ESTADO != 0 AND TFA.NUM_IDENTIFICACION = ".$_SESSION["USUARIO"]["CLIENTE"]["CEDULA"]."";
	$res_cliente = mysqli_query($_SESSION["MYSQL"], $sql);

	return $res_cliente;	
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que retorna todos los registros del historial de facturación
*/
function historial_factura(){
	$sql = "SELECT * FROM TIENDA_FACTURA TFA INNER JOIN TIENDA_USUARIO TUS ON (TUS.NUM_IDENTIFICACION = TFA.NUM_IDENTIFICACION)";
	$res_persona = mysqli_query($_SESSION["MYSQL"], $sql);
	return $res_persona;	
}		

/*
	Autor: Fabricio Vindas Hernandez
	Descripción:  Función para ver todos los productos
*/
function ver_productos($registro_por_pagina,$numeroPagina,$totalPaginas){
    // Calculo valor inicial
    // $primerRegistro = ($numeroPagina-1)*$registro_por_pagina;

    // $sql = "SELECT * FROM tienda_productos order by DSC_CODIGO DESC LIMIT $primerRegistro, $registro_por_pagina";
    // $res_productos = mysqli_query($_SESSION["MYSQL"], $sql);

    // $query = "SELECT * FROM tienda_productos ORDER BY DSC_CODIGO DESC";
    // $res = mysqli_query($_SESSION["MYSQL"], $query);
    // $total_productos = mysqli_num_rows($res);
    // $totalPaginas = ceil($total_productos/$registro_por_pagina);
    
	// $sql = "SELECT * FROM TIENDA_PRODUCTOS TPR INNER JOIN  TIENDA_TIPO_PRODUCTO TTP ON (TTP.IDE_PRODUCTO = TPR.IDE_TIPO_PRODUCTO)";
	// $res_productos = mysqli_query($_SESSION["MYSQL"], $sql);

	return $res_productos;
}

/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Funcion que limpia todos los campos ingresados en el formulario
*/
function limpiar_campos(){
	$campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);
    $campo = filter_var($apellidos, FILTER_SANITIZE_STRING); 
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Función que hace un cambio de estado y refresca tabla
*/
// function mantenimiento_estado($table, $estado, $identificador, $columna){

// 	if($estado  == 1){
// 		$new_estado = 0;
// 	}else{
// 		$new_estado = 1;
// 	}

// 	$sql = "UPDATE ".$table." SET IDE_ESTADO = ".$new_estado." WHERE ".$columna." = ".$identificador;
// 	if(mysqli_query($_SESSION["MYSQL"], $sql)){
// 		$respuesta =  '1///'.refrescar_tabla($table);
// 	}else{
// 		$respuesta = '2///'.$table;;
// 	}

// 	return $respuesta;
// }

/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Función que refresca tabla 
*/
// function refrescar_tabla($table){
// 	switch ($table) {
// 		case 'UCA_SEDE':
// 				$tabla = tabla_sedes();
// 			break;
	

// 	return $tabla;
// }
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Función que imprime el panel heading
*/
function panel_heading(){
	$panel = ' <div class="panel-heading" > 
                <ul class="nav nav-pills h5">
                  <li role="presentation"><a href="catalogo.php"class = "text-white">Cat&aacute;logo</a></li>
                  <li role="presentation"><a href="carrito.php"class = "text-white">Carrito de compras</a></li>
                  <li role="presentation"><a href="pagos.php"class = "text-white">Facturaci&oacute;n</a></li>
                </ul>
             </div>
	          <div class="alert alert-secondary fade show" style="height: 50px;">
	                  <div class="pull-left">
	                     <a  href = "principal.php" class = "btn btn-sm btn-warning m-r-5">
	                        <i class="fa fa-arrow-circle-left col-lg " aria-hidden="true"></i>
	                    </a>
	                  </div>           
	          </div>
         ';
    return $panel;
}

/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Función que imprime el título
*/
function titulo(){
	$title = '<div class = "title">
                  <span style = "--l: "S";">S</span>
                  <span style = "--l: "T";">T</span>
                  <span style = "--l: "O";">O</span>
                  <span style = "--l: "R";">R</span>
                  <span style = "--l: "E";">E &nbsp;</span>
                  <span style = "--l: "K";">K</span>
                  <span style = "--l: "I";">I</span>
                  <span style = "--l: "N";">N</span>
                  <span style = "--l: "G";">G</span>
                  <span style = "--l: "S";">S</span>
             </div>';
    return $title;
}
/*
	Autor: Fabricio Vindas Hernandez
	Descripción: Función que imprime y actualiza la tabla del carrito de compras
	parametros: 
		$estado: Estado en la que se va a imprimir la tabla		
*/
function tabla_carrito($estado){
	$tabla = '	<div class = "tabla table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
				<table id="data-table-responsive" class="table table-bordered dt-responsive nowrap  bg-black">
                       <thead >
                            <tr >
							 <th class = "text-white" scope="col">C&oacute;digo</th>
							 <th class = "text-white" scope="col">Nombre</th>
							 <th class = "text-white" scope="col">Descripci&oacute;n</th>
							 <th class = "text-white" scope="col">Cantidad</th>
							 <th class = "text-white" scope="col">Precio</th>
							 <th class = "text-white" scope="col">Total</th>
                            </tr>
                       </thead>
                       <tbody>';
                       $null = true;
                       $total = 0;
                           if(!empty($_SESSION["CARRITO"])){
                           	  $null = false;
	                              foreach($_SESSION["CARRITO"] as $keys => $values){
	                                  $tabla.='
	                                    <tr class = "text-white">
	                                       <td>'.$values["codigo_producto"].'</td>
	                                       <td>'.$values["nombre_producto"].'</td>
	                                       <td>'.$values["descripcion_producto"].'</td>
	                                       <td>'.$values["cantidad"].'</td>
	                                       <td>'. "₡ ".$values["precio_producto"].'</td>
	                                       <td>'."₡ ".number_format($values["cantidad"] * $values["precio_producto"], 2).'';
	                                       if($estado == "carrito"){
	                                       	$tabla .='
	                                       	<a href="catalogo.php?accion=delete&codigoproducto='.$values["codigo_producto"].' "class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
	                                     	  ';
	                                     	}
	                                   $tabla .='
	                                       </td>
	                                    </tr>';
                                        $total = $total + ($values["cantidad"] * $values["precio_producto"]);
                                           } //end foreach
                              
                             } else{
                                    $tabla.='
                                     <td class = "bg-red-darker text-white h4"colspan="6" align="center">Actualmente no hay datos de la orden</td>';
                                   }
                                $tabla.='
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="text-center text-white"><strong>Total</strong></td>
                                        <td class="text-center text-white h4"><strong>'."₡ ".number_format($total).'</strong></td>
                                    </tr>';
                                if($estado == "carrito"){
                                 $tabla .='
			                            <tr>';
                                  if($total == null){
                            	$tabla .='
                                 <td><a href="catalogo.php" class="btn btn-warning text-dark"><i class="glyphicon glyphicon-menu-left"></i>Empiece su compra!</a></td>
                                 <td align="center"colspan="4"></td>
                                  <td><a href=""onclick="return alert("Debe ingresar elementos al carrito para proceder a pagar");" class="btn  btn-warning text-dark btn-block" disabled >Proceder a pagar <i class="glyphicon glyphicon-menu-right"></i></a></td>
                             		';
                                  }else{ 
                                 $tabla .='
                                 <td><a href="catalogo.php" class="btn btn-warning text-dark"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
                                <td align="center"colspan="4"></td>
                                <td><a href="pagos.php" class="btn  btn-warning text-dark btn-block">Proceder a pagar <i class="glyphicon glyphicon-menu-right"></i></a></td>
                                ';
                               	 } 
                                $tabla .='
                        	   </tr>
                       		 </tfoot>';
                                }
                                $tabla.='
                              </table>
                       </div>
			';
	return $tabla;
}

/*
	Autor: Fabricio Vindas Hernandez
	Descripción:  Función para visualizar el tipo de producto en el <select></select>
*/
function tipo_producto(){
	$sql = "SELECT IDE_PRODUCTO, DSC_PRODUCTO, IDE_ESTADO FROM TIENDA_TIPO_PRODUCTO";
	$resultado = mysqli_query($_SESSION["MYSQL"], $sql);

	return $resultado;
}
?>