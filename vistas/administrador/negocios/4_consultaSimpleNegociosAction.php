<html>
	<head>
		<meta charset="utf-8" />
		<title>Búsqueda de Negocios</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">
	</head>	

<!-- INICIO DEL BODY -->
	<body>
		<div class="row">
        <div class="col s12">
        <div class="card-panel teal">
        	<span class="white-text"><h4><strong>Datos del Negocio</strong></h4>
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

					$idNegocio = $_REQUEST['idNegocio'];

					$sql = "SELECT * FROM negocios where idNegocio=$idNegocio;";
					$consulta= mysqli_query($conexion,$sql);
					
					if($datosNegocio = mysqli_fetch_array($consulta)){
					?>
						<!-- INICIO DE LA TABLA -->
						<tr>
							<td class="white-text blue darken-2 col s2">
								ID Negocio
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['idNegocio']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Nombre del Negocio
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['nombreNegocio']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Imagen
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<div class="row push-s2">
									<div class="col s6 m5">
						            	<div class="card-panel teal" align="center">
						            		<img class = "responsive-img" id="vistaPrevia" src="<?php echo "imagenesNegocios/".$datosNegocio['imagen']; ?>"/>
										</div>
									</div>
								</div>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Descripción
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['descripcion']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Giro
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['giro']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Productos
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['productos']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Correo
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['correo']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Página web
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['pagina']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Facebook
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['facebook']; ?>
								</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Twitter
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['twitter']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Calificación de Negocios
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['calificacionNegocio']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Visitas
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['visitas']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Contacto
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['contacto']; ?>
							</td>
						</tr>

						<tr>
							<td class="white-text blue darken-2 col s2">
								Telefono de contacto
							</td>
							<td class="black-text deep-purple lighten-5 col s8">
								<?php echo "".$datosNegocio['telefonoContacto']; ?>
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
