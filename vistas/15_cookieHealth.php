<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Health</title>
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
		<main>
		<?php
			include("panel.php");
			include("6_menu.php");
		?>

 		<!-- TITULO -->
 		<div class="row">
 			<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
		       	<div class="card-panel brown darken-3 l10 m10 s10">
		       		<span class="white-text center-align"><h5>Cookie Health</h5></span>
				</div>
	    	</div>
	    </div>


	    
		<!--CONT COMIDAS-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12">
	    		
	    		<div>
	    			<span class="blue-text text-darken-4">
	    				<h5><strong>¡Vamos a buscar la receta más saludable!</strong></h5>
	    			</span>
	    		</div>
	    		
	    		<div>
    				<form class="col l12" method="post" action="1_altaRecetasAction.php" enctype="multipart/form-data">	
    				<br>
    				<div class="input-field col l3">
						<select style="color:#c51162">
					    	<option value="Desayuno" style="color:#c51162;">Desayuno</option>
      					    <option value="Almuerzo">Almuerzo</option>
      					    <option value="Comida">Comida</option>
      					    <option value="Merienda">Merienda</option>
      					    <option value="Cena">Cena</option>
					    </select>
					    	<label style="color:#880e4f;">Tipo de comida</label>
					</div>

					<div class="input-field col l3">
						<select>
    					    <option value="Arroces">Arroces</option>
    					    <option value="Bebidas">Bebidas</option>
    					    <option value="Carnes">Carnes</option>
    					    <option value="Ensaladas">Ensaladas</option>
    					    <option value="Helados">Helados</option>
    					    <option value="Huevos">Huevos</option>
    					    <option value="Jugos y licuados">Jugos y licuados</option>
    					    <option value="Legumbres y potajes">Legumbres y potajes</option>
    					    <option value="Pastas y pizzas">Pastas y pizzas</option>
    					    <option value="Pescados y mariscos">Pescados y mariscos</option>
    					    <option value="Sopas">Sopas</option>
    					    <option value="Pures y cremas">Pures y cremas</option>
    					    <option value="Postres y dulces">Postres y dulces</option>
					    </select>
					    	<label style="color:#880e4f;">Tipo de alimento</label>
					</div>

					<div class="input-field col l3">
						<select>
    					    <option value="Arroces">Menos de 15 min</option>
    					    <option value="Bebidas">15-30 min</option>
    					    <option value="Carnes">30-60 min</option>
    					    <option value="Ensaladas">+1 hora</option>
    					    <option value="Helados">+2 horas</option>
					    </select>
					    	<label style="color:#880e4f;">Tiempo</label>
					</div>

					<div class="col l3">
						<br>
						<button class="waves-effect waves-light btn orange darken-4">Buscar</button>
					</div>			
    				</form>
    			</div>		

    			<div class="row">
 					<div class="col l6 offset-l3 m8 offset-m2 s8 offset-s2">
		       			<div class="card-panel brown darken-3 l10 m10 s10">
		       				<span class="white-text center-align"><h5>Otras recetas</h5></span>
						</div>
			    	</div>
			    </div>

			    <!-- -->
	    		<div class="col s4 l4 m6 s12">
		   	 		<div class="card orange darken-4 z-depth-4">
					    <div class="card-image">
						    <a href="#">
						        
						        <div class="row">	
							        
							        <div class="col l6 m6 s6">
							        	<i class="fa fa-clock-o" aria-hidden="true" style="color:#ffffff;"></i>
							        	<span class="white-text">Tiempo</span>
							        </div>	
							        
							        <div class="l4 offset-l2 m4 offset-m2 on-small-down">
										<form>
		  									<div class="clasificacion">
		    									<input id="radio1" type="radio" name="puntuacion1" value="5">
											    <label for="radio1">★</label>
											    <input id="radio2" type="radio" name="puntuacion2" value="4" class="hide-on-large-only">
											    <label for="radio2">★</label>
											    <input id="radio3" type="radio" name="puntuacion3" value="3">
											    <label for="radio3">★</label>
											    <input id="radio4" type="radio" name="puntuacion4" value="2">
											    <label for="radio4">★</label>
											    <input id="radio5" type="radio" name="puntuacion5" value="1">
											    <label for="radio5">★</label>
											</div>
										</form>
									</div>		
									
									<img src="media/imagenes/legumbresypotajes.jpg" width="400" height="280">
									<h5 class="white-text"><strong>&nbsp;Legumbres</strong></h5>
									
								</div>
					           

					        </a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>			


	
    
    </main>
    <?php include("piePagina.php"); ?>
	</body>
</html>	

        
	