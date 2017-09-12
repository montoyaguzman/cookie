<html>

	<head>
		<meta charset="utf-8" />
		<title>BD -- Recetas</title>
		<script src="../../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../../estilos/materialize/css/materialize.css" media="screen, projection">
    <link rel="stylesheet" href="../../estilos/font-awesome-4.5.0/css/font-awesome.min.css">
	</head>	


<!-- INICIO DEL BODY -->
	<body>

		<div class="row">
        <div class="col s12">
        <div class="card-panel teal">
        	<span class="white-text"><h4><strong>Agenda de Recetas</strong></h4>
        	</span>
        </div>
        </div>
        </div>

<!-- INICIO DE LA TABLA -->
    <div class ="row">  			
    <div class = "col s10 offset-s1">
      <table class="responsive-table bordered highlight centered">
        <thead>
          <tr class="white-text blue darken-2">
            <th>ID</th>
            <th>Nombre de la receta</th>
            <th>Tipo de Alimento</th>
            <th>Tipo de Platillo</th>
            <th>Tipo de Comida</th>
            <th>Tipo de Ocasión</th>
            <th>Ver</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
<?php 
  
  include("../../../modelo/conexion.php");

  $sql = "SELECT idReceta,nombreReceta,tipoAlimento,tipoPlatillo,comida,ocasion FROM recetas";
  $consulta= mysqli_query($conexion,$sql);

  while($datosReceta = mysqli_fetch_array($consulta)) 
  {      
?>
        <tbody class="black-text deep-purple lighten-5">
          <tr>
            <td><?php echo $datosReceta['idReceta']; ?></td>
            <td><?php echo $datosReceta['nombreReceta']; ?></td>
            <td><?php echo $datosReceta['tipoAlimento']; ?></td>
            <td><?php echo $datosReceta['tipoPlatillo']; ?></td>
            <td><?php echo $datosReceta['comida']; ?></td>
            <td><?php echo $datosReceta['ocasion']; ?></td>
            
            <!-- BOTONONES -->
            <td>
              <a href = "<?php echo "4_consultaSimpleRecetasAction.php?idReceta=".$datosReceta['idReceta'].""; ?>" >
                <i class="small fa fa-search-plus"></i>    
              </a>
            </td>
            <td>
              <a href = "<?php echo "3_modificaRecetasFormulario2.php?idReceta=".$datosReceta['idReceta'].""; ?>" >
                <i class="small fa fa-pencil"></i>    
              </a>
            </td>
            <td>
                <a href = "<?php echo "2_borraRecetasAction.php?idReceta=".$datosReceta['idReceta'].""; ?>" >
                <i class="small fa fa-trash"></i>    
              </a>    
            </td>
          </tr>

        </tbody>
<?php } ?>
      </table>
    </div>

  	</body>
</html>













