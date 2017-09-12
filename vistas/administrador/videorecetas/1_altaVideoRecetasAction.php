<?php

//echo "<br> IMAGEN: ".$_FILES['imagen']['name']."<br>";

include("../../../modelo/conexion.php");

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

/*echo "<br>".$nombreVideoreceta;
echo "<br>".$link;
echo "<br>".$ingredientes;
echo "<br>".$tiempoPreparacion;
echo "<br>".$kilocalorias;
echo "<br>".$tipoAlimento;
echo "<br>".$tipoPlatillo;
echo "<br>".$comida;
echo "<br>".$ocasion;
echo "<br>".$porciones;
echo "<br>".$dificultad;
echo "<br>".$informacionNutrimental;*/

				
$sql = "INSERT INTO videoRecetas(nombreVideoReceta,link,ingredientes,tiempoPreparacion,kilocalorias,tipoAlimento,tipoPlatillo,comida,ocasion,porciones,dificultad,informacionNutrimental) VALUES ('$nombreVideoreceta','$link','$ingredientes','$tiempoPreparacion','$kilocalorias','$tipoAlimento','$tipoPlatillo','$comida','$ocasion','$porciones','$dificultad','$informacionNutrimental');";
	
	echo "<br>".$sql;

	$alta = mysqli_query($conexion,$sql);

	if($alta){
		echo "<br>INFORMACIÓN REGISTRADA CON EXITO";
		header("Refresh: 1; url = 0_agendaVideorecetas.php");
	}
	else{
		echo "<br>NO SE PUDO INSERTAR REGISTRO".mysql_error();
	}
?>