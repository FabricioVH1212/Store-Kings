<?php
include "inc/Sajax.php";
$sajax_request_type = "GET";
sajax_init();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="img/Storekings.png">
	<link rel="apple-touch-icon" href="img/Storekings.png"> 	
	<title>Store Kings</title>
    <script><?php sajax_show_javascript();?></script>	
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<!-- ================== BEGIN BASE SEO TAGS ================== -->
	<meta content="autor" name="Fabricio Vindas Hernandez"/>
	<meta content="copyright" name="Fabricio Vindas Hernandez"/>
	<meta content="Store Kings es una tienda de ropa virtual,nosotros hacemos que se vista como un rey y lo mejor de todo a excelentes precios.." name="description"/>
	<meta content="keywords" name="Tienda de reyes, Vista como un rey, Moda, Comprar online en internet, Tienda Virtual"/>
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta http-equiv="expires" content="0"/>
	<meta http-equiv="expires" content="43200"/>
	<!-- ================== END BASE SEO TAGS ================== -->
	<!-- ================== BEGIN FONTAWESOME CSS STYLE ================== -->
	<link href="<?= ROOT?>assets/plugins/font-awesome/css/all.css" rel="stylesheet"/>
	<!-- ================== END FONTAWESOME CSS STYLE ================== -->

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/css/default/style.min.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<!-- <link href="<?= ROOT?>assets/css/default/theme/default.css" rel="stylesheet" id="theme" /> -->
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- BEGIN TEMPLATE MAIN CSS FILE-->
	<link href="<?= ROOT?>Store Kings/css/sass/style.css" rel = "stylesheet">
	<link href="<?= ROOT?>Store Kings/css/css_tablas.css" rel = "stylesheet">
	<link href="<?= ROOT?>Store Kings/css/css_footer.css" rel = "stylesheet">
	<link href="<?= ROOT?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
 	<link href="<?= ROOT?>assets/plugins/animate/animate.min.css" rel="stylesheet">
 	<link href="<?= ROOT?>assets/plugins/venobox/venobox.css" rel="stylesheet">

	<!-- END TEMPLATE MAIN CSS FILE-->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?= ROOT?>assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->	

	<!-- include the script -->
	<script src="<?= ROOT?>alertifyjs/alertify.min.js"></script>
	<!-- include the style -->
	<link rel="stylesheet" href="<?= ROOT?>alertifyjs/css/alertify.min.css" />
	<!-- include a theme -->
	<link rel="stylesheet" href="<?= ROOT?>alertifyjs/css/themes/default.min.css" />	

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?= ROOT?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css"rel="stylesheet"/>
	<link href="<?= ROOT?>/assets/plugins/bootstrap-select/bootstrap-select.min.css"rel="stylesheet"/>
	<link href="<?= ROOT?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet"/>
	<link href="<?= ROOT?>assets/plugins/bootstrap-social/bootstrap-social.css"rel="stylesheet">
	<link href="<?= ROOT?>assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css"rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css"rel="stylesheet"/>
	<link href="<?= ROOT?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
	<link href="<?= ROOT?>assets/plugins/flag-icon/css/flag-icon.css"rel="stylesheet">
	<link href="<?= ROOT?>assets/plugins/flag-icon/css/flag-icon.min.css"rel="stylesheet">
  	<!-- <link href="<?= ROOT?>assets/sweetalert2/dist/sweetalert2.min.css"rel="stylesheet"> -->
	<link href="<?= ROOT?>assets/node_modules/@sweetalert2/theme-dark/dark.css"rel="stylesheet">

	<!-- ================== END PAGE LEVEL STYLE ================== -->	

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?= ROOT?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
	<link href="<?= ROOT?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
	<!-- ================== END PAGE LEVEL STYLE ================== -->	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= ROOT?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE CSS STYLE ================== -->
	<link href="../assets/plugins/bootstrap-wysihtml5/src/bootstrap3-wysihtml5.css"rel="stylesheet"/>
	<!-- ================== END PAGE CSS STYLE ================== -->	
</head>
<body style="background-image: url('img/StoreKings-logo.jpg');background-size: 10%">  
