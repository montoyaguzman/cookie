<html>
	<head>
		<meta charset="utf-8" />
		<title>Búsqueda de Recetas</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">
	</head>	

<!-- INICIO DEL BODY -->
	<body>
		<div class="row">
        <div class="col s12">
        <div class="card-panel teal">
        	<span class="white-text"><h4><strong>Agenda de tips</strong></h4>
        	</span>
        </div>
        </div>
        </div>

		<!-- INICIO DE LA TABLA -->
	    <div class ="row">  			
	    	<div class = "col s10 offset-s1">
	        	<table class="responsive-table bordered highlight centered"> 
		
					<!-- PHP -->
				    <?php
					include("../../../modelo/conexion.php");

					$idTip = $_REQUEST['idTip'];

					$sql = "SELECT * FROM tipsCocina where idTip=$idTip;";
					$consulta= mysqli_query($conexion,$sql);
					
					if($datosTip = mysqli_fetch_array($consulta)){
					?>
						<!-- INICIO DE LA TABLA -->
						<tr>
							<td class="white-text blue darken-2 col s2">
								ID Tip
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosTip['idTip']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Nombre del tip
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosTip['nombre']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Descripción
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosTip['descripcion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Enlace del tip
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosTip['link']; ?>
							</td>
						</tr>
				</table>
			</div>
		</div>
					<!-- PHP -->
					<?php 
					}
					else{
			 			echo "<br>ERROR EN LA CONSULTA";
					} 
					?>    
  	</body>
</html>
