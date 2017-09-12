<?php

include("../modelo/conexion.php");

$email = $_REQUEST['email'];
$nombreUsuario = $_REQUEST['nombreUsuario'];
$contrasena1 = $_REQUEST['contrasena1'];
$contrasena2 = $_REQUEST['contrasena2'];

/*echo $email."<br>";
echo $nombreUsuario."<br>";
echo $contrasena1."<br>";
echo $contrasena2."<br>";*/

if ($contrasena1 == $contrasena2)
{	
	$contrasena = $contrasena1;
	
	$sql = "INSERT INTO usuarios(correo,nombreUsuario,contrasena) VALUES ('$email','$nombreUsuario','$contrasena');";
	$alta = mysqli_query($conexion,$sql);
	
	if($alta){
		echo "<br>INFORMACIÓN REGISTRADA CON EXITO";
	}
	else{
		echo "<br>NO SE PUDO INSERTAR REGISTRO".mysql_error();
	}
	echo $sql;
}

else
{
	echo "Las contraseñas no coinciden";
	header("Refresh: 1; url = 4_registroFormulario.shtml");
}
?>