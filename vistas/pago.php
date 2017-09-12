<html>
	<head>
		<meta charset="utf-8" />
		<title>Contratación de publicidad</title>
		<script src="estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="estilos/materialize/css/materialize.css" media="screen, projection">
		<link rel="stylesheet" href="estilos/font-awesome-4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		

	<!-- JQUERY -->
      <script>  
        window.mostrarVistaPrevia = function mostrarVistaPrevia(){

            var Archivos, Lector;
            //Para navegadores antiguos
            if (typeof FileReader !== "function"){
                jQuery('#infoNombre').text('[Vista previa no disponible]');
                jQuery('#infoTamaño').text('(su navegador no soporta vista previa!)');
                return;
            }

            Archivos = jQuery('#imagen')[0].files;
            if (Archivos.length > 0){

                Lector = new FileReader();
                Lector.onloadend = function(e){
                    var origen, tipo;

                    //Envia la imagen a la pantalla
                    origen = e.target; //objeto FileReader
                    //Prepara la información sobre la imagen
                    tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

                    jQuery('#infoNombre').text(Archivos[0].name + ' (Tipo: ' + tipo + ')');
                    jQuery('#infoTamaño').text('Tamaño: ' + e.total + ' bytes');
                    //Si el tipo de archivo es válido lo muestra, 
                    //sino muestra un mensaje 
                    if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
                        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
                        alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
                    } else {
                        jQuery('#vistaPrevia').attr('src', origen.result);
                        window.obtenerMedidas();
                    }

                };
                Lector.onerror = function(e) {
                    console.log(e)
                }
                Lector.readAsDataURL(Archivos[0]);

            } else {
                var objeto = jQuery('#imagen');
                objeto.replaceWith(objeto.val('').clone());
                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
                jQuery('#infoNombre').text('[Seleccione una imagen]');
                jQuery('#infoTamaño').text('');
            };
        };

        //Lee el tipo MIME de la cabecera de la imagen
        window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) {
            return cabecera.replace(/data:([^;]+).*/, '\$1');
        }

        //Obtiene las medidas de la imagen y las agrega a la 
        //etiqueta infoTamaño
        window.obtenerMedidas = function obtenerMedidas() {
            jQuery('<img/>').bind('load', function(e) {

                var tamaño = jQuery('#infoTamaño').text() + '; Medidas: ' + this.width + 'x' + this.height;

                jQuery('#infoTamaño').text(tamaño);

            }).attr('src', jQuery('#vistaPrevia').attr('src'));
        }

        jQuery(document).ready(function() {

            //Cargamos la imagen "vacía" que actuará como Placeholder
            jQuery('#vistaPrevia').attr('src', "blanco.jpg");

            //El input del archivo lo vigilamos con un "delegado"
            jQuery('#botonera').on('change', '#imagen', function(e) {
                window.mostrarVistaPrevia();
            });

            //El botón Cancelar lo vigilamos normalmente
            jQuery('#cancelar').on('click', function(e) {
                var objeto = jQuery('#imagen');
                objeto.replaceWith(objeto.val('').clone());

                jQuery('#vistaPrevia').attr('src', window.imagenVacia);
                jQuery('#infoNombre').text('[Seleccione una imagen]');
                jQuery('#infoTamaño').text('');
            });

        }); 
      </script>

		 <!-- JAVASCRIPT -->
		<script type="text/javascript">
			$(document).ready(function() {
		    $('select').material_select();
		    })
		</script>

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
		       		<span class="white-text center-align"><h5>Contratación de servicios publicitarios</h5></span>
				</div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col l10 offset-l1 m10 offset-m1 s10">
	    		<div class="z-depth-3 col l12">
	    		<div class="row"></div>	
	    		<div class="row">
	    			<a href="administrador/negocios/1_altaNegociosFormulario.html"><h5 class="black-text"><strong>Registrar mi negocio</strong></h5></a>
	    		</div>

	    		<!-- -->
	    		<div class="row">
    				<form class="col s10" method="post" action="administrador/negocios/1_altaNegociosAction.php" enctype="multipart/form-data">
			            <div class="row">
				            <div class="col l7">
			              		<div class="input-field col l6 m6 s12">
			          	     	<input id="nombreNegocio" name="nombreNegocio" type="text" class="validate">
			          			<label for="nombreNegocio" class="activate">Nombre del negocio</label>
			           		</div>
			      		</div>

						<div class="row">
      					<div class="row">
              				<div class="col l6">
                				<div class="card-panel teal">
                  					<img class = "responsive-img" id="vistaPrevia" src=""/>
			                	</div>
			              	</div>
			            </div>

			            <div id="botonera">
            			  <div class="row">
                			<div class="file-field input-field">
                  				<div class="btn">
                    				<span>Cargar imagen</span>
                    				<input id="imagen" name="imagen" type="file" accept="image/*">
                  				</div>
                  					<div class="file-path-wrapper">
                    					<input class="file-path validate" type="text" id="direccion">
                  					</div>
                				</div>
              				</div>
            			  </div>
            			</div>

					    <div class="row">
					    	<div class="input-field col s3">
			           		<select id="giro" name="giro">
			      			    <option value="Abarrotes">Abarrotes</option>
			      			    <option value="Carnicería">Carnicería</option>
			        				<option value="Centro de nutrición">Centro de nutrición</option>
			        				<option value="Cremería">Cremería</option>
			        				<option value="Dulcería">Dulcería</option>
			        				<option value="Frutería y verdulería">Frutería y verdulería</option>
			        				<option value="Materias primas">Materias primas</option>
			        				<option value="Pescadería">Pescadería</option>
			        				<option value="Polleria">Polleria</option>
			        				<option value="Restaurante">Restaurante</option>
			        				<option value="Refresquera">Refresquera</option>
			        				<option value="Semillas y chiles secos">Semillas y chiles secos</option>
			        				<option value="Suplementos alimenticios">Suplementos alimenticios</option>
			        				<option value="Tienda naturista">Tienda naturista</option>
			        				<option value="Tortillería">Tortillería</option>
			        				<option value="Vinateria">Vinateria</option>
			              </select>
			                	<label>Giro</label>
			           	</div>
			      		
			           	<div class="row">
			           		<div class="input-field col l12">
			          			<textarea id="descripcion" name="descripcion" class="materialize-textarea"></textarea>
			          			<label for="descripcion">Descripción</label>
			        		</div>
			        	    <div class="input-field col l12">
				          		<textarea id="productos" name="productos" class="materialize-textarea"></textarea>
				          		<label for="productos">Productos</label>
				        	</div>
			            </div>

			            <br>
			            <div class="row">
			              	<div class="input-field col s4">
			          	    	<input id="correo" name="correo" type="text" class="validate">
			          		 	<label for="correo" class="activate">Correo</label>
			           		</div>
				           	<div class="input-field col s4">
				          		<input id="paginaWeb" name="paginaWeb" type="text" class="validate">
				          		<label for="paginaWeb" class="activate">Página web</label>
				           	</div>
				           	<div class="input-field col s4">
				          		<input id="facebook" name="facebook" type="text" class="validate">
				          		<label for="facebook" class="activate">Facebook</label>
				           	</div>
			      		</div>

			      		<div class="row">
			            	<div class="input-field col s4">
			          	    	<input id="twitter" name="twitter" type="text" class="validate">
			          			<label for="twitter" class="activate">Twitter</label>
			           		</div>
				           	<div class="input-field col s4">
				          		<input id="contacto" name="contacto" type="text" class="validate">
				          	 	<label for="contacto" class="activate">Contacto</label>
				           	</div>
				           		<div class="input-field col s4">
				          	     	<input id="telefonoContacto" name="telefonoContacto" type="text" class="validate">
				          			<label for="telefonoContacto" class="activate">Telefono de contacto</label>
				           		</div>
				      		</div>
				      	<div>
	      		     	
	      		     	<div class="row">		
	      					<input type="checkbox" id="tipo1"/>
	    						<label for="tipo1">
	    							Estoy de acuerdo y acepto los términos y condiciones
	    						</label></p>
	    				</div>	
								
				      	<div class="row"></div>

				        <div>
			            	<button class="waves-effect waves-light btn orange darken-4">Guardar</button>
				        </div>
					</form>
				</div>
				<div class="row"></div>
				<div class="row">	
					<h5 class="black-text center-align">Métodos de pago</h5>
						<div class="row">
							<h5 class="black-text">Pay pal</h5>
	    					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="ZE25KBGYFSRTA">
								<table>
								<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td>
						
								<div class="input-field col l6 m6 s12">
									<select name="os0">
										<option value="Plan 3 meses">Plan 3 meses : $180.00 MXN - mensual</option>
										<option value="Plan 6 meses">Plan 6 meses : $360.00 MXN - mensual</option>
										<option value="Plan anual">Plan anual : $700.00 MXN - anual</option>
									</select> 
								</div>

								</td></tr>
								</table>
								<input type="hidden" name="currency_code" value="MXN">
								<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
								<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
							</form>
	    				</div>
	    			</div>		
	    		
					<div class="row">
						<h5 class="black-text">Dinero mail</h5>
		    				<form action="http://www.payu.com.mx/" method="post" target="_top">
								<div class="input-field col l6 m6 s12">
									<select name="os0">
										<option value="Plan 3 meses">Plan 3 meses : $180.00 MXN - mensual</option>
										<option value="Plan 6 meses">Plan 6 meses : $360.00 MXN - mensual</option>
										<option value="Plan anual">Plan anual : $700.00 MXN - anual</option>
									</select> 
								</div>
								<div class="col l7">
									<img alt="" border="0" src="media/imagenes/OXXO.JPG">
								</div>
							</form>
					</div>

	    		</div>	
	    	</div>
	    </div>	

    
    </main>
    <?php include("piePagina.php"); ?>
	</body>
</html>	

        
	