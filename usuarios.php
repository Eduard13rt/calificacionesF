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


	<!-- Hoja de estilos personal -->
	<link rel="stylesheet"  href="css/estilo.css">

</head>
<body>

<ul>
  <li><a href="menu.php">Home</a></li>
  <li><a class="active" href="usuarios.php">Usuarios</a></li>
  <li><a href="borrar.php">Borrar</a></li>
  <li><a href="agregar_al.php">Agregar Alumno</a></li>
  <li><a href="agregar_pro.php">Agregar Profesor</a></li>
  <li><a href="menu.php">Atras</a></li>
  <li><a href="cerrar_sesion.php">Salir</a></li>

</ul>




<center>
	<h2>ALUMNOS</h2>
<?php
require('conn_db.php');
$consulta=mysql_query("SELECT * FROM Alumnos")or die(mysql_error());
$consulta2=mysql_query("SELECT * FROM Profesores")or die(mysql_error());
$registro=mysql_fetch_array($consulta);
$registro2=mysql_fetch_array($consulta2);

echo "<div class='container'>";
echo "<table class='table'>";
	echo "<thead>";
	  echo "<tr>";
		echo "<th> NO CONTROL</th>";
		echo "<th> PASSWORD</th>";
		echo "<th> NOMBRE </th>";
		echo "<th> CORREO </th>";
		echo "<th> CARRERA </th>";
	  echo "</tr>";
	echo "<thead>";
  echo "<tbody>";
do{
	$nocon=$registro['noControlA'];
	$pass=$registro['passwordA'];
	$nom=$registro['nombreA'];
	$email=$registro['correo'];
	$carr=$registro['carrera'];
	echo "<tr>";
		echo "<td>$nocon</td>";
		echo "<td>$pass</td>";
		echo "<td>$nom</td>";
		echo "<td>$email</td>";
		echo "<td>$carr</td>";
	echo "</tr>";
	}

	while ($registro=mysql_fetch_array($consulta));
	echo "</tbody>";
	echo "</table>";
	echo "</div>";



echo "<h2> PROFESORES </h2>";

echo "<div class='container'>";
echo "<table class='table'>";
	echo "<thead>";
	  echo "<tr>";
		echo "<th> NOMBRE</th>";
		echo "<th> NO TARJETA</th>";
		echo "<th> PASSWORD</th>";
		echo "<th> CORREO </th>";
		echo "<th> AREA </th>";
	  echo "</tr>";
	echo "<thead>";
  echo "<tbody>";


  do{
	$noconP=$registro2['noControlP'];
	$passP=$registro2['passwordP'];
	$nomP=$registro2['nombreP'];
	$emailP=$registro2['correo'];
	$areaP=$registro2['area'];
	echo "<tr>";
		echo "<td>$nomP</td>";
		echo "<td>$noconP</td>";
		echo "<td>$passP</td>";
		echo "<td>$emailP</td>";
		echo "<td>$areaP</td>";
	echo "</tr>";
	}

	while ($registro2=mysql_fetch_array($consulta2));
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
<h2>IMPRIMIR REGISTROS</h2>
</center>
<br/>

<div class="container">
	<center>
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<a href="generapdf2.php" target="_blank">
				<input type="submit" class= "btn btn-primary btn-block" value="ALUMNOS">
				</a>
				<br>
				<a href="generapdf.php" target="_blank">
				<input type="submit" class= "btn btn-primary btn-block" value="PROFESORES">
				</a>
</body>
			</div>
		</div>
	</center>
</div>
	
</html>
