<?php

include("../../../modelo/conexion.php");

$idTip = $_REQUEST['idTip'];

$sql = "DELETE FROM tipsCocina WHERE idTip=$idTip;";

$borrado = mysqli_query($conexion,$sql);

	if($borrado){
		echo "<br>Tip eliminado";
	}
	else{
		echo "<br>No se puedo eliminar el tip";
	}		
?>