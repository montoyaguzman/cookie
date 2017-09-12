  <html>
	<head>
		<meta charset="utf-8" />
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script type="text/javascript">
			$(document).ready(function(){
			$('.button-collapse').sideNav({'edge':'left'})
			});
		</script>
		<script type="text/javascript">
			$(".dropdown-button").dropdown();
		</script>

		<style type="text/css">
			#iconoLateral {color:#ffffff;}
			
		</style>

	</head>  

  	<!-- INICIO DEL BODY -->
	<body>

		<!-- ICONOS -->
	    <div class="row">
		    <div class="col l4 offset-l9 on-med-and-small-up s3 offset-s1">
		    	<div class="col l12 m12 s12">
		    		<span class="blue-text text-darken-blue-2 hide-on-small-only hide-on-med-only"><strong>Siguenos: &nbsp; </strong></span>
			    	<a href="https://www.facebook.com/cookiechefmx/"><i style="color:#2E64FE" class="fa fa-facebook-square fa-2x"></i></a>
			    	<a href="https://twitter.com/cookiechefmx"><i style="color:#00FFFF" class="fa fa-twitter-square fa-2x"></i></a>
			    	<a href="https://www.youtube.com/user/Marisolpink"><i style="color:#FF0040" class="fa fa-youtube-square fa-2x"></i></a>
			    </div>	
		    </div>
		    <div class="col l5 offset-l1 s7">
		    	<span class="blue-text text-darken-4 hide-on-large-only"><h5><strong>¡Bienvenido a tu cocina!</strong></h5></span>
		    </div>
	    </div>

	    <div class="row hide-on-large-only">	
	    </div>

 		<!-- MENU -->
		<div class="row">
		 	<div class="col l7 offset-l1 s10 offset-s1">			
			<!-- OPCIONES DROPDOWN -->
				<ul id="recetario" class="dropdown-content">
				  <li><a href="7_recetas.php" style="color:#0d47a1">Recetas</a></li>
				  <li><a href="8_videoRecetas.php" style="color:#0d47a1">Videorecetas</a></li>
				</ul>
				<ul id="clasificador" class="dropdown-content">
				  <li><a href="10_buscador.php" style="color:#0d47a1">Buscador</a></li>
				  <li><a href="11_popular.php" style="color:#0d47a1">Lo más popular</a></li>
				  <li><a href="12_favoritos.php" style="color:#0d47a1">Favoritos</a></li>
			 	  <li><a href="13_tips.php" style="color:#0d47a1">Tips</a></li>
				  <li><a href="14_casa.php" style="color:#0d47a1">Sin salir de casa</a></li>
				</ul>
				<ul id="contacta" class="dropdown-content">
					<li><a href="16_quienes.php" style="color:#0d47a1">¿Quienes somos?</a></li>
					<li><a href="17_valorar.php" style="color:#0d47a1">Valorar</a></li>
					<li><a href="tutorial.php" style="color:#0d47a1">Tutorial</a></li>
				</ul>
			<!-- -->
				<nav>
					<div class="nav-wrapper orange darken-4">
						<a href="15_cookieHealth.php" class="brand-logo">&nbsp;<span class="hide-on-large-only">Cookie Chef</span></a>
						<a href="#!"class="button-collapse" data-activates="menu">
						<i class="mdi-navigation-menu"></i>
						</a>
						<ul class="hide-on-med-and-down right">
							<li><a href="principal.php">Inicio</a></li>
							<li><a class="dropdown-button" href="#!" data-activates="recetario">Recetario<i class="material-icons right">arrow_drop_down</i></a></li>
							<li><a href="9_menuPlanner.php">Mennu planner</a></li>
							<li><a class="dropdown-button" href="#!" data-activates="clasificador">Clasificador<i class="material-icons right">arrow_drop_down</i></a></li>
							<li><a href="15_cookieHealth.php">Cookie Health</a></li>
							<li><a class="dropdown-button" href="#!" data-activates="contacta">Contacta<i class="material-icons right">arrow_drop_down</i></a></li>
						</ul>
						
						<!-- SIDE MENU -->	
						<ul class="side-nav blue darken-3 white-text" id="menu">
							<li>
								<a href="principal.php">
								<i id="iconoLateral" class="fa fa-home fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Inicio
									</strong>
								</a>
							</li>
							<li>
								<a href="7_recetas.php">
								<i id="iconoLateral" class="fa fa-cutlery fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Recetas
									</strong>
								</a>
							</li>
							<li>
								<a href="8_videoRecetas.php">
								<i id="iconoLateral" class="fa fa-play-circle-o fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Videoecetas
									</strong>
								</a>
							</li>
							<li>
								<a href="9_menuPlanner.php">
								<i id="iconoLateral" class="fa fa-calendar fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Mennu Planner
									</strong>
								</a>
							</li>
							<li>
								<a href="12_favoritos.php">
								<i id="iconoLateral" class="fa fa-heart fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Favoritos
									</strong>
								</a>
							</li>
							<li>
								<a href="10_buscador.php">
								<i id="iconoLateral" class="fa fa-cutlery fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Tipos de comida
									</strong>
								</a>
							</li>
							<li>
								<a href="15_cookieHealth.php">
								<i id="iconoLateral" class="fa fa-medkit fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Cookie Health
									</strong>
								</a>
							</li>
							<li>
								<a href="13_tips.php">
								<i id="iconoLateral" class="fa fa-check fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Tips
									</strong>
								</a>
							</li>

							<li>
								<a href="11_popular.php">
								<i id="iconoLateral" class="fa fa-star fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Lo más popular
									</strong>
								</a>
							</li>
							<li>
								<a href="16_quienes.php">
								<i id="iconoLateral" class="fa fa-phone fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Contacta
									</strong>
								</a>
							</li>
							<li>
								<a href="17_valorar.php">
								<i id="iconoLateral" class="fa fa-certificate fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Valorar
									</strong>
								</a>
							</li>
							<li>
								<a href="18_compartir.php">
								<i id="iconoLateral" class="fa fa-share-alt fa-2x"></i>
									<strong style="color:#ffffff">
										&nbsp;Compartir
									</strong>
								</a>	
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="row hide-on-large-only">
				
			</div>

			<div class="col l3 on-med-down m10 offset-m1 on-small-down s10 offset-s1">
				<form method="post" action="resultadosBusqueda.php">
					<div class="input-field col s12">
				 		<i class="material-icons prefix">search</i>
				 		<!-- <i class="material-icons prefix fa fa-search"></i> -->
	          			<input id="ingredienteBuscado" name="ingredienteBuscado" type="text" class="validate">
	          			<label for="ingredienteBuscado" class="activate">Buscar receta</label>
	        		</div>
				</form>	
			</div>

			
		</div>
	</body>
</html>	

        
	