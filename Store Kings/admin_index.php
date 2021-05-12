<?php
	//inicio de session
	session_start();

	include("config/config.php");

	include (CONFIG_PATH_INC.'head.php');

	include (CONFIG_PATH_INC.'session_admin.php');
			
	include(CONFIG_PATH_RDN."rdn_admin_index.php");

	include (CONFIG_PATH_INC.'js.php');		
?>