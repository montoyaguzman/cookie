<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Receta</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize2.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="estilos/angular-1.5.3/angular-animate.min.js"></script>
		<script src="estilos/inicializacion.js"></script>

		<style type="text/css" media="screen">
  			@import 'estilos/estrellas.css';
		</style>

	</head>  

	<body>

	<?php 
		include("../modelo/conexion.php");

		$idReceta = $_REQUEST['idReceta'];

		$sql = "SELECT * FROM recetas WHERE idReceta=$idReceta";
  		$consulta= mysqli_query($conexion,$sql);
		
		//$ruta = "/administrador/recetas/imagenesRecetas/".$datosReceta['imagen'];
		$datosReceta = mysqli_fetch_array($consulta);
	?>	



		<main>
		
		<?php
			include ("panel.php");	
 			include ("6_menu.php");
 		?>	
 			
 		<!-- TITULO -->
 		<div class="row">
 			<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
		       	<div class="card-panel brown darken-3 l10 m10 s10">
		       		<span class="white-text center-align"><h5><?php echo "".$datosReceta['nombreReceta'].""; ?></h5></span>
				</div>
	    	</div>
	    </div>


	    
		<!--CONTENIDO-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12 m12 s12">
	    		
	    		<div>
	    			<span class="blue-text text-darken-4">
	    				<h5 class="center-align"><strong>¡Cocinemos juntos!</strong></h5>
	    			</span>
	    		</div>

	    		<!-- VISTA DE LA RECETA -->
				<div class="col l6 m8 s12 offset-l3 offset-m2">
			    	<div class="card">
					    <div class="card-image text-black">
						    <a href = "<?php echo "19_receta.php?idReceta=".$datosReceta['idReceta'].""; ?>" >
						        <img src="<?php echo "administrador/recetas/imagenesRecetas/".$datosReceta['imagen']; ?>" width="400" height="280">
						    </a>
						</div>
					</div>
				</div>	

				<div class="col l6 m8 s12 offset-l3 offset-m2">
			    	<div class="card">
					    <div class="card-image text-black">
						        <img src="media/imagenes/libre.jpg" width="400" height="280">
						</div>
					</div>
				</div>

				<div class="col l4 offset-l4">	
					<h6 class="center-align">
					    <strong>
					     	Popularidad
					    </strong>
					</h6>
				
				<div class="col l4 offset-l4">	
				<form>
					<div class="clasificacion">
					  	<input id="radio1" type="radio" name="puntuacion1" value="5">
							<label id="puntuacion" for="radio1">★</label>
						<input id="radio2" type="radio" name="puntuacion2" value="4">
							<label id="puntuacion" for="radio2">★</label>
						<input id="radio3" type="radio" name="puntuacion3" value="3">
							<label id="puntuacion" for="radio3">★</label>
						<input id="radio4" type="radio" name="puntuacion4" value="2">
							<label id="puntuacion" for="radio4">★</label>
						<input id="radio5" type="radio" name="puntuacion5" value="1">
							<label id="puntuacion" for="radio5">★</label>
					</div>
				</form>
				</div>
						<div class="col l12 m12 s12 progress red"></div>
				</div>

				<div class="row">
					<div class="col l12">
						<div class="col l4">
							<h6 class="center-align">
							    <strong>
							        Tiempo de preparación: <?php echo "".$datosReceta['tiempoPreparacion'].""; ?> minutos
							    </strong>
							</h6>
						</div>
						<div class="col l4">	
							<h6 class="center-align">
							    <strong>
							        Kilocalorías: <?php echo "".$datosReceta['kilocalorias'].""; ?>
							    </strong>
							</h6>
						</div>
						<div class="col l4">	
							<h6 class="center-align">
							    <strong>
							        Porciones: <?php echo "".$datosReceta['porciones'].""; ?>
							    </strong>
							</h6>
						</div>

						<div class="col l12 m12 s12 progress black"></div>

						<div class="row">
							<div class="col l12">
							<br>
								<h4><strong>Ingredientes</strong></h4>
								<div class="col l12 m12 s12 progress blue"></div>
								<p><?php echo "".nl2br($datosReceta['ingredientes'].""); ?></p>
							</div>
							<div class="col l12">
							<br>
								<h4><strong>Preparación</strong></h4>
								<div class="col l12 m12 s12 progress blue"></div>
								<p><?php echo "".nl2br($datosReceta['pasos'].""); ?></p>
							</div>
							<div class="col l12">
							<br>
								<h4><strong>Información nutrimental</strong></h4>
								<div class="col l12 m12 s12 progress blue"></div>
								<p><?php echo "".nl2br($datosReceta['informacionNutrimental'].""); ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col l12">
							</div>
						</div>

						<div class="row">
							<div class="col l12">
							</div>
						</div>

					</div>
				</div>
	    		<!-- VISTA DE LA RECETA -->

	    		<div class="row">
		    		<div class="card-panel col l12 m12 s12">
						
						<div class="row">	
							<div class="row">
								<div class="col l12 m12 s12">
									<span class="blue-text text-darken-4 center-align">
						    			<h5><strong><br>Comentarios</strong></h5>
						    		</span>
						    	</div>	
							</div>
						
						<div class="row">
							<div class="card-panel col l12 m12 s12">
								<div class="col l1 m1 s2">
									<br>
									<img class="responsive-img circle" src="media/imagenes/bennet.jpg">
									<div class="row"></div>
								</div>
								<div class="input-field col l10 m10 s9">
								    <textarea id="textarea1" class="materialize-textarea"></textarea>
								    <label for="textarea1">Escribe un comentario</label>
								</div>
								<div class="row col s3">
									<button class="waves-effect waves-light btn orange darken-3">Enviar
									</button>	
								</div>
							</div>
						</div>
						
						<div class="progress blue lighten-3"></div>

						<div class="row">
							<div class="col l1 m1 s2">
								<img class="responsive-img circle" src="media/imagenes/moretz.jpg">
								<div class="row"></div>
							</div>
							<div class="col l10 m10 s9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat praesentium similique laudantium, voluptates aliquid ratione nam consequuntur doloremque libero. Dolorem blanditiis nulla laboriosam recusandae ipsam, a facere rerum illum molestiae.</p>
							</div>
							<div class="col l10 m10 s8 offset-s2">
								17.feb.2016 22:54
							</div>
						</div>
							
						<div class="row">
							<div class="col l1 m1 s2">
								<img class="responsive-img circle" src="media/imagenes/yo.jpg">
								<div class="row"></div>
							</div>
							<div class="col l10 m10 s9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat praesentium similique laudantium, voluptates aliquid ratione nam consequuntur doloremque libero. Dolorem blanditiis nulla laboriosam recusandae ipsam, a facere rerum illum molestiae.</p>
							</div>
							<div class="col l10 m10 s8 offset-s2">
								17.feb.2016 22:54
							</div>
						</div>

						<div class="row">
							<div class="col l1 m1 s2">
								<img class="responsive-img circle" src="media/imagenes/sp.jpg">
								<div class="row"></div>
							</div>
							<div class="col l10 m10 s9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat praesentium similique laudantium, voluptates aliquid ratione nam consequuntur doloremque libero. Dolorem blanditiis nulla laboriosam recusandae ipsam, a facere rerum illum molestiae.</p>
							</div>
							<div class="col l10 m10 s8 offset-s2">
								17.feb.2016 22:54
							</div>
						</div>

					<!---->			 
					</div>
				</div>		
			<!---->				
	    		</div>
			</div>
		</div>			

    
    </main>
    <!--#include file='piePagina.php' -->
	</body>
</html>	

        
	