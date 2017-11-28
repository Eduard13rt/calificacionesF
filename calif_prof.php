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

<div class="dropdown">
  <button class="dropbtn">Opciones</button>
  <div class="dropdown-content">
  	
  		<a href='menu.php'>Atras</a>
  	
  </div>
</div>

<?php 



session_start();

$var= $_SESSION['user_prof'];
require('conn_db.php');

$consulta=mysql_query("SELECT Alumnos_has_Materias.Alumnos_noControlA, Alumnos_has_Materias.cal1,
	Alumnos_has_Materias.cal2,Alumnos_has_Materias.cal3,Materias.nombre_materia
	FROM Materias, Profesores_has_Materias,  Alumnos_has_Materias
	WHERE ($var = Profesores_has_Materias.Profesores_noControlP) AND (Profesores_has_Materias.Materias_idMaterias = Alumnos_has_Materias.Materias_idMaterias) AND (Profesores_has_Materias.Materias_idMaterias = Materias.idMaterias)")or die(mysql_error());
/*
$consulta2=mysql_query("SELECT Materias.nombre_materia
	FROM Materias, Profesores_has_Materias
	WHERE ($var = Profesores_has_Materias.Profesores_noControlP) AND (Profesores_has_Materias.Materias_idMaterias = Materias.idMaterias)")or die(mysql_error());
*/
$aux="algo";
$registro=mysql_fetch_array($consulta);
do{

	
	$nombre=$registro['nombre_materia'];

	echo "<div class='container'>";
	echo "<table class='table'>";
	if($nombre!==$aux){
		echo "<h2>$nombre</h2>";
		$aux=$nombre;
	}
	
	echo "<thead>";
	  echo "<tr>";
		echo "<th> ALUMNO</th>";
		echo "<th> CALIFICACION 1 </th>";
		echo "<th> CALIFICACION 2</th>";
		echo "<th> CALIFICACION 3</th>";
	  echo "</tr>";
	echo "<thead>";
  echo "<tbody>";

  $nocon=$registro['Alumnos_noControlA'];
	$cal1=$registro['cal1'];
	$cal2=$registro['cal2'];
	$cal3=$registro['cal3'];
	echo "<tr>";
		echo "<td>$nocon</td>";
		echo "<td>$cal1</td>";
		echo "<td>$cal2</td>";
		echo "<td>$cal3</td>";
	echo "</tr>";
	  
    
	echo "</tbody>";
	echo "</table>";
	echo "</div>";

  }
  while ($registro=mysql_fetch_array($consulta));




 ?>

<br>
<br>
<br>
 <div class="container">
	<center>
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<a href="calif_p_excel.php" target="_blank">
				<input type="submit" class= "btn btn-primary btn-block" value="IMPRIMIR">
				</a>
			</div>
		</div>
	</center>
</div>
</body>
</html>
<!-- 



    	do{
  	$nocon=$registro['Alumnos_noControlA'];
	$cal1=$registro['cal1'];
	$cal2=$registro['cal2'];
	$cal3=$registro['cal3'];
	echo "<tr>";
		echo "<td>$nocon</td>";
		echo "<td>$cal1</td>";
		echo "<td>$cal2</td>";
		echo "<td>$cal3</td>";
	echo "</tr>";
	  }
    while ($registro=mysql_fetch_array($consulta));
	echo "</tbody>";
	echo "</table>";
	echo "</div>";

	-->