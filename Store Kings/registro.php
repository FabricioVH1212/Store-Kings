<?php

	session_start();

	include("config/config.php");

	include (CONFIG_PATH_INC.'head.php');

	include (CONFIG_PATH_INC.'session_user.php');
			
	include(CONFIG_PATH_RDN."rdn_registro.php");

	include (CONFIG_PATH_INC.'js.php');	

?>