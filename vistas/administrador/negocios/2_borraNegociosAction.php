<?php

include("../../../modelo/conexion.php");

$idNegocio = $_REQUEST['idNegocio'];
//echo "<br>".$idReceta;
$sql = "DELETE FROM negocios WHERE idNegocio=$idNegocio;";
//echo "<br>".$sql;
$borrado = mysqli_query($conexion,$sql);

	if($borrado){
		echo "<br>Receta eliminada";
	}
	else{
		echo "<br>No se puedo eliminar esa receta";
	}		
?>