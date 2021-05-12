<?php
/*
	Autor: Fabricio Vindas Hernandez 
	
	Descripción: Este archivo es correspondiente al catalogo del cliente, puede añadir los datos al carrito de ser necesario
	
	Historial de modificaciones
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	10/02/2021		Fabricio Vindas			Creación del archivo

*/
	
	// $res_productos = ver_productos();
		$registro_por_pagina = 3;
    $numeroPagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $primerRegistro = ($numeroPagina-1)*$registro_por_pagina;

    $sql = "SELECT * FROM tienda_productos order by DSC_CODIGO DESC LIMIT $primerRegistro, $registro_por_pagina";
    $res_productos = mysqli_query($_SESSION["MYSQL"], $sql);

    $query = "SELECT DSC_CODIGO,DSC_IMAGEN,DSC_NOMBRE,NUM_PRECIO,DSC_DESCRIPCION FROM TIENDA_PRODUCTOS ORDER BY DSC_CODIGO DESC";
    $res = mysqli_query($_SESSION["MYSQL"], $query);
    $total_productos = mysqli_num_rows($res);
    $totalPaginas = ceil($total_productos/$registro_por_pagina);
    
     // $total = "SELECT count(*) TOTAL FROM tienda_productos";
     // $res_total = mysqli_query($_SESSION["MYSQL"], $total);

		 if(isset($_POST["btn_añadir"])){
		        if(isset($_SESSION["CARRITO"])){   
		           $item_array_id = array_column($_SESSION["CARRITO"], "codigo_producto");
		               if(!in_array($_GET["codigoproducto"], $item_array_id)){
		                   $count = count($_SESSION["CARRITO"]);
		                   $item_array = array(
		                    'codigo_producto' => $_GET["codigoproducto"],
		                    'descripcion_producto' => $_POST["descripcion_producto"],
		                    'nombre_producto' => $_POST["hidden_nombre"],
		                    'precio_producto' => $_POST["hidden_precio"],
		                    'cantidad' => $_POST["cantidad"]
		                    );
		                   $_SESSION["CARRITO"][$count] = $item_array;
		                   ?>
		                   <script>
		                   	alert('Producto agregado al carrito de compras');
		                   setTimeout("location.href='carrito.php'",1000);
		               	   </script>
				 	<?php
		             }else{
		               echo '<script>alert("El producto ya se encuentra agregado")</script>';
		               }
		       }else{
		        $item_array = array(
		        'codigo_producto' => $_GET["codigoproducto"],
		        'descripcion_producto' => $_POST["descripcion_producto"],
		        'nombre_producto' => $_POST["hidden_nombre"],
		        'precio_producto' => $_POST["hidden_precio"],
		        'cantidad' => $_POST["cantidad"]
		        );
		        $_SESSION["CARRITO"][0] = $item_array;
		        }
	    }

	    if(isset($_GET["accion"])){
	        if($_GET["accion"] == "delete"){
	            foreach($_SESSION["CARRITO"] as $keys => $values){
	                if($values["codigo_producto"] == $_GET["codigoproducto"]){
	                unset($_SESSION["CARRITO"][$keys]);
	                echo '<script>alert("Producto eliminado")</script>';
	                echo '<script>window.location="catalogo.php"</script>';
	                }
	            }
	        }
	    }

	include(CONFIG_PATH_GUI.'gui_catalogo.php');
?>