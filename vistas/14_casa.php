<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Sin salir de casa</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize2.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="estilos/angular-1.5.3/angular-animate.min.js"></script>
		<script src="estilos/inicializacion.js"></script>

		<script type="text/javascript">
		$(document).ready(function(){
      		$('.slider').slider({full_width: true});
    	});
    	</script>

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
		       		<span class="white-text center-align"><h5>Sin salir de casa</h5></span>
				</div>
	    	</div>
	    </div>


	    
		<!--CONT COMIDAS-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12 m12 s12">	
		    		<div>
		    			<span class="blue-text text-darken-4">
		    				<h5><strong>¿Qué tienes en casa?</strong></h5>
		    			</span>
		    		</div>
		    		<div>
	    				<form class="col l12" method="post" action="1_altaRecetasAction.php" enctype="multipart/form-data">	
		    				<br>
		    				<div class="input-field col l4 m4 s4">
			    				<select id="ing" name="ing">
	    					    	<option value="i1">1</option>
	    					    	<option value="i2">2</option>
	    					    	<option value="i3">3</option>
	    					    	<option value="i4">4</option>
	    					    	<option value="i5">5</option>
						    	</select>
						    		<label>Numero de ingredientes</label>
		           			</div>
		           			

		    				<div class="input-field col l4">
		          				<input id="ingrediente1" name="ingrediente1" type="text" class="validate">
		 	         			<label for="ingrediente1" class="activate">Ingredientes</label>
		           			</div>
		           			
		           			<br>
					        <button class="waves-effect waves-light btn orange darken-4">Buscar</button>
		           		</form>
		           	</div>

		           	<div class="col l8 offset-l2">
					    <div class="card-panel z-depth-3 col s12">
					     	<div class="slider">
							    <ul class="slides">
							      <li>
							        <img class="responsive-img" src="media/imagenes/salchichoneria.png"> <!-- random image -->
							        <div class="caption center-align">
							          <h3 class="pink-text">Salchichonería El cubanito</h3>
							          <h5 class="pink-text">¡Ven a visitarnos!</h5>
							        </div>
							      </li>
							      <li>
							        <img class="responsive-img" src="media/imagenes/union.png"> <!-- random image -->
							        <div class="caption center-align">
							          <h3 class="pink-text">Minisuper Unión</h3>
							          <h5 class="pink-text">¡Cuidando precios hoy y siempre!</h5>
							        </div>
							      </li>
							      <li>
							        <img class="responsive-img" src="media/imagenes/nutri.jpg"> <!-- random image -->
							        <div class="caption center-align">
							          <h3 class="pink-text">Tienda Naturista Wise</h3>
							          <h5 class="pink-text">¡Cuidate y disfruta!</h5>
							        </div>
							      </li>
							      <li>
							        <img class="responsive-img" src="media/imagenes/especialistas.jpg"> <!-- random image -->
							        <div class="caption center-align">
							          <h3 class="pink-text">Centro de especialista de tlaxcala</h3>
							          <h5 class="pink-text">¡El mejor cuidado para tu salud!</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						  	<br>
						</div>
						<div class="row"></div>
					</div>	  	
				        <!-- -->   	
				</div>
			</div>
		</div>	
			


	
    
    </main>
    <?php include("piePagina.php"); ?>
	</body>
</html>	

        
	