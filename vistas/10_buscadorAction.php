<html>
	<head>
		<meta charset="utf-8" />
		<title>Buscador</title>
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
		       		<span class="white-text center-align"><h5>Cookie Search</h5></span>
				</div>
	    	</div>
	    </div>


	    
		<!--CONT COMIDAS-->
		<div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12 m12 s12">
	    		
	    		<div>
	    			<span class="blue-text text-darken-4">
	    				<h5><strong>¡Vamos a buscar la receta perfecta!</strong></h5>
	    			</span>
	    		</div>
	    		
	    		<div>
    				<form class="col l12" method="post" action="10_buscadorAction.php" enctype="multipart/form-data">	
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
    					    <option value="Arroces">15</option> 
    					    <option value="Bebidas">30</option>
    					    <option value="Carnes">45</option>
    					    <option value="Ensaladas">60</option>
    					    <option value="Helados">90</option>
					    </select>
					    	<label style="color:#880e4f;">Tiempo (minutos)</label>
					</div>

					<div class="col l3">
						<br>
						<button class="waves-effect waves-light btn">Buscar</button>
					</div>			
    				</form>
    			</div>		

    			<div class="row">
 					<div class="col l6 offset-l3 m8 offset-m2 s8 offset-s2">
		       			<div class="card-panel brown darken-3 l10 m10 s10">
		       				<span class="white-text center-align"><h5>Resultados</h5></span>
						</div>
			    	</div>
			    </div>

			    <?php 
					include("../modelo/conexion.php");
					
					$comida = $_REQUEST['comida'];
					$tipoAlimento = $_REQUEST['tipoAlimento'];
					$tiempoPreparacion = $_REQUEST['tiempoPreparacion'];
					
					/*echo $comida."<br>";
					echo $tipoAlimento."<br>";
					echo $tiempoPreparacion."<br>";*/
					
					$sql = "SELECT * FROM recetas WHERE 
					comida='$comida'
					&& tipoAlimento='$tipoAlimento' 
					&& tiempoPreparacion<='$tiempoPreparacion' 
					ORDER BY nombreReceta ASC";
  					
  					$consulta= mysqli_query($conexion,$sql);

					while($datosReceta = mysqli_fetch_array($consulta)) 
					{	 		
				?>
				
				<div class="col l4 m6 s12">
			    	<div class="card">
				      	<div class="card-image text-black">
				           	<a href = "<?php echo "19_receta.php?idReceta=".$datosReceta['idReceta'].""; ?>" >
				        		<img src="<?php echo "administrador/recetas/imagenesRecetas/".$datosReceta['imagen']; ?>" width="400" height="280">
						    </a>
						</div>
					</div>
				<div class="col l12 m12 s12 progress red"></div>
					<h6 class="center-align">
					   	<strong>
					    	<?php echo "".$datosReceta['nombreReceta'].""; ?>
					   	</strong>
					</h6>
				</div>
					    	
						
						<?php } ?>
			    
				</div>
			</div>
		</div>			
    </main>
    <?php include("piePagina.php"); ?>
	</body>
</html>	