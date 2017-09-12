<?php

	$servidor = "localhost";
	$usuario = "root";
	$contrasena = "4589";
	$bd = "cookiebdd";

	$conexion = mysqli_connect($servidor,$usuario,$contrasena);
	$resultado = mysqli_select_db($conexion,$bd);

	/*if ($conexion){
		echo "Conexión Exitosa<br>";
		if($resultado){
			echo "<br>Selección de BD correcta";
		}
		else{
			echo "<br>No fue posible seleccionar la BD";
		} 
	}
	else{
		echo "<br>Conexión fallida";
	}*/

?>
