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
			include ("panel.php");
			include ("6_menu.php");	
		?>

 		<!-- TITULO -->
 		<div class="row">
 			<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
		       	<div class="card-panel brown darken-3">
		       		<span class="white-text center-align"><h5>Postres y dulces</h5></span>
				</div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12">
	    			<br>	
					<?php 
						include("../modelo/conexion.php");
						
						$sql = "SELECT * FROM recetas WHERE tipoAlimento='Postres y dulces'  ORDER BY nombreReceta ASC";
  						$consulta= mysqli_query($conexion,$sql);

  						//$ruta = "/administrador/recetas/imagenesRecetas/".$datosReceta['imagen'];

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
	    		<br>	
	    	</div>
	    </div>	
	    


	</div>	
    
    </main>
    
    <?php
		include ("piePagina.php");
	?>

	</body>
</html>	

        
	