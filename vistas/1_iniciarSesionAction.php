<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<title>Iniciar sesión -- Cookie Chef</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<style type="text/css">
			.caja { float:left;margin-left:5px; }
		</style>
	</head> 
	<body>

		<?php
			include("../modelo/conexion.php");

			$email = $_REQUEST['email'];
			$contrasena = $_REQUEST['contrasena'];

			//echo $email."<br>";
			//echo $contrasena."<br>";

			$sql = "SELECT * FROM usuarios WHERE correo = '$email'";

			$consulta = mysqli_query ($conexion,$sql);
			$datosUsuario = mysqli_fetch_array($consulta);
		
			if ($contrasena == $datosUsuario['contrasena'])
			{ 
		?>
			<div class="card-panel orange darken-4">
				<span class="white-text"><h5><strong>Sesion Exitosa</strong></h5></span>
			</div>	
		<?php
			if ($email == "admin@admin.com"){
				header("Refresh: 3; url = administrador/administrador.php");
			}
			else
			{
				header("Refresh: 3; url = principal.php");
			}

			session_start();
			$_SESSION ['email'] = $email;

		}
		else{
		?>	
			<div class="card-panel orange darken-4">
				<span class="white-text"><h5><strong>Usuario o contrasena incorrecto</strong></h5></span>
			</div>
		<?php	
			header("Refresh: 3; url = 1_iniciarSesionFormulario.php");
		}		
		?>

	</body>
</html>