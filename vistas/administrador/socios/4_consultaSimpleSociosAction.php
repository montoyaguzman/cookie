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

					$idReceta = $_REQUEST['idReceta'];

					$sql = "SELECT * FROM recetas where idReceta=$idReceta;";
					$consulta= mysqli_query($conexion,$sql);
					
					if($datosReceta = mysqli_fetch_array($consulta)){
					?>
						<!-- INICIO DE LA TABLA -->
						<tr>
							<td class="white-text blue darken-2 col s2">
								ID Receta
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['idReceta']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Nombre de la receta
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['nombreReceta']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Imagen
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<div class="row push-s2">
									<div class="col s6 m5">
						            	<div class="card-panel teal" align="center">
						            		<img class = "responsive-img" id="vistaPrevia" src="<?php echo "imagenesRecetas/".$datosReceta['imagen']; ?>"/>
										</div>
									</div>
								</div>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Ingredientes
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['ingredientes']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Pasos
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['pasos']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tiempo de preparación
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['tiempoPreparacion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Kilocalorias
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['kilocalorias']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de alimento
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['tipoAlimento']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de platillo
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['tipoPlatillo']; ?>
								</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Tipo de comida
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['comida']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Ocasion
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['ocasion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Porciones
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['porciones']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Dificultad
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['dificultad']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">Información nutrimental</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['informacionNutrimental']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Tips
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['tipsReceta']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Calificación
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['calificacionReceta']; ?>
							</td>
						</tr>

						<tr>
						 	<td class="white-text blue darken-2 col s2">
						 		Anunciante
						 	</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosReceta['anuncio']; ?>
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
