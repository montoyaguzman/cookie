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
		       		<span class="white-text center-align"><h5>Videorecetas legumbres y potajes</h5></span>
				</div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
	    		<div class="z-depth-3 col l12">
	    			<br>	
					<?php 
						include("../modelo/conexion.php");
						
						$sql = "SELECT * FROM videoRecetas WHERE tipoAlimento='Legumbres y potajes' ORDER BY nombreVideoReceta ASC";
  						$consulta= mysqli_query($conexion,$sql);

  						while($datosVideoReceta = mysqli_fetch_array($consulta)) 
					    {	    			
						?>
						
						<div class="col l4 m6 s12">
							<div class="video-container">
        						<iframe width="560" height="315" src="<?php echo $datosVideoReceta['link']; ?>" frameborder="0" allowfullscreen></iframe>
      						</div>
      						<div class="col l12 m12 s12 progress red"></div>
						            <h6 class="center-align">
						            	<strong>
						            		<?php echo "".$datosVideoReceta['nombreVideoReceta'].""; ?>
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

        
	