<?php

//echo "<br> IMAGEN: ".$_FILES['imagen']['name']."<br>";

include("../../../modelo/conexion.php");

$nombreReceta = $_REQUEST['nombreReceta'];
$ingredientes = $_REQUEST['ingredientes'];
$pasos = $_REQUEST['pasos'];
$tiempoPreparacion = $_REQUEST['tiempoPreparacion'];
$kilocalorias = $_REQUEST['kilocalorias'];
$tipoAlimento = $_REQUEST['tipoAlimento'];
$tipoPlatillo = $_REQUEST['tipoPlatillo'];
$comida = $_REQUEST['comida'];
$ocasion = $_REQUEST['ocasion'];
$porciones = $_REQUEST['porciones'];
$dificultad = $_REQUEST['dificultad'];
$informacionNutrimental = $_REQUEST['informacionNutrimental'];
$tipsReceta = $_REQUEST['tipsReceta'];

if ($_FILES["imagen"]["error"] > 0){
	echo "<br>Ha ocurrido un error";
} 
else{
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 500;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		$ruta = "imagenesRecetas/".$_FILES['imagen']['name'];
		
		if (!file_exists($ruta)){
	
			$resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
			
			if ($resultado){
				//chmod($ruta,0777);
				$nimagen = $_FILES['imagen']['name'];
				
				$sql = "INSERT INTO recetas (nombreReceta,imagen,ingredientes,pasos,tiempoPreparacion,kilocalorias,tipoAlimento,tipoPlatillo,comida,ocasion,porciones,dificultad,informacionNutrimental,tipsReceta) VALUES ('$nombreReceta','$nimagen','$ingredientes','$pasos','$tiempoPreparacion','$kilocalorias','$tipoAlimento','$tipoPlatillo','$comida','$ocasion','$porciones','$dificultad','$informacionNutrimental','$tipsReceta');";

				$alta = mysqli_query($conexion,$sql);


				if($alta){
					echo "<br>INFORMACIÓN REGISTRADA CON EXITO";
				}
				else{
					echo "<br>NO SE PUDO INSERTAR REGISTRO".mysql_error();
				}
			} 
			else {
				echo "<br>Ocurrio un error al mover el archivo.";
			}
		}else{
			echo $_FILES['imagen']['name'] . " este archivo existe";
		}
	}else{
		echo "<br>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
	header("Refresh: 1; url = 0_agendaRecetas.php");
}

//echo "<br>".$_FILES['imagen']['name'];
?>