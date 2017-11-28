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
<body background="img/people.jpg" style="background-repeat: no-repeat;height: 800px; background-position: center;  background-size: cover;">





<div class="container">
	<center>
		
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="validarADMIN.php" method="POST">
          <br>

          <label style="color: white">USERNAME</label>
          <input type="text" class ="form-control" name="user" placeholder="introduce el nombre">
          <label style="color: white">PASSWORD</label>
          <input type="text" class ="form-control" name="pass" placeholder="introduce una contraseña">
          <br>
          <input type="submit" class= "btn btn-primary btn-block" value="Agregar usuario">
          <br>         
        </form>
		</div>
	</div>
	</center>
</div>
</body>
</html>