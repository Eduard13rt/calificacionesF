<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

 	<!-- Hoja de estilos descargada de la pagina oficial de bootstrap -->
 	<link href="css/bootstrap.min.css" rel="stylesheet">


	<!-- Hoja de estilos personal -->
	<link rel="stylesheet"  href="css/estilo.css">
	
</head>
<body>
<ul>
  <li><a href="menu.php">Home</a></li>
  <li><a class="active" href="#">Agregar profesor</a></li>
  <li><a href="usuarios.php">Atras</a></li>
  <li><a href="cerrar_sesion.php">Salir</a></li>

</ul>
<center>
  <h2>
    Agregar profesor
  </h2>
</center>
<div class="container">
	<div class="row">
    <br>
    <br>
    <br>
    <br>
    <br>
		<form action="P_agregado.php" method="POST">
		  <br>
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <input type="text" class ="form-control" name="nombre" placeholder="NOMBRE" required>
          <input type="text" class ="form-control" name="no_con" placeholder="NO TARJETA" required>
          <input type="text" class ="form-control" name="pass" placeholder="PASSWORD" required>
          <input type="text" class ="form-control" name="email" placeholder="CORREO" required>
          <input type="text" class ="form-control" name="area" placeholder="AREA" required>

          <br>
          <input type="submit" class= "btn btn-primary btn-block" value="Agregar Profesor">
          <br> 
        </div>
		</form>

	</div>
</div>


</body>
</html>