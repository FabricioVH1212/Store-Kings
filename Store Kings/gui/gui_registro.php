<link rel = "stylesheet" href = "css/css_login.css">
    <center><img data-src="img/Storekings.png" class = "" height="200px;" width="300px;"></center>
    <!-- begin login-box -->
    <div class="login-box " id = "registro" >
      <h1>Ingrese sus datos</h1>
          <form name="f-registro" action="registro.php" method = "POST">
                <!-- IDENTIFICACION INPUT -->
                <label for="ide">N&uacute;mero de identificaci&oacute;n</label>
                <input type="text" placeholder="Ingrese el numero de identificaci&oacute;n" name = "txt_num_ide" id="txt_num_ide">
                <!-- NOMBRE INPUT -->
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Ingrese el nombre" name = "txt_nombre" id="txt_nombre">
                <!-- APELLIDOS INPUT -->
                <label for="apellidos">Apellidos</label>
                <input type="text" placeholder="Ingrese los apellidos" name = "txt_apellidos" id="txt_apellidos"> 
                <!-- CORREO INPUT -->
                <label for="correo">Correo el&eacute;ctronico</label>
                <input type="text" placeholder="Ingrese el correo" name = "txt_correo" id="txt_correo"> 
                <!-- PASSWORD INPUT -->
                <label for="password">Contrase&ntilde;a</label>
                <input type="password" placeholder="Ingrese la contrase&ntilde;a" name = "txt_contrasena" id="txt_contrasena">
                <!-- CONFIRMAR INPUT -->
                <label for="confirmar">Confirme contrase&ntilde;a</label>
                <input type="password" placeholder="Ingrese la contrase&ntilde;a" name = "txt_confirm" id="txt_confirm">
                <!-- USERNAME INPUT -->
                <label for="postal">C&oacute;digo postal</label>
                <input type="text" placeholder="Ingrese el c&oacute;digo postal" name = "txt_postal" id="txt_postal"> 
                <!-- TELEFONO INPUT -->
                <label for="telefono">Tel&eacute;fono</label>
                <input type="text" placeholder="Ingrese tel&eacute;fono" name = "txt_telefono" id="txt_telefono">
                <!-- begin checkbox -->
                <div class="checkbox checkbox-css m-b-30">
                    <!-- begin checkbox -->
        			 <div class="checkbox checkbox-css m-b-30">
        				 <input type="checkbox" id="agreement_checkbox" value="">
        				  <label for="agreement_checkbox">Al hacer click en Registrarse, acepta nuestros <a href="javascript:;">T&eacute;rminos</a> y ha le&iacute;do nuestra <a href="javascript:;">Pol&iacute;tica de datos</a>, incluido nuestro Uso de cookies.</label>
        			</div>
                    <!-- end checkbox -->
        		</div>
                <!-- end checkbox -->
                <input type="submit" name = "btn_registro" onclick="return validar_datos('registro')" value="Registrarse">
        		<h4 class = "text-white">¿Ya eres usuario? Click <a href="index.php">aqu&iacute;</a> para ingresar.</h4>
        </form>
    </div>
    <!-- end login-box -->
