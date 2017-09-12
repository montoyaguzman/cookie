<?php

include("../../../modelo/conexion.php");

$idNegocio = $_REQUEST['idNegocio'];
$nombreNegocio = $_REQUEST['nombreNegocio'];
$giro = $_REQUEST['giro'];
$descripcion = $_REQUEST['descripcion'];
$productos = $_REQUEST['productos'];
$correo = $_REQUEST['correo'];
$paginaWeb = $_REQUEST['paginaWeb'];
$facebook = $_REQUEST['facebook'];
$twitter = $_REQUEST['twitter'];
$contacto = $_REQUEST['contacto'];
$telefonoContacto = $_REQUEST['telefonoContacto'];


if ($_FILES['imagen']['name']){
		if ($_FILES["imagen"]["error"] > 0){
		echo "<br>Ha ocurrido un error";
	} 
	else{
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 300;

		if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			$ruta = "imagenesNegocios/".$_FILES['imagen']['name'];
			
			if (!file_exists($ruta)){
		
				$resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
				
				if ($resultado){
					chmod($ruta,0777);
					$nimagen = $_FILES['imagen']['name'];
					
					$sql = "UPDATE negocios SET nombreNegocio = '$nombreNegocio', imagen  = '$nimagen', giro = '$giro', descripcion = '$descripcion', productos = '$productos', correo = '$correo', pagina = '$paginaWeb', facebook = '$facebook', twitter = '$twitter', contacto  = '$contacto', telefonoContacto = '$telefonoContacto' WHERE idNegocio = '$idNegocio';";
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
	$sql = "UPDATE negocios SET nombreNegocio = '$nombreNegocio', giro = '$giro', descripcion = '$descripcion', productos = '$productos', correo = '$correo', pagina = '$paginaWeb', facebook = '$facebook', twitter = '$twitter', contacto  = '$contacto', telefonoContacto = '$telefonoContacto' WHERE idNegocio = '$idNegocio';";
	$actualizacion = mysqli_query($conexion,$sql);
	echo "<br>".$sql."<br>";
	/*$sql = "UPDATE proveedores SET rfc = '$rfc', nombre = '$nombre', direccion = '$direccion', cp = '$cp', municipio = '$municipio', estado = '$estado', telefonoMatriz = '$telefonoMatriz', telefonoProveedor = '$telefonoProveedor', correo = '$correo', pagina = '$pagina' WHERE rfc = '$rfc'";*/


	/*_____________________________________________________________________*/
	if($actualizacion){
		echo "<br>INFORMACIÓN ACTUALIZADA CON EXITO";
	}
	else{
		echo "<br>NO SE PUDO ACTUALIZAR INFORMACIÓN".mysql_error();
					}
	}
?>
		