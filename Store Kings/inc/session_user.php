<?php
		 if(!empty($_SESSION["USUARIO"]["PAGINA"]) && $_SESSION["USUARIO"]["PAGINA"] != "index.php" && $_SESSION["USUARIO"]["PAGINA"] != "registro.php"){
			if(!isset($_SESSION["USUARIO"]["CLIENTE"])){
				?>
				<script type="text/javascript">
					alert("Porfavor ingrese primero al sistema")
					window.location="index.php";
				</script>
				<?php
			}
		}

?>