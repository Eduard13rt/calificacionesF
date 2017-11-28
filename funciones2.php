<!DOCTYPE html>
<html>
<head>
	<!-- hoja de estilo bootstrap -->
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  	<!-- hoja de estilo propia -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">	
</head>
<body>


<div class="dropdown">
  <button class="dropbtn">Opciones</button>
  <div class="dropdown-content">
  	<?php 
  	session_start();

  	if($_SESSION['login']){

	if($_SESSION['tipo_usuario']==1)
		{
			echo "<a href='usuarios.php'>Usuarios</a>";
    		echo "<a href='reportes.php' target='_blank'>Reportes</a>"; 
    		echo "<a href='calif_prof.php'>calificaciones</a>";
    		echo "<a href='cerrar_sesion.php'>Salir</a>";
		}
		 else 
			if($_SESSION['tipo_usuario']==0)
			{
				echo "<a href='calif_alu.php'> Mis calificaciones</a>";
				echo "<a href='perfil.php'> Mi perfil</a>";
				echo "<a href='cerrar_sesion.php'>Salir</a>";
			}

			else{
				echo "debes <a href='index.php'>loguearte</a>";
				}
	} 
  	?>
  </div>
</div>
</body>
</html>