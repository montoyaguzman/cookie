<html>

	<head>
		<meta charset="utf-8" />
		<title>Modificar Tips</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">
	</head>	
  
  <!-- INICIO DEL BODY -->
	<body>

  <!-- PHP-->
  <?php
    include("../../../modelo/conexion.php");
    
    $idTip = $_REQUEST['idTip'];

    $sql = "SELECT * FROM tipsCocina WHERE idTip =$idTip;"; 
    $consulta = mysqli_query($conexion,$sql); 
    $datosTip = mysqli_fetch_array($consulta);
  ?>
  
  <div class="row">
    <div class="col s12">
      <div class="card-panel teal">
        <span class="white-text"><h4><strong>Modificar tips de cocina</strong></h4></span>
      </div>
    </div>
  </div>

  <!-- INICIO DEL FORMULARIO -->
      
      <div class="row">
        <form class="col s10 offset-s1" method="post" action="3_modificaTipsCocinaAction.php" enctype="multipart/form-data">
            
            <div class="row">
              <div class="input-field col s4 m5">
                 <input id="idTip" name="idTip" type="text" class="validate" value="<?php echo $datosTip['idTip']; ?>">
                 <label for="idTip" class="activate">ID del tip</label>
              </div>
              <div class="input-field col s4 m5">
                 <input id="nombre" name="nombre" type="text" class="validate" value="<?php echo $datosTip['nombre']; ?>">
                 <label for="nombre" class="activate">Nombre del tip</label>
              </div>
              <div class="input-field col s4 m5">
                 <input id="link" name="link" type="text" class="validate" value="<?php echo $datosTip['link']; ?>">
                 <label for="link" class="activate">Enlace del tip</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                  <textarea id="descripcion" name="descripcion" class="materialize-textarea"><?php echo $datosTip['descripcion']; ?></textarea>
                  <label for="descripción">Descripción</label>
              </div>
            </div>  

          <div>
            <button class="waves-effect waves-light btn">Guardar</button>
          </div>
      </form>


      
</body>
</html>

