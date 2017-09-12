<?php

include("../../../modelo/conexion.php");

$idVideoreceta = $_REQUEST['idVideoreceta'];
//echo "<br>".$idReceta;
$sql = "DELETE FROM videoRecetas WHERE idVideoReceta=$idVideoreceta;";
echo "<br>".$sql;
$borrado = mysqli_query($conexion,$sql);

	if($borrado){
		echo "<br>Receta eliminada";
	}
	else{
		echo "<br>No se puedo eliminar esa receta";
	}		
?>