<!DOCTYPE HTML>
  <html>
	<head>
		<meta charset="utf-8" />
		<title>Iniciar sesión -- Cookie Chef</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">

		<style type="text/css">
			.caja { float:left;margin-left:5px; }
		</style>



	</head>  

  	<!-- INICIO DEL BODY -->
	<body>
	
	<main>
		<!-- PANEL -->
		<?php 
			include("panel.php"); 
		?>

	    <!-- PRIMER CONTENEDOR -->
	    <div class="row">
		    <!-- ROW PRINCIPAL-->
		    <div class="card-panel z-depth-4 col s10 offset-s1 m10 offset-m1 l10 offset-l1">
				<!-- ROW 1-->
				<div class="col l4">
					<div class="input-field">
						<h5><span class="blue-text text-darken-3"><strong>Bienvenido - Iniciar sesión</strong></span></h5>
			    	</div>
			    	<!-- FORMULARIO -->
			    	<div class="row">
				    	<form method="post" action="1_iniciarSesionAction.php">
					    	<br>
					    	<div class="row">
						    	<div class="input-field">
							        <input id="email" name="email" type="text" class="validate">
							        <label for="email" class="activate">Correo</label>
							    </div>
							</div>
							<div class="row">    
							    <div class="input-field">
							        <input id="contrasena" name="contrasena" type="password" class="validate">
							       	<label for="contrasena" class="activate">Contraseña</label>
							    </div>
							</div>    
						    <div class="row"></div>
		            			<button class="waves-effect waves-light btn orange darken-4" id="ingresar" name="ingresar">Ingresar</button>
				        </form>
				    </div>

					<!-- <div>
				     	<a class="waves-effect waves-light btn blue darken-4" href="#">
					    	<span>Ingresar con Facebook</span> 
					    	<i class="fa fa-facebook-square"></i>
				        </a>
				    </div>
				    <br>
				    <div>
				    <a class="waves-effect waves-light btn red darken-4" href="#">
					    	<span>Ingresar con Google+</span> 
					    	<i class="fa fa-google-plus"></i>
				    </a>
				    </div> -->
				    <br>
				    <br>
				    <div>
				    	<a href="4_registroFormulario.php"><h5><span><strong>Registrarse</strong></span></h5></a>
				    </div>
				    
				    <div>
				    	<a href="2_comoRecuperarContrasenaFormulario.php"><h5><span><strong>¿Olvidaste tu contraseña?</strong></span></h5></a>
				    </div>  	
		        <br>
				</div>
				<!-- ROW 2-->
				<div class="col l6 offset-l2">
					<div class="card-panel">
						<h5 class="center-align"><span class="blue-text text-darken-3"><strong>Lleva tu cocina a todas partes:</strong></span></h5>
								
						<div class="row">
							<div class="col s8 m4 l4 offset-s2 offset-m4 offset-l4">
								<img alt="cookie" class="responsive-img materialboxed" src="media/imagenes/app.jpg" width="300" height="600">
							</div>
						</div>
						
						<div class="center-align col s12">
							<div class="col s4">
								<a href="#">
									<i class="fa fa-windows">
										<span class="black-text black-text hide-on-small-only"><strong>Windows phone</strong></span>
									</i>
								</a>	
							</div>

							<div class="col s4">
								<a href="#">
									<i class="fa fa-android">
										<span class="black-text black-text hide-on-small-only"><strong> Android</strong></span>
									</i>
								</a>	
							</div>

							<div class="col s4">
								<a href="#">
									<i class="fa fa-apple">
										<span class="black-text black-text hide-on-small-only"><strong> iOS</strong></span>
									</i>
								</a>	
							</div>
						</div>
						<br>

					</div>
				</div>
				<br>	
			</div>
	</div>
	<!-- FIN ROW PRINCIPAL-->
    </main>

    <!--#include file='piePagina.shtml' -->

	</body>
</html>	

        