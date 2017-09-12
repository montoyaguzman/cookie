<?php

include("../../../modelo/conexion.php");

$idReceta = $_REQUEST['id'];
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


if ($_FILES['imagen']['name']){
		if ($_FILES["imagen"]["error"] > 0){
		echo "<br>Ha ocurrido un error";
	} 
	else{
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 300;

		if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			$ruta = "imagenesRecetas/".$_FILES['imagen']['name'];
			
			if (!file_exists($ruta)){
		
				$resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
				
				if ($resultado){
					chmod($ruta,0777);
					$nimagen = $_FILES['imagen']['name'];
					
					$sql = "UPDATE recetas SET nombreReceta = '$nombreReceta', imagen  = '$nimagen', ingredientes = '".nl2br($ingredientes)."', pasos = '$pasos', tiempoPreparacion = '$tiempoPreparacion', kilocalorias = '$kilocalorias', tipoAlimento = '$tipoAlimento', tipoPlatillo = '$tipoPlatillo', comida = '$comida', ocasion  = '$ocasion', porciones = '$porciones', dificultad = '$dificultad', informacionNutrimental = '$informacionNutrimental',tipsReceta = '$tipsReceta' WHERE idReceta = '$idReceta';";
					$actualizacion = mysqli_query($conexion,$sql);


					if($actualizacion){
						echo "<br>INFORMACIÓN ACTUALIZADA CON EXITO";
					}
					else{
						echo "<br>NO SE PUDO ACTUALIZAR INFORMACIÓN".mysql_error();
					}
				} 
				else{
					echo "<br>Ocurrio un error al mover el archivo.";
				}
			}else{
				echo $_FILES['imagen']['name'] . " este archivo existe";
			}
		} else{
			echo "<br>archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
}
else
{
	/*_____________________________________________________________________*/
	//echo "<br>prueba 1<br>";			
	$sql = "UPDATE recetas SET nombreReceta = '$nombreReceta', ingredientes = '$ingredientes', pasos = '$pasos', tiempoPreparacion = '$tiempoPreparacion', kilocalorias = '$kilocalorias', tipoAlimento = '$tipoAlimento', tipoPlatillo = '$tipoPlatillo', comida = '$comida', ocasion  = '$ocasion', porciones = '$porciones', dificultad = '$dificultad', informacionNutrimental = '$informacionNutrimental',tipsReceta = '$tipsReceta' WHERE idReceta = '$idReceta';";
	$actualizacion = mysqli_query($conexion,$sql);
	//echo "<br>".$sql."<br>";
	/*$sql = "UPDATE proveedores SET rfc = '$rfc', nombre = '$nombre', direccion = '$direccion', cp = '$cp', municipio = '$municipio', estado = '$estado', telefonoMatriz = '$telefonoMatriz', telefonoProveedor = '$telefonoProveedor', correo = '$correo', pagina = '$pagina' WHERE rfc = '$rfc'";*/


	/*_____________________________________________________________________*/
	if($actualizacion){
		echo "<br>INFORMACIÓN ACTUALIZADA CON EXITO";
		header("Refresh: 1; url = 0_agendaRecetas.php");
	}
	else{
		echo "<br>NO SE PUDO ACTUALIZAR INFORMACIÓN".mysql_error();
					}
	}
?>
		