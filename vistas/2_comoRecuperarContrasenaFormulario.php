  <html>
	<head>
		<meta charset="utf-8" />
		<title>Registro de usuario</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		
		<!-- Importar jQuery -->
		<script src="/estilos/materialize/js/jquery-2.2.1.min.js"></script>

		<!-- COLOR DE ICONOS -->
		<style type="text/css">
			i{
				color:#2196f3;
			}
		</style>

	</head>  

  	<!-- INICIO DEL BODY -->
	<body>
	
	<main>
		<!-- PANEL -->
		<?php include("panel.php"); ?>

		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12 m12 s12">
					<div class="row">
			    		<form class="col l12 m12 s12" method="post" enctype="multipart/form-data" id="formulario" name="formulario">
			    			<div class="card-panel brown darken-3">
		       					<span class="white-text center-align"><h5><strong>Llene los datos para recuperar su contrseña</strong></h5></span>
							</div>
							<br>
				            <div class="row">
				            	<div class="input-field col l6 offset-l3 m8 offset-m2 s12">
				            		<i class="fa fa-envelope material-icons prefix" aria-hidden="true"></i>
						        	<input id="email" name = "email" type="email" class="validate">
						        	<label for="email" data-error="dirección inválida" data-success="dirección válida">Correo</label>
							   
				           		</div>
				           		<div class="row"></div>
				           		<div class="row">
				           			<div class="col l6 offset-l3">
				           				
				           				
				           				<button class="waves-effect waves-light btn orange darken-4" id="enviar" name="enviar">Enviar</button> 
				           								           				<!--
				           				<a class="btn" id="registrar" name="registrar">
				           				Registar
				           				</a>
										-->

				           			</div>	
				           		</div>   	
				      		</div>
			      		</form>
			      	</div>
			    </div>  	
      		</div>
      	</div>


    </main>

	</body>
		<?php include("piePagina.php"); ?>
</html>	

        
	