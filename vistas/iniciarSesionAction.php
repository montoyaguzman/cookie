<?php

include("../modelo/conexion.php");

$email = $_REQUEST['email'];
$contrasena = $_REQUEST['contrasena'];
	
$sql = "SELECT * FROM usuarios WHERE correo='$email'";
$consulta= mysqli_query($conexion,$sql);;
$datosUsuario = mysqli_fetch_array($consulta);

//echo "s";

if ($contrasena == $datosUsuario['contrasena'])
{
	echo "HAS INICIADO SESIÓN ".$datosUsuario['nombreUsuario'];
	header("Refresh: 1; url = index.php");
}
else
{
	echo "Usuario/contraseña inválidos";
}

	session_start();
	$_SESSION ['user'] = $datosUsuario['nombreUsuario'];

?>		