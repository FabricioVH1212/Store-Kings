<?php
$usuario = "root";
$contrasena = "";  
$servidor = "localhost";
$basededatos = "Store Kings";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

mysqli_set_charset($conexion,"utf8");

//$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$_SESSION["MYSQL"] = $conexion;
/*$sql = "SELECT DSC_GRADO FROM UCA_GRADO";
$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
   while($row = mysqli_fetch_array($resultado)) {
            echo $row["DSC_GRADO"];
    }*/
?>