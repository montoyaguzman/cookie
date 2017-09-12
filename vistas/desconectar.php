<?php 
session_start();

if ($_SESSION['user'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "1_iniciarSesionFormulario.php"
	</script>';
}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión, por favor inicie sesion aqui")
	self.location = "http://localhost/videoMania/registros/iniciarSesion.html"
	</script>';
}
?>



