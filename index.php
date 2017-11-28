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

 <!-- fuentes de google referenciadas-->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Open+Sans|Open+Sans+Condensed:300|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

	
</head>
<body>

<center>
	<h1>Bienvenido</h1>
	<h2>INGRESA TU CUENTA</h2>

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
				<input  type="text" class ="form-control" name="username" placeholder="introduce tu cuenta">
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