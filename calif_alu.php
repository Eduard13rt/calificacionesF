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
	<center>
		
		<h2>CALIFICACIONES</h2>
		<br>
	</center>

<?php  

session_start();

 
 $var = $_SESSION['user_alumno'];
require('conn_db.php');
$consulta=mysql_query("SELECT Materias.nombre_materia, Alumnos_has_Materias.Materias_idMaterias,
	Alumnos_has_Materias.cal1,Alumnos_has_Materias.cal2,Alumnos_has_Materias.cal3
	FROM Materias, Alumnos_has_Materias
	WHERE $var = (Alumnos_has_Materias.Alumnos_noControlA) AND (Alumnos_has_Materias.Materias_idMaterias = Materias.idMaterias)")or die(mysql_error());
$registro=mysql_fetch_array($consulta);

echo "<div class='container'>";
echo "<table class='table'>";
	echo "<thead>";
	  echo "<tr>";
		echo "<th> MATERIAS</th>";
		echo "<th> ID MATERIA</th>";
		echo "<th> CALIFICACION 1 </th>";
		echo "<th> CALIFICACION 2</th>";
		echo "<th> CALIFICACION 3</th>";
	  echo "</tr>";
	echo "<thead>";
  echo "<tbody>";
	do{
		$nombre=$registro['nombre_materia'];
		$idmat=$registro['Materias_idMaterias'];
		$cal1=$registro['cal1'];
		$cal2=$registro['cal2'];
		$cal3=$registro['cal3'];
	echo "<tr>";
		echo "<td>$nombre</td>";
		echo "<td>$idmat</td>";
		echo "<td>$cal1</td>";
		echo "<td>$cal2</td>";
		echo "<td>$cal3</td>";
	echo "</tr>";
		}

	while ($registro=mysql_fetch_array($consulta));
	echo "</tbody>";
	echo "</table>";
	echo "</div>";


?>
</body>
</html>