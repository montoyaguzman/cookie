<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Valorar</title>
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
		       		<span class="white-text center-align"><h5>Queremos brindarte lo mejor</h5></span>
				</div>
	    	</div>
	    </div>


	    
		<!--CONTENIDO-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12 m12 s12">
	    		
	    		<div>
	    			<span class="blue-text text-darken-4">
	    				<h5><strong>¡Ayudanos con tu opinión!</strong></h5>
	    			</span>
	    		</div>

	    		<div class="card-panel">
		    		<div class="row">
						
						<div class="col l1 m1 s1">
							<span class="blue-text text-darken-4">
		    					<h6><strong><br>Calificar</strong></h6>
		    				</span>
						</div>	 
						
						<div class="col l2 m3 s4">
							<form>
								<br>
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
									<button class="waves-effect waves-light btn orange darken-4">Enviar
									</button>	
								</div>
							</div>
						
		    		</div>
	    		</div>

	    		<div class="row">
	    			<div class="card-panel">
	    				<span class="pink-text text-darken-4">
	    					<h5 class="center-align"><strong>Cuestionario</strong></h5>
	    				</span>
	    			<!-- CUESTIONARIO -->
	    				<div class="row">	
		    				<span><h6>1. ¿Es el servicio de recetas lo que esperabas?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Si</label>
		    					<input type="radio"/>
	      						<label for="test2">No</label>
	      				</div>		

      					<div class="row">
	      					<span><h6>2. ¿Qué opinión le daría a las recetas que has visto?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Excelentes</label>
		    					<input type="radio"/>
	      						<label for="test2">Regulares</label>
	      						<input type="radio"/>
	      						<label for="test2">Malas</label>
	      				</div>

      					<div class="row">
	      					<span><h6>3. ¿Qué es lo que te parece mejor de nosotros?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Recetas</label>
		    					<input type="radio"/>
	      						<label for="test2">Información de negocios</label>
	      						<input type="radio"/>
	      						<label for="test2">Tips de cocina</label>
	      						<input type="radio"/>
	      						<label for="test2">El planificador de comidas</label>
	      						<input type="radio"/>
	      						<label for="test2">Las busquedas dinámicas</label>
	      						<input type="radio"/>
	      						<label for="test2">El diseño</label>
      					</div>

      					<div class="row">
	      					<span><h6>4. ¿Los negocios que has conocido aquí te parecen agradables?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Si</label>
		    					<input type="radio"/>
	      						<label for="test2">No</label>
      					</div>

      					<div class="row">
	      					<span><h6>5. ¿Cuál es su tipo de alimento preferido?</h6></span>
	      						<p><input type="checkbox" id="tipo1"/>
	    							<label for="tipo1">Arroces</label></p>
								<p><input type="checkbox" id="tipo2"/>
	    							<label for="tipo2">Bebidas</label></p>
	    						<p><input type="checkbox" id="tipo3"/>
	    							<label for="tipo3">Carnes</label></p>
	    						<p><input type="checkbox" id="tipo4"/>
	    							<label for="tipo4">Ensaladas</label></p>
	    						<p><input type="checkbox" id="tipo5"/>
	    							<label for="tipo5">Helados</label></p>
	    						<p><input type="checkbox" id="tipo6"/>
	    							<label for="tipo6">Huevos</label></p>
	    						<p><input type="checkbox" id="tipo7"/>
	    							<label for="tipo7">Jugos y licuados</label></p>
	    						<p><input type="checkbox" id="tipo8"/>
	    							<label for="tipo8">Legumbres y potajes</label></p>
	    						<p><input type="checkbox" id="tipo9"/>
	    							<label for="tipo9">Pastas y pizzas</label></p>
	    						<p><input type="checkbox" id="tipo10"/>
	    							<label for="tipo10">Pescados y mariscos</label></p>
	    						<p><input type="checkbox" id="tipo11"/>
	    							<label for="tipo11">Sopas</label></p>
	    						<p><input type="checkbox" id="tipo12"/>
	    							<label for="tipo12">Pures y cremas</label></p>
	    						<p><input type="checkbox" id="tipo13"/>
	    							<label for="tipo13">Postres y dulces</label></p>
	    				</div>

	    				<div class="row">	
		    				<span><h6>6. ¿Te agrada la personalización que se te ofrece?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Si</label>
		    					<input type="radio"/>
	      						<label for="test2">No</label>
	      				</div>

	      				<div class="row">	
		    				<span><h6>7. ¿De qué cocina te agradaría conocer recetas?</h6></span>	
		    					<input type="radio"/>
	      						<label for="test1">Japones</label>
		    					<input type="radio"/>
	      						<label for="test2">China</label>
	      				</div>

	      				<div class="row">	
		    				<span><h6>8. ¿Qué más te gustaria que pudieramos ofrecerte?</h6></span>
		    					<div class="input-field col l10 m10 s10">
			    					<textarea id="textarea2" class="materialize-textarea"></textarea>
							        <label for="textarea2">Escribenos</label>
								</div>
		    			</div>				
      				<!-- CUESTIONARIO -->
	    			</div>
	    		</div>
				
				</div>
			</div>
		</div>			

	
    
    </main>
    <?php include("piePagina.php"); ?>
	</body>
</html>	

        
	