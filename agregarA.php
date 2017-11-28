<!DOCTYPE html>
<html>
<head>
	<title></title>


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

 <!-- Hoja de estilos descargada de la pagina oficial de bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- fuentes de google referenciadas-->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans|Open+Sans+Condensed:300|Quicksand" rel="stylesheet">

</head>
<body background="img/air.jpg" style="background-repeat: no-repeat;height: 800px; background-position: center;  background-size: cover;">

<div class="container">
	<center>
		
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="validarU.php" method="POST">
          <br>
          <label style="color: white">NO. CONTROL</label>
          <input type="number" class ="form-control" name="ctrl" placeholder="introduce numero control">
          <label style="color: white">NOMBRE</label>
          <input type="text" class ="form-control" name="nom" placeholder="introduce el nombre">
          <label style="color: white">CARRERA</label>
          <input type="text" class ="form-control" name="carr" placeholder="introduce la carrera">
          <br>
          <input type="submit" class= "btn btn-primary btn-block" value="Agregar usuario">
          <br>         
        </form>
		</div>
	</div>
	</center>
</div>

<!--	
vamos a entregar el documento
en azul todos los cambios
con hipervinculos agregar en apendices los documentos viabilidad

-->
</body>
</html>