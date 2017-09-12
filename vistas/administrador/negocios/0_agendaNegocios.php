<html>

	<head>
		<meta charset="utf-8" />
		<title>BD -- Negocio</title>
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
        	<span class="white-text"><h4><strong>Agenda de Negocios</strong></h4>
        	</span>
        </div>
        </div>
        </div>

<!-- INICIO DE LA TABLA -->
    <div class="row">
      <div class="col s6 offset-s6">
        <a href = "<?php echo "1_altaNegociosFormulario.html"; ?>" >
          <i class="small fa fa-plus-square"></i>    
        </a>
      </div>
    </div>

    <div class ="row">  			
    <div class = "col s10 offset-s1">
      <table class="responsive-table bordered highlight centered">
        <thead>
          <tr class="white-text blue darken-2">
            <th>ID</th>
            <th>Nombre de la receta</th>
            <th>Giro</th>
            <th>Calificacion del Negocio</th>
            <th>Visitas</th>
            <th>Contacto</th>
            <th>Telefono de contacto</th>
            <th>Ver</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
<?php 
  
  include("../../../modelo/conexion.php");

  $sql = "SELECT idNegocio,nombreNegocio,giro,calificacionNegocio,visitas,contacto,telefonoContacto FROM negocios";
  $consulta= mysqli_query($conexion,$sql);

  while($datosNegocio = mysqli_fetch_array($consulta)) 
  {      
?>
        <tbody class="black-text deep-purple lighten-5">
          <tr>
            <td><?php echo $datosNegocio['idNegocio']; ?></td>
            <td><?php echo $datosNegocio['nombreNegocio']; ?></td>
            <td><?php echo $datosNegocio['giro']; ?></td>
            <td><?php echo $datosNegocio['calificacionNegocio']; ?></td>
            <td><?php echo $datosNegocio['visitas']; ?></td>
            <td><?php echo $datosNegocio['contacto']; ?>
            <td><?php echo $datosNegocio['telefonoContacto']; ?>
            </td>
            
            <!-- BOTONONES -->
            <td>
              <a href = "<?php echo "4_consultaSimpleNegociosAction.php?idNegocio=".$datosNegocio['idNegocio'].""; ?>" >
                <i class="small fa fa-search-plus"></i>    
              </a>
            </td>
            <td>
              <a href = "<?php echo "3_modificaNegociosFormulario2.php?idNegocio=".$datosNegocio['idNegocio'].""; ?>" >
                <i class="small fa fa-pencil"></i>    
              </a>
            </td>
            <td>
                <a href = "<?php echo "2_borraNegociosAction.php?idNegocio=".$datosNegocio['idNegocio'].""; ?>" >
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













