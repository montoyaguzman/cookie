<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Menu Planner</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="estilos/angular-1.5.3/angular-animate.min.js"></script>
		

		<script type="text/javascript">
		$(document).ready(function(){
    	$('ul.tabs').tabs();
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
		       	<div class="card-panel brown darken-3 l10 m10 s10">
		       		<span class="white-text center-align"><h5>Menu planner</h5></span>
				</div>
	    	</div>
	    </div>

	    <!-- TAB -->
	    <div class="row">
    		<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
		    	<ul class="tabs">
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Mayo 30</span></span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Mayo 31</span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Junio 1</span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Junio 2</span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Junio 3</span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Junio 4</span></a></li>
		        	<li class="tab col s3"><a href="#test1"><span class="blue-text text-darken-4">Junio 5</span></a></li>
		      	</ul>
		    </div>
		</div>
	    
		<!--CONT COMIDAS-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12">
	    		<span class="blue-text text-darken-4"><h5><strong>Tenemos lista tu comida</strong></h5></span>
	    			
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>Desayuno</h5></span>
					        		<img src="media/imagenes/desayuno.jpg" width="400" height="280">
					        		<span class="center-align white-text"><h6>Huevos rancheros</h6></span>
					            </a>
						    </div>
					    </div>
					</div>
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>Almuerzo</h5></span>
					        		<img src="media/imagenes/almuerzo.jpg" width="400" height="280">
					        		<span class="center-align white-text"><h6>Pechuga al vapor con verduras</h6></span>
					            </a>
						    </div>
					    </div>
					</div>
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>*</h5></span>
					        		<img src="media/imagenes/blanco.jpg" width="400" height="280">
					        		<span class="center-align white-text"><h6>*</h6></span>
					            </a>
						    </div>
					    </div>
					</div>
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>Merienda</h5></span>
					        		<img src="media/imagenes/merienda.jpg" width="400" height="280">
					        		<span class="center-align white-text"><h6>Coctel de frutas</h6></span>
					            </a>
						    </div>
					    </div>
					</div>
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>Comida</h5></span>
					        		<img src="media/imagenes/comida.png" width="400" height="280">
					        		<span class="center-align white-text"><h6>Spaguetti rojo</h6></span>
					            </a>
						    </div>
					    </div>
					</div>
		    	 	<div class="col l4 m6 s12">
			    		<div class="card">
					      	<div class="card-image brown darken-3">
					           	<a href="#">
					        		<span class="white-text"><h5>Cena</h5></span>
					        		<img src="media/imagenes/cena.jpg" width="400" height="280">
					        		<span class="center-align white-text"><h6>Fajitas de Pollo</h6></span>
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

        
	