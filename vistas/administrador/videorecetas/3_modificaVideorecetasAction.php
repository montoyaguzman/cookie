<?php

include("../../../modelo/conexion.php");


$idVideoreceta = $_REQUEST['idVideoreceta'];
$nombreVideoreceta = $_REQUEST['nombreVideoreceta'];
$link = $_REQUEST['link'];
$ingredientes = $_REQUEST['ingredientes'];
$tiempoPreparacion = $_REQUEST['tiempoPreparacion'];
$kilocalorias = $_REQUEST['kilocalorias'];
$tipoAlimento = $_REQUEST['tipoAlimento'];
$tipoPlatillo = $_REQUEST['tipoPlatillo'];
$comida = $_REQUEST['comida'];
$ocasion = $_REQUEST['ocasion'];
$porciones = $_REQUEST['porciones'];
$dificultad = $_REQUEST['dificultad'];
$informacionNutrimental = $_REQUEST['informacionNutrimental'];


$sql = "UPDATE videoRecetas SET nombreVideoreceta = '$nombreVideoreceta', link = '$link', ingredientes = '$ingredientes', tiempoPreparacion = '$tiempoPreparacion', kilocalorias = '$kilocalorias', tipoAlimento = '$tipoAlimento', tipoPlatillo = '$tipoPlatillo', comida = '$comida', ocasion  = '$ocasion', porciones = '$porciones', dificultad = '$dificultad', informacionNutrimental = '$informacionNutrimental' WHERE idVideoReceta = '$idVideoreceta';";

echo "<br>".$sql;
	
$actualizacion = mysqli_query($conexion,$sql);

if($actualizacion){
	echo "<br>INFORMACIÓN ACTUALIZADA CON EXITO";
}
else{
	echo "<br>NO SE PUDO ACTUALIZAR INFORMACIÓN";
}

?>
		