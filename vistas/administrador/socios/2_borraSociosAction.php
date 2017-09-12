<?php

include("../../../modelo/conexion.php");

$idReceta = $_REQUEST['idReceta'];
//echo "<br>".$idReceta;
$sql = "DELETE FROM recetas WHERE idReceta=$idReceta;";
//echo "<br>".$sql;
$borrado = mysqli_query($conexion,$sql);

	if($borrado){
		echo "<br>Receta eliminada";
	}
	else{
		echo "<br>No se puedo eliminar esa receta";
	}		
?>