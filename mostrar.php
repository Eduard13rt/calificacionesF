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
<body background="img/blueblur.jpg" style="background-repeat: no-repeat;height: 800px; background-position: center;  background-size: cover;">



<center>
<?php
include('connectU_db.php');
$consulta=mysql_query("SELECT * FROM cuentas")or die(mysql_error());
$registro=mysql_fetch_array($consulta);

echo "<div class='container'>";
echo "<table class='table'>";
	echo "<thead>";
	  echo "<tr>";
		echo "<th> NO CONTROL</th>";
		echo "<th> NOMBRE</th>";
		echo "<th> CARRERA </th>";
	  echo "</tr>";
	echo "<thead>";
  echo "<tbody>";
do{
	$con=$registro['nocontrol'];
	$nom=$registro['nombre'];
	$car=$registro['carrera'];
	echo "<tr>";
		echo "<td>$con</td>";
		echo "<td>$nom</td>";
		echo "<td>$car</td>";
	echo "</tr>";
	}

	while ($registro=mysql_fetch_array($consulta));
	echo "</tbody>";
	echo "</table>";
	echo "</div>";
	?>

</center>

<br/>
<br/>
<br/>
<br/>
<br/>

<center>
<h2 style="font-family: Quicksand";>
	IMPRIMIR REGISTROS
</h2>
</center>
<br/>

<div class="container">
	<center>
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<a href="imprimir.php">
				<input type="submit" class= "btn btn-primary btn-block" value="IMPRIMIR">
				</a>
</body>
			</div>
		</div>
	</center>
</div>
	
</html>


<!-- 


<center>
<?php
include('connectU_db.php');
$consulta=mysql_query("SELECT * FROM cuentas")or die(mysql_error());
$registro=mysql_fetch_array($consulta);

echo "<table border=3>";

	echo "<thead>";
		echo "<th> no. control</th>";
		echo "<th> nombre </th>";
		echo "<th> carrera </th>";
	echo "<thead>";

do{
	$con=$registro['nocontrol'];
	$nom=$registro['nombre'];
	$car=$registro['carrera'];
	echo "<tr>";
		echo "<td>$con</td>";
		echo "<td>$nom</td>";
		echo "<td>$car</td>";
	echo "</tr>";
	}

	while ($registro=mysql_fetch_array($consulta));
	echo "</table>";
	?>
</center>

-->