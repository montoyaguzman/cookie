<?php

include("../../../modelo/conexion.php");

$idTip = $_REQUEST['idTip'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$link = $_REQUEST['link'];
				
$sql = "UPDATE tipsCocina SET nombre = '$nombre', descripcion  = '$descripcion', link = '$link' WHERE idTip = '$idTip';";

$actualizacion = mysqli_query($conexion,$sql);


if($actualizacion){
	echo "<br>INFORMACIÓN ACTUALIZADA CON EXITO";
}
else{
	echo "<br>NO SE PUDO ACTUALIZAR INFORMACIÓN".mysql_error();
}

?>
		