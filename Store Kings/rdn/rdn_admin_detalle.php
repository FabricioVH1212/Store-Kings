<?php
/*
	Autor: Fabricio Vindas Hernandez
	
	Descripción: Este archivo observar el detalle de facturación
	
	Fecha			Nombre					Resumen de Revisión
	--------		--------------			---------------------
	05/03/2021		Fabricio Vindas			Creación del archivo

*/
	$res_factura = detalle_cliente();
	$res_detalle = detalle_factura();
	
	include(CONFIG_PATH_GUI.'gui_admin_detalle.php');
?>