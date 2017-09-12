<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Recetas</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="estilos/angular-1.5.3/angular-animate.min.js"></script>
		

		<script type="text/javascript">
		$(document).ready(function(){
      		$('.slider').slider({full_width: true});
    	});
    	</script>

    	<style type="text/css">
  			img 
  			{
				width: 45%;
  				display: inline-block;
			}


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
		       	<div class="card-panel brown darken-3">
		       		<span class="white-text center-align"><h5>Recetas</h5></span>
				</div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12">
	    			<br>
	    			<br>
	    			<!-- FILA 1 -->
	    		
		    	 		<div class="col l4 m6 s12">
			    	 			<div class="card">
						        	<div class="card-image orange darken-4">
						            	<a href="recetasArroces.php">
						              		<img src="media/imagenes/arroces.jpg" width="400" height="280">
					              			<h5 class="center-align white-text">Arroces</h5>
					              		</a>
						            </div>
					        </div>
					    </div>

	    				<div class="col l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasBebidas.php">
						            	<img src="media/imagenes/bebidas.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Bebidas</h5>
					              	</a>
						        </div>
					        </div>
					    </div>

					    <div class="col l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasCarnes.php">
						            	<img src="media/imagenes/carnes.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Carnes</h5>
					              	</a>
						        </div>
					        </div>
					    </div>

					<br>
					<!-- FILA 2 -->

		    	 			<div class="col s4 l4 m6 s12">
			    	 			<div class="card">
						        	<div class="card-image orange darken-4">
						            	<a href="recetasEnsaladas.php">
						              		<img src="media/imagenes/ensaladas.jpg" width="400" height="280">
					              			<h5 class="center-align white-text">Ensaladas</h5>
					              		</a>
						            </div>
					        	</div>
					    	</div>

	    				<div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasHelados.php">
						            	<img src="media/imagenes/helados.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Helados</h5>
					              	</a>
						        </div>
					        </div>
					    </div>

					    <div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasHuevos.php">
						            	<img src="media/imagenes/huevos.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Huevos</h5>
					              	</a>
						        </div>
					        </div>
					    </div>


					<br>
					<!-- FILA 3 -->
		    	 		<div class="col s4 l4 m6 s12">
			    	 			<div class="card">
						        	<div class="card-image orange darken-4">
						            	<a href="recetasJugos.php">
						              		<img src="media/imagenes/jugosylicuados.jpg" width="400" height="280">
					              			<h5 class="center-align white-text">Jugos y licuados</h5>
					              		</a>
						            </div>
					        </div>
					    </div>

	    				<div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasLegumbres.php">
						            	<img src="media/imagenes/legumbresypotajes.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Legumbres</h5>
					              	</a>
						        </div>
					        </div>
					    </div>
					

					    <div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasPastas.php">
						            	<img src="media/imagenes/pizzas.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Pastas y pizzas</h5>
					              	</a>
						        </div>
					        </div>
					    </div>
					
					<br>
					<!-- FILA 4 -->
		    	 		<div class="col s4 l4 m6 s12">
			    	 			<div class="card">
						        	<div class="card-image orange darken-4">
						            	<a href="recetasPescados.php">
						              		<img src="media/imagenes/pescadosymariscos.jpg" width="400" height="280">
					              			<h5 class="center-align white-text">Pescados y mariscos</h5>
					              		</a>
						            </div>
					        </div>
					    </div>

	    				<div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasSopas.php">
						            	<img src="media/imagenes/sopas.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Sopas</h5>
					              	</a>
						        </div>
					        </div>
					    </div>

					    <div class="col s4 l4 m6 s12">
		   	 	  	 		<div class="card">
						       	<div class="card-image orange darken-4">
						         	<a href="recetasPures.php">
						            	<img src="media/imagenes/puresycremas.jpg" width="400" height="280">
					              		<h5 class="center-align white-text">Pures y cremas</h5>
					              	</a>
						        </div>
					        </div>
					    </div>
					<br>

					<!-- FILA 5 -->
		    	 		<div class="col s4 l4 m6 s12">
			    	 			<div class="card">
						        	<div class="card-image orange darken-4">
						            	<a href="recetasPostres.php">
						              		<img src="media/imagenes/postres.jpg" width="400" height="280">
					              			<h5 class="center-align white-text">Postres y dulces</h5>
					              		</a>
						            </div>
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

        
	