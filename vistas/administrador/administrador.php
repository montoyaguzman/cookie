<?php
session_start();

if ($_SESSION['email'])
{
echo "Bienvenido ".$_SESSION['email'];
?>

  <html>
	<head>
		<meta charset="utf-8" />
		<title>Administrador</title>
		<script src="../estilos/materialize/js/jquery-2.2.1.min.js"></script>
		<script src="../estilos/materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" href="../estilos/materialize/css/materialize.css" media="screen, projection">
		<style type="text/css">
			html {
    		font-family: GillSans, Calibri, Trebuchet, sans-serif;
  			}
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
			$('.button-collapse').sideNav({'edge':'left'})
			});
		</script>
	</head>	
  
  <!-- INICIO DEL BODY -->
	<body>

		<a href="../1_cerrarSesion.php">CERRAR SESION</a>

	    <div class="row">
	        <div class="col s12">
	          <div class="card-panel teal">
	            <span class="white-text"><h4><strong>Panel de administración</strong></h4>
	            </span>
	          </div>
	        </div>
	    </div>
 
<?php 
include("menu.shtml");
?>

  	</body>
 </html>	

<?php
} 
else
{
	echo "No has iniciado sesion";
	header("Refresh: 3; url = 1_iniciarSesionFormulario.php");	
}
?>
        
	