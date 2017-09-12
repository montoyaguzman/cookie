<?php

include("../../../modelo/conexion.php");

$nombre = $_REQUEST['nombre'];
$link = $_REQUEST['link'];
$descripcion = $_REQUEST['descripcion'];

$sql = "INSERT INTO tipsCocina(nombre,descripcion,link) VALUES ('$nombre','$descripcion','$link');";
	
	$alta = mysqli_query($conexion,$sql);

	if($alta){
		echo "<br>INFORMACIÓN REGISTRADA CON EXITO";
	}
	else{
		echo "<br>NO SE PUDO INSERTAR REGISTRO".mysql_error();
	}
?>