<html>

	<head>
		<meta charset="utf-8" />
		<title>Modificar Negocios</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">

    <!-- JAVASCRIPT -->
      <script type="text/javascript">
        $(document).ready(function() {
          $('select').material_select();
          })
      </script>
    <!-- JAVASCRIPT -->

    <!-- JQUERY -->
      <script>  
        window.mostrarVistaPrevia = function mostrarVistaPrevia() {

            var Archivos, Lector;

            //Para navegadores antiguos
            if (typeof FileReader !== "function") {
                jQuery('#infoNombre').text('[Vista previa no disponible]');
                jQuery('#infoTamaño').text('(su navegador no soporta vista previa!)');
                return;
            }

            Archivos = jQuery('#imagen')[0].files;
            if (Archivos.length > 0) {

                Lector = new FileReader();
                Lector.onloadend = function(e) {
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
           // jQuery('#vistaPrevia').attr('src', "http://localhost/proyectos/imagenes/blanco.jpg");

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
<!-- JQUERY -->

	</head>	
  
  <!-- INICIO DEL BODY -->
	<body>

    <!-- PHP-->
    <?php
      include("../../../modelo/conexion.php");
      
      $idNegocio = $_REQUEST['idNegocio'];
      //echo "<br>".$idNegocio;

      $sql = "SELECT idNegocio, nombreNegocio,imagen,descripcion,giro,productos,correo,pagina,facebook,twitter,contacto,telefonoContacto FROM negocios WHERE idNegocio =$idNegocio;"; 
      $consulta = mysqli_query($conexion,$sql); 
      $datosNegocio = mysqli_fetch_array($consulta);
      $ruta = "imagenesNegocios/".$datosNegocio['imagen'];
      
      /*if($consulta){
        echo "<br>Consulta exitosa";
      }
      else
      { 
        echo "<br>No se encontro esa receta";
      }*/
      //echo "<br>".$datosReceta['nombreReceta'];
      //echo "<br><img src='$ruta'/>"; 
    ?>

    <div class="row">
        <div class="col s12">
          <div class="card-panel teal">
            <span class="white-text"><h4><strong>Modificar negocios</strong></h4>
            </span>
          </div>
        </div>
    </div>

<!-- INICIO DEL FORMULARIO -->
      
      <div class="row">
        <form class="col s10 offset-s1" method="post" action="3_modificaNegociosAction.php" enctype="multipart/form-data">
            
          <div class="row">
            <div class="input-field col s6 m2">
              <input id="idNegocio" name="idNegocio" type="text" class="validate" value="<?php echo $datosNegocio['idNegocio']; ?>" readonly>
              <label for="nombreNegocio" class="activate">Nombre del negocio</label>
            </div>
          </div>

          <br>
          <div class="row">
              <div class="input-field col s6 m5">
                 <input id="nombreNegocio" name="nombreNegocio" type="text" class="validate" value="<?php echo $datosNegocio['nombreNegocio']; ?>">
                 <label for="nombreNegocio" class="activate">Nombre del negocio</label>
              </div>
            </div>


          <br>
          <div class="row">
              <div class="col s12 m5">
                <div class="card-panel teal">
                  <img class = "responsive-img" id="vistaPrevia" src="<?php echo "".$ruta; ?>"/>
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
                    <input class="file-path validate" type="text" id="direccion" value="<?php echo "".$datosNegocio['imagen']; ?>">
                  </div>
                </div>
              </div>
            </div>

        <div class="row">
          <div class="input-field col s3">
              <select id="giro" name="giro">
                <option value="Abarrotes" <?php if ($datosNegocio['giro'] == "Abarrotes"){echo 'selected = "selected"';} ?>>Abarrotes</option>
                <option value="Carnicería" <?php if ($datosNegocio['giro'] == "Carnicería"){echo 'selected = "selected"';} ?>>Carnicería</option>
                <option value="Centro de nutrición" <?php if ($datosNegocio['giro'] == "Centro de nutrición"){echo 'selected = "selected"';} ?>>Centro de nutrición</option>
                <option value="Cremería" <?php if ($datosNegocio['giro'] == "Cremería"){echo 'selected = "selected"';} ?>>Cremería</option>
                <option value="Dulcería" <?php if ($datosNegocio['giro'] == "Dulcería"){echo 'selected = "selected"';} ?>>Dulcería</option>
                <option value="Frutería y verdulería" <?php if ($datosNegocio['giro'] == "Frutería y verdulería"){echo 'selected = "selected"';} ?>>Frutería y verdulería</option>
                <option value="Materias primas" <?php if ($datosNegocio['giro'] == "Materias primas"){echo 'selected = "selected"';} ?>>Materias primas</option>
                <option value="Pescadería" <?php if ($datosNegocio['giro'] == "Pescadería"){echo 'selected = "selected"';} ?>>Pescadería</option>
                <option value="Polleria" <?php if ($datosNegocio['giro'] == "Pollería"){echo 'selected = "selected"';} ?>>Polleria</option>
                <option value="Restaurante" <?php if ($datosNegocio['giro'] == "Restaurante"){echo 'selected = "selected"';} ?>>Restaurante</option>
                <option value="Refresquera" <?php if ($datosNegocio['giro'] == "Refresquera"){echo 'selected = "selected"';} ?>>Refresquera</option>
                <option value="Semillas y chiles secos" <?php if ($datosNegocio['giro'] == "Semillas y chiles secos"){echo 'selected = "selected"';} ?>>Semillas y chiles secos</option>
                <option value="Suplementos alimenticios" <?php if ($datosNegocio['giro'] == "Suplementos alimenticios"){echo 'selected = "selected"';} ?>>Suplementos alimenticios</option>
                <option value="Tienda naturista" <?php if ($datosNegocio['giro'] == "Tienda naturista"){echo 'selected = "selected"';} ?>>Tienda naturista</option>
                <option value="Tortillería" <?php if ($datosNegocio['giro'] == "Tortillería"){echo 'selected = "selected"';} ?>>Tortillería</option>
                <option value="Vinateria" <?php if ($datosNegocio['giro'] == "Vinatería"){echo 'selected = "selected"';} ?>>Vinateria</option>
                </select>
                  <label>Giro</label>
            </div>
          
            </div>

          <br>
            <div class="row">
              <div class="input-field col s6">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea"><?php echo $datosNegocio['descripcion']; ?></textarea>
                <label for="descripcion">Descripción</label>
            </div>
              <div class="input-field col s6">
                <textarea id="productos" name="productos" class="materialize-textarea"><?php echo $datosNegocio['productos']; ?></textarea>
                <label for="productos">Productos</label>
            </div>
            </div>

            <br>
            <div class="row">
                <div class="input-field col s4">
                  <input id="correo" name="correo" type="text" class="validate" value="<?php echo $datosNegocio['correo']; ?>">
                <label for="correo" class="activate">Correo</label>
              </div>
              <div class="input-field col s4">
                <input id="paginaWeb" name="paginaWeb" type="text" class="validate" value="<?php echo $datosNegocio['pagina']; ?>">
                <label for="paginaWeb" class="activate">Página web</label>
              </div>
              <div class="input-field col s4">
                <input id="facebook" name="facebook" type="text" class="validate" value="<?php echo $datosNegocio['facebook']; ?>">
                <label for="facebook" class="activate">Facebook</label>
              </div>
          </div>

          <div class="row">
              <div class="input-field col s4">
                  <input id="twitter" name="twitter" type="text" class="validate" value="<?php echo $datosNegocio['twitter']; ?>">
                <label for="twitter" class="activate">Twitter</label>
              </div>
              <div class="input-field col s4">
                <input id="contacto" name="contacto" type="text" class="validate" value="<?php echo $datosNegocio['contacto']; ?>">
                <label for="contacto" class="activate">Contacto</label>
              </div>
                <div class="input-field col s4">
                    <input id="telefonoContacto" name="telefonoContacto" type="text" class="validate" value="<?php echo $datosNegocio['telefonoContacto']; ?>">
                  <label for="telefonoContacto" class="activate">Telefono de contacto</label>
                </div>
          </div>

          <div>
              <button class="waves-effect waves-light btn">Guardar</button>
          </div>

      </form>
    </div>
    

     
</body>
</html>

