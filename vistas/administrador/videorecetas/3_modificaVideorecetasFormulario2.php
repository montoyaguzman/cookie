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
	</head>	
  
  <!-- INICIO DEL BODY -->
	<body>

    <!-- PHP-->
    <?php
      include("../../../modelo/conexion.php");
      
      $idVideoreceta = $_REQUEST['idVideoreceta'];

      $sql = "SELECT idVideoReceta,nombreVideoReceta,link,ingredientes,tiempoPreparacion,kilocalorias,tipoAlimento,tipoPlatillo,comida,ocasion,porciones,dificultad,informacionNutrimental FROM videoRecetas WHERE idVideoReceta =$idVideoreceta;"; 
      $consulta = mysqli_query($conexion,$sql); 
      $datosVideoreceta = mysqli_fetch_array($consulta);
    
      //echo "<br>".$sql;
    ?>
    
    <div class="row">
      <div class="col s12">
        <div class="card-panel teal">
          <span class="white-text"><h4><strong>Modificar Videorecetas</strong></h4></span>
        </div>
      </div>
    </div>

    <!-- INICIO DEL FORMULARIO -->
      <div class="row">
        <form class="col s10 offset-s1" method="post" action="3_modificaVideorecetasAction.php" enctype="multipart/form-data">
            
            <div class="row">
            <div class="input-field col s4 m5">
                 <input id="idVideoreceta" name="idVideoreceta" type="text" class="validate" value="<?php echo $datosVideoreceta['idVideoReceta']; ?>">
                 <label for="idVideoreceta" class="activate">ID de la videoreceta</label>
              </div>  
              <div class="input-field col s4 m5">
                 <input id="nombreVideoreceta" name="nombreVideoreceta" type="text" class="validate" value="<?php echo $datosVideoreceta['nombreVideoReceta']; ?>">
                 <label for="nombreVideoreceta" class="activate">Nombre de la videoreceta</label>
              </div>
              <div class="input-field col s4 m5">
                 <input id="link" name="link" type="text" class="validate" value="<?php echo $datosVideoreceta['link']; ?>">
                 <label for="link" class="activate">Enlace de la videoreceta</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                  <textarea id="ingredientes" name="ingredientes" class="materialize-textarea"><?php echo $datosVideoreceta['ingredientes']; ?></textarea>
                  <label for="ingredientes">Ingredientes</label>
              </div>
            </div>  
                    
            <br>
            <div class="row">
              <div class="input-field col s4">
                <input id="tiempoPreparacion" name="tiempoPreparacion" type="text" class="validate" value="<?php echo $datosVideoreceta['tiempoPreparacion']; ?>">
                <label for="tiempoPreparacion" class="activate">Tiempo de preparación</label>
              </div>
              <div class="input-field col s4">
                <input id="kilocalorias" name="kilocalorias" type="text" class="validate" value="<?php echo $datosVideoreceta['kilocalorias']; ?>">
                <label for="kilocalorias" class="activate">Kilocalorias</label>
              </div>
              <div class="input-field col s3">
                <select id="tipoAlimento" name="tipoAlimento">
                  <option value="Arroces" <?php if ($datosVideoreceta['tipoAlimento'] == "Arroces"){echo 'selected = "selected"';} ?> >Arroces</option>
                  <option value="Bebidas" <?php if ($datosVideoreceta['tipoAlimento'] == "Bebidas"){echo 'selected = "selected"';} ?> >Bebidas</option>
                  <option value="Carnes" <?php if ($datosVideoreceta['tipoAlimento'] == "Carnes"){echo 'selected = "selected"';} ?> >Carnes</option>
                  <option value="Ensaladas" <?php if ($datosVideoreceta['tipoAlimento'] == "Ensaladas"){echo 'selected = "selected"';} ?> >Ensaladas</option>
                  <option value="Helados" <?php if ($datosVideoreceta['tipoAlimento'] == "Helados"){echo 'selected = "selected"';} ?> >Helados</option>
                  <option value="Huevos" <?php if ($datosVideoreceta['tipoAlimento'] == "Huevos"){echo 'selected = "selected"';} ?> >Huevos</option>
                  <option value="Jugos y licuados" <?php if ($datosVideoreceta['tipoAlimento'] == "Jugos y Licuados"){echo 'selected = "selected"';} ?> >Jugos y licuados</option>
                  <option value="Legumbres y potajes" <?php if ($datosVideoreceta['tipoAlimento'] == "Legumbres y potajes"){echo 'selected = "selected"';} ?> >Legumbres y potajes</option>
                  <option value="Pastas y pizzas" <?php if ($datosVideoreceta['tipoAlimento'] == "Pastas y pizzas"){echo 'selected = "selected"';} ?> >Pastas y pizzas</option>
                  <option value="Pescados y mariscos" <?php if ($datosVideoreceta['tipoAlimento'] == "Pescados y mariscos"){echo 'selected = "selected"';} ?> >Pescados y mariscos</option>
                  <option value="Sopas" <?php if ($datosVideoreceta['tipoAlimento'] == "Sopas"){echo 'selected = "selected"';} ?>>Sopas</option>
                  <option value="Pures y cremas" <?php if ($datosVideoreceta['tipoAlimento'] == "Pures y cremas"){echo 'selected = "selected"';} ?> >Pures y cremas</option>
                  <option value="Postres y dulces" <?php if ($datosVideoreceta['tipoAlimento'] == "Postres y dulces"){echo 'selected = "selected"';} ?> >Postres y dulces</option>
                </select>
                  <label>Tipo de alimento</label>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s4">
                <select id="tipoPlatillo" name="tipoPlatillo">
                  <option value="Botana" <?php if ($datosVideoreceta['tipoPlatillo'] == "Botana"){echo 'selected = "selected"';} ?> >Botanas</option>
                  <option value="Entrada" <?php if ($datosVideoreceta['tipoPlatillo'] == "Entrada"){echo 'selected = "selected"';} ?> >Entrada</option>
                  <option value="Plato fuerte" <?php if ($datosVideoreceta['tipoPlatillo'] == "Plato fuerte"){echo 'selected = "selected"';} ?>>Plato fuerte</option>
                  <option value="Guarnición" <?php if ($datosVideoreceta['tipoPlatillo'] == "Guarnición"){echo 'selected = "selected"';} ?> >Guarnición</option>
                  <option value="Postre" <?php if ($datosVideoreceta['tipoPlatillo'] == "Postre"){echo 'selected = "selected"';} ?> >Postre</option>
                </select>
                  <label>Tipo de platillo</label>
                </div>
                <div class="input-field col s4">
                  <select id="comida" name="comida">
                    <option value="Desayuno" <?php if ($datosVideoreceta['comida'] == "Desayuno"){echo 'selected = "selected"';} ?>>Desayuno</option>
                    <option value="Almuerzo" <?php if ($datosVideoreceta['comida'] == "Almuerzo"){echo 'selected = "selected"';} ?>>Almuerzo</option>
                    <option value="Comida" <?php if ($datosVideoreceta['comida'] == "Comida"){echo 'selected = "selected"';} ?> >Comida</option>
                    <option value="Merienda" <?php if ($datosVideoreceta['comida'] == "Merienda"){echo 'selected = "selected"';} ?> >Merienda</option>
                    <option value="Cena" <?php if ($datosVideoreceta['comida'] == "Cena"){echo 'selected = "selected"';} ?>>Cena</option>
                  </select>  
                    <label>Comida</label>
                </div>
                <div class="input-field col s4">
                  <select id="ocasion" name="ocasion">
                    <option value="Comida diaria" <?php if ($datosVideoreceta['ocasion'] == "Comida diaria"){echo 'selected = "selected"';} ?> >Comida diaria</option>
                    <option value="Fin de semana" <?php if ($datosVideoreceta['ocasion'] == "Fin de semana"){echo 'selected = "selected"';} ?> >Fin de semana</option>
                    <option value="Fiesta" <?php if ($datosVideoreceta['ocasion'] == "Fiesta"){echo 'selected = "selected"';} ?> >Fiesta</option>
                    <option value="Picnic" <?php if ($datosVideoreceta['ocasion'] == "Picnic"){echo 'selected = "selected"';} ?> >Picnic</option>
                    <option value="Especial" <?php if ($datosVideoreceta['ocasion'] == "Especial"){echo 'selected = "selected"';} ?> >Especial</option>
                </select>
                    <label>Ocasión</label>
                </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s4">
                  <input id="porciones" name="porciones" type="text" class="validate" value="<?php echo $datosVideoreceta['porciones']; ?>">
                  <label for="porciones" class="activate">Porciones</label>
              </div>
              <div class="input-field col s4">
              <select id="dificultad" name="dificultad">
                  <option value="Sencilla" value="Especial" <?php if ($datosVideoreceta['dificultad'] == "Sencilla"){echo 'selected = "selected"';} ?> >Sencilla</option>
                  <option value="Media" <?php if ($datosVideoreceta['dificultad'] == "Media"){echo 'selected = "selected"';} ?> >Media</option>
                  <option value="Dificil" <?php if ($datosVideoreceta['dificultad'] == "Dificil"){echo 'selected = "selected"';} ?> >Dificil</option>
                </select>
                  <label>Dificultad</label>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="input-field col s6">
                <textarea id="informacionNutrimental" name="informacionNutrimental" class="materialize-textarea"><?php echo "".$datosVideoreceta['informacionNutrimental']; ?></textarea>
                <label for="informacionNutrimental">Información Nutrimental</label>
              </div>
            </div>  

          <div>
            <button class="waves-effect waves-light btn">Guardar</button>
          </div>
      </form>
    </div>  




  </body>
</html>

