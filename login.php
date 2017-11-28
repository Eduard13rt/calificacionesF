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
<body background="img/office.jpg" style="background-repeat: no-repeat;height: 800px; background-position: center;  background-size: cover;">

<center>
	<h2 style="font-family: Quicksand";>
	INGRESA TU CUENTA
</h2>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


</center>

<center>
<div class="container" style="color: white;">
	<div class="row">
		<div class="col-md-4">
		</div>
		<center>
		<div class="col-md-4">

			<form action="validar.php" method="POST">

				<label class="text-center" style="font-size: 25px;font-family: Quicksand;">USUARIO</label>
				<input  type="text" class ="form-control" name="username" placeholder="introduce tu nombre">
				<br/>

				<label class="text-center" style="font-size: 25px;font-family: Quicksand;">PASSWORD</label>
				<input type="password" class ="form-control" name="password" placeholder="introduce tu password">

				<input type="submit" class= "btn btn-primary btn-block" value="Enviar">
			</form>
			
		</div>
		</center>
	</div>
</div>

	



</div>
</center>


</body>
</html>