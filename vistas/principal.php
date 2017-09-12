<?php
session_start();

if ($_SESSION['email'])
{
echo "Bienvenido ".$_SESSION['email'];
?>


<html>
	<head>
		<meta charset="utf-8" />
		<title>Cookie Chef Recetario</title>
    	    	<style type="text/css" media="screen">
  			@import 'estilos/estrellas.css';
		</style>

	</head>  

	<body>
		<main>

			<br>
			<a href="1_cerrarSesion.php">CERRAR SESION</a>
		<?php		
			include ("panel.php");
 			include ("6_menu.php");
 		?>

 		<!-- CONTENEDORES -->
 		<div class="row">
 		<!--IZQUIERDO -->

 			<!-- CARRUSEL -->
 			<div class="col l7 offset-l1 s10 offset-s1">
			    <div class="card-panel z-depth-3 col s12">
			     	<div class="slider">
					    <ul class="slides">
					      <li>
					        <img class="responsive-img" src="media/imagenes/comida1.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>Pastelitos con fresa</h3>
					          <h5 class="light grey-text text-lighten-3">Disfrutalos!!</h5>
					        </div>
					      </li>
					      <li>
					        <img class="responsive-img" src="media/imagenes/comida5.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <i class="fa fa-play-circle-o"></i>
					          <h5 class="light grey-text text-lighten-3">Disfrutalas!!</h5>
					        </div>
					      </li>
					      <li>
					        <img class="responsive-img" src="media/imagenes/comida6.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>Chicken Bread</h3>
					          <h5 class="light grey-text text-lighten-3">Disfrutalo!!</h5>
					        </div>
					      </li>
					      <li>
					        <img class="responsive-img" src="media/imagenes/comida4.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>Licuado de fresa con menta</h3>
					          <h5 class="light grey-text text-lighten-3">Disfrutalos!!</h5>
					        </div>
					      </li>
					    </ul>
				  	</div>

				  	<br>
				  	<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/pepinos.jpg">
				              <a href="#"><span class="card-title brown darken-3 white-text"><strong>Botanas</strong></span></a>
				            </div>
				            <div class="card-content">
				              <h5>
				              	<p>
				              		¿Se te antojo? ¡ANIMATE! Aquí te decimos como preparar unos deliciosos pepinos con limon y chile especial
				              	</p>
				              </h6>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

				  	<br>
				  	<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/platanos.jpg">
				              <a href="#"><span class="card-title brown darken-3 white-text"><strong>Postres</strong></span></a>
				            </div>
				            <div class="card-content">
				              <h5>	
				              	<p>
				              		¡Prepara uno de los más ricos postres para consentir a papá!
				              	</p>
				              </h5>	
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

					<br>
				  	<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/aguaNaranja.jpg">
				              <a href="#"><span class="card-title brown darken-3 white-text"><strong>Bebidas</strong></span></a>
				            </div>
				            <div class="card-content">
					        	<h5>      
					              <p>
					              	En temporada de calor, se aconseja a las personas mantenerse hidratadas, ¿porque no hacerlo con una deliciosa bebida? ¡VAMOS A PREPARARLA!
					              </p>
					            </h5>  
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

				</div>
 			</div>



 			<!-- DERECHO -->
			<div class="col l3 hide-on-small-only m10 offset-m1">
				
				<!-- PROMOCIONES -->
				<div class="card-panel z-depth-3">
					<div class="card-panel brown darken-3">
						<span class="white-text">Promociones</span>
					</div>
					<br>
				  	<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/libre.jpg">
				              <a href="#"><span class="card-title blue-text"><strong>Promo 1</strong></span></a>
				            </div>
				            <div class="card-content">
				              <p>
				              	Una promoción para tus clientes es lo único que necesitan para animarse a ir a tu negocio.
				              </p>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

					<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/libre.jpg">
				              <a href="#"><span class="card-title blue-text"><strong>Promo 2</strong></span></a>
				            </div>
				            <div class="card-content">
				              <p>
				              	Una promoción para tus clientes es lo único que necesitan para animarse a ir a tu negocio.
				              </p>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>
			    </div>

			    <!-- NEGOCIOS -->
			    <div class="card-panel z-depth-3">
					<div class="card-panel brown darken-3">
						<span class="white-text">Negocios</span>
					</div>
					<br>
				  	<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/libre.jpg">
				              <a href="#"><span class="card-title blue-text"><strong>Negocio 1</strong></span></a>
				            </div>
				            <div class="card-content">
				              <p>
				              	Yo soy un espacio publicitario, tu negocio podria aparecer justo aqui y ser presentado ante millones de personas en internet.
				              </p>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

					<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/libre.jpg">
				              <a href="#"><span class="card-title blue-text"><strong>Negocio 2</strong></span></a>
				            </div>
				            <div class="card-content">
				              <p>
					              Yo soy un espacio publicitario, tu negocio podria aparecer justo aqui y ser presentado ante millones de personas en internet.
				              </p>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

					<div class="row">
						<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-image">
				              <img class="responsive-img" src="media/imagenes/libre.jpg">
				              <a href="#"><span class="card-title blue-text"><strong>Negocio 3</strong></span></a>
				            </div>
				            <div class="card-content">
				              <p>
				              	Yo soy un espacio publicitario, tu negocio podria aparecer justo aqui y ser presentado ante millones de personas en internet.
				              </p>
				            </div>
				          </div>
				        </div>
				      </div>
					</div>

			    </div>
			    </div>

			</div>	
		</div>
		


    
    </main>

    <?php include("piePagina.php"); ?>

    <script type="text/javascript">
		$(document).ready(function(){
      		$('.slider').slider({full_width: true});
    	});
    	</script>
	
	</body>
</html>	


<?php
} 
else
{
	echo "No has iniciado sesion";
	header("Refresh: 3; url = 1_iniciarSesionFormulario.php");	
}
?>

	