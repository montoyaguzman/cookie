<html>
	<head>
		<meta charset="utf-8" />
		<title>Búsqueda de Recetas</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">
	</head>	

<!-- INICIO DEL BODY -->
	<body>
		<div class="row">
        <div class="col s12">
        <div class="card-panel teal">
        	<span class="white-text"><h4><strong>Agenda de Recetas</strong></h4>
        	</span>
        </div>
        </div>
        </div>

		<!-- INICIO DE LA TABLA -->
	    <div class ="row">  			
	    	<div class = "col s10 offset-s1">
	        	<table class="responsive-table bordered highlight centered"> 
		
					<!-- PHP -->
				    <?php
					include("../../../modelo/conexion.php");

					$idVideoreceta = $_REQUEST['idVideoreceta'];

					$sql = "SELECT * FROM videoRecetas where idVideoReceta=$idVideoreceta;";
					$consulta= mysqli_query($conexion,$sql);
					
					if($datosVideoreceta = mysqli_fetch_array($consulta)){
					?>
						<!-- INICIO DE LA TABLA -->
						<tr>
							<td class="white-text blue darken-2 col s2">
								ID Videoreceta
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['idVideoReceta']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Nombre de la Videoreceta
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['nombreVideoReceta']; ?>
							</td>
						</tr>

						<tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Enlace
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['ingredientes']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Ingredientes
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['ingredientes']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tiempo de preparación
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['tiempoPreparacion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Kilocalorias
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['kilocalorias']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de alimento
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['tipoAlimento']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de platillo
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['tipoPlatillo']; ?>
								</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de comida
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['comida']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Ocasion
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['ocasion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Porciones
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['porciones']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Dificultad
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['dificultad']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">Información nutrimental</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['informacionNutrimental']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Calificación
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosVideoreceta['calificacionVideoReceta']; ?>
							</td>
						</tr>   
				</table>
			</div>
		</div>
					<!-- PHP -->
					<?php 
					}
					else{
			 			echo "<br>ERROR EN LA CONSULTA";
					} 
					?>    
  	</body>
</html>
