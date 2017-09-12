<html>

	<head>
		<meta charset="utf-8" />
		<title>Modificar Recetas</title>
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
           jQuery('#vistaPrevia').attr('src', "http://localhost/proyectos/imagenes/blanco.jpg");

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
    
    $idReceta = $_REQUEST['idReceta'];

    $sql = "SELECT idReceta,nombreReceta,imagen,ingredientes,pasos,tiempoPreparacion,kilocalorias,tipoAlimento,tipoPlatillo,comida,ocasion,porciones,dificultad,informacionNutrimental,tipsReceta FROM recetas WHERE idReceta =$idReceta;"; 
    $consulta = mysqli_query($conexion,$sql); 
    $datosReceta = mysqli_fetch_array($consulta);
    $ruta = "imagenesRecetas/".$datosReceta['imagen'];
    
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
        <span class="white-text"><h4><strong>Modificar recetas</strong></h4></span>
      </div>
    </div>
  </div>

  <!-- INICIO DEL FORMULARIO -->   
      <div class="row">
        <form class="col s10 offset-s1" method="post" action="3_modificaRecetasAction.php" enctype="multipart/form-data">
          
          <div class="row">
            <div class="input-field col s6">
              <input id="id" name="id" type="text" class="validate" value="<?php echo "".$datosReceta['idReceta']; ?>" readonly>
              <label for="nombreReceta">ID de la receta</label>
            </div>
            <div class="input-field col s6">
              <input id="nombreReceta" name="nombreReceta" type="text" class="validate" value="<?php echo "".$datosReceta['nombreReceta']; ?>" >
              <label for="nombreReceta">Nombre de la receta</label>
            </div>
          </div>

            <div class="row">
              <div class="col s6 m5">
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
                  <input class="file-path validate" type="text" id="direccion" value="<?php echo "".$datosReceta['imagen']; ?>" >
                </div>
              </div>
            </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s6">
                  <textarea id="ingredientes" name="ingredientes" class="materialize-textarea"><?php echo $datosReceta['ingredientes']; ?></textarea>
                  <label for="ingredientes">Ingredientes</label>
              </div>
              <div class="input-field col s6">
                <textarea id="pasos" name="pasos" class="materialize-textarea"><?php echo "".$datosReceta['pasos']; ?></textarea>
                <label for="pasos">Pasos</label>
              </div>
            </div>

            <br>
              <div class="row">
                <div class="input-field col s4">
                  <input id="tiempoPreparacion" name="tiempoPreparacion" type="text" class="validate" value="<?php echo "".$datosReceta['tiempoPreparacion']; ?>">
                  <label for="tiempoPreparacion" class="activate">Tiempo de preparación</label>
                </div>
                <div class="input-field col s4">
                  <input id="kilocalorias" name="kilocalorias" type="text" class="validate" value="<?php echo "".$datosReceta['kilocalorias']; ?>">
                  <label for="kilocalorias" class="activate">Kilocalorias</label>
                </div>
                <div class="input-field col s3">
                  <select id="tipoAlimento" name="tipoAlimento">
                    <option value="Arroces" <?php if ($datosReceta['tipoAlimento'] == "Arroces"){echo 'selected = "selected"';} ?> >Arroces</option>
                    <option value="Bebidas" <?php if ($datosReceta['tipoAlimento'] == "Bebidas"){echo 'selected = "selected"';} ?> >Bebidas</option>
                    <option value="Carnes" <?php if ($datosReceta['tipoAlimento'] == "Carnes"){echo 'selected = "selected"';} ?> >Carnes</option>
                    <option value="Ensaladas" <?php if ($datosReceta['tipoAlimento'] == "Ensaladas"){echo 'selected = "selected"';} ?> >Ensaladas</option>
                    <option value="Helados" <?php if ($datosReceta['tipoAlimento'] == "Helados"){echo 'selected = "selected"';} ?> >Helados</option>
                    <option value="Huevos" <?php if ($datosReceta['tipoAlimento'] == "Huevos"){echo 'selected = "selected"';} ?> >Huevos</option>
                    <option value="Jugos y licuados" <?php if ($datosReceta['tipoAlimento'] == "Jugos y Licuados"){echo 'selected = "selected"';} ?> >Jugos y licuados</option>
                    <option value="Legumbres y potajes" <?php if ($datosReceta['tipoAlimento'] == "Legumbres y potajes"){echo 'selected = "selected"';} ?> >Legumbres y potajes</option>
                    <option value="Pastas y pizzas" <?php if ($datosReceta['tipoAlimento'] == "Pastas y pizzas"){echo 'selected = "selected"';} ?> >Pastas y pizzas</option>
                    <option value="Pescados y mariscos" <?php if ($datosReceta['tipoAlimento'] == "Pescados y mariscos"){echo 'selected = "selected"';} ?> >Pescados y mariscos</option>
                    <option value="Sopas" <?php if ($datosReceta['tipoAlimento'] == "Sopas"){echo 'selected = "selected"';} ?>>Sopas</option>
                    <option value="Pures y cremas" <?php if ($datosReceta['tipoAlimento'] == "Pures y cremas"){echo 'selected = "selected"';} ?> >Pures y cremas</option>
                    <option value="Postres y dulces" <?php if ($datosReceta['tipoAlimento'] == "Postres y dulces"){echo 'selected = "selected"';} ?> >Postres y dulces</option>
                </select>
                  <label>Tipo de alimento</label>
                </div>
              </div>

            <br>
            <div class="row">
              <div class="input-field col s4">
                <select id="tipoPlatillo" name="tipoPlatillo">
                  <option value="Botana" <?php if ($datosReceta['tipoPlatillo'] == "Botana"){echo 'selected = "selected"';} ?> >Botanas</option>
                  <option value="Entrada" <?php if ($datosReceta['tipoPlatillo'] == "Entrada"){echo 'selected = "selected"';} ?> >Entrada</option>
                  <option value="Plato fuerte" <?php if ($datosReceta['tipoPlatillo'] == "Plato fuerte"){echo 'selected = "selected"';} ?>>Plato fuerte</option>
                  <option value="Guarnición" <?php if ($datosReceta['tipoPlatillo'] == "Guarnición"){echo 'selected = "selected"';} ?> >Guarnición</option>
                  <option value="Postre" <?php if ($datosReceta['tipoPlatillo'] == "Postre"){echo 'selected = "selected"';} ?> >Postre</option>
                </select>
                  <label>Tipo de platillo</label>
              </div>
              <div class="input-field col s4">
                <select id="comida" name="comida">
                  <option value="Desayuno" <?php if ($datosReceta['comida'] == "Desayuno"){echo 'selected = "selected"';} ?>>Desayuno</option>
                  <option value="Almuerzo" <?php if ($datosReceta['comida'] == "Almuerzo"){echo 'selected = "selected"';} ?>>Almuerzo</option>
                  <option value="Comida" <?php if ($datosReceta['comida'] == "Comida"){echo 'selected = "selected"';} ?> >Comida</option>
                  <option value="Merienda" <?php if ($datosReceta['comida'] == "Merienda"){echo 'selected = "selected"';} ?> >Merienda</option>
                  <option value="Cena" <?php if ($datosReceta['comida'] == "Cena"){echo 'selected = "selected"';} ?>>Cena</option>
                </select>
                  <label>Comida</label>
              </div>
              <div class="input-field col s4">
                <select id="ocasion" name="ocasion">
                  <option value="Comida diaria" <?php if ($datosReceta['ocasion'] == "Comida diaria"){echo 'selected = "selected"';} ?> >Comida diaria</option>
                  <option value="Fin de semana" <?php if ($datosReceta['ocasion'] == "Fin de semana"){echo 'selected = "selected"';} ?> >Fin de semana</option>
                  <option value="Fiesta" <?php if ($datosReceta['ocasion'] == "Fiesta"){echo 'selected = "selected"';} ?> >Fiesta</option>
                  <option value="Picnic" <?php if ($datosReceta['ocasion'] == "Picnic"){echo 'selected = "selected"';} ?> >Picnic</option>
                  <option value="Especial" <?php if ($datosReceta['ocasion'] == "Especial"){echo 'selected = "selected"';} ?> >Especial</option>
                </select>
                  <label>Ocasión</label>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s4">
                  <input id="porciones" name="porciones" type="text" class="validate" value="<?php echo "".$datosReceta['porciones']; ?>">
                  <label for="porciones" class="activate">Porciones</label>
              </div>
              <div class="input-field col s4">
                <select id="dificultad" name="dificultad">
                  <option value="Sencilla" value="Especial" <?php if ($datosReceta['dificultad'] == "Sencilla"){echo 'selected = "selected"';} ?> >Sencilla</option>
                  <option value="Media" <?php if ($datosReceta['dificultad'] == "Media"){echo 'selected = "selected"';} ?> >Media</option>
                  <option value="Dificil" <?php if ($datosReceta['dificultad'] == "Dificil"){echo 'selected = "selected"';} ?> >Dificil</option>
                </select>
                  <label>Dificultad</label>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s6">
                  <textarea id="informacionNutrimental" name="informacionNutrimental" class="materialize-textarea"><?php echo "".$datosReceta['informacionNutrimental']; ?></textarea>
                  <label for="informacionNutrimental">Información Nutrimental</label>
              </div>
              <div class="input-field col s6">
                <textarea id="tipsReceta" name="tipsReceta" class="materialize-textarea"><?php echo "".$datosReceta['tipsReceta']; ?></textarea>
                <label for="tipsReceta">Tips de la receta</label>
              </div>
            </div> 
          
          <div>
             <button class="waves-effect waves-light btn">Actualizar<r</button>
          </div>
      </form>
    </div>  
</body>
</html>

