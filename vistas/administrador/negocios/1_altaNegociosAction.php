<?php

//echo "<br> IMAGEN: ".$_FILES['imagen']['name']."<br>";

include("../../../modelo/conexion.php");

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

/*echo "<br>".$nombreNegocio;
echo "<br>".$giro;
echo "<br>".$descripcion;
echo "<br>".$productos;
echo "<br>".$correo;
echo "<br>".$paginaWeb;
echo "<br>".$facebook;
echo "<br>".$twitter;
echo "<br>".$contacto;
echo "<br>".$telefonoContacto;
echo "<br>".$_FILES['imagen']['name'];
*/
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
				
				$sql = "INSERT INTO negocios (nombreNegocio,imagen,descripcion,giro,productos,correo,pagina,facebook,twitter,contacto,telefonoContacto) VALUES ('$nombreNegocio','$nimagen','$descripcion','$giro','$productos','$correo','$paginaWeb','$facebook','$twitter','$contacto','$telefonoContacto');";

				echo "<br>".$sql;

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
}
?>