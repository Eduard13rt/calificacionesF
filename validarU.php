<?php 
	require("connectU_db.php");
	$nctrl=$_POST['ctrl'];
	$nom=$_POST['nom'];
	$carr=$_POST['carr'];

	$query= "INSERT INTO cuentas(nocontrol,nombre,carrera) values('$nctrl','$nom','$carr')";
	mysql_query($query);
	echo '<script>alert("Usuario agregado...")</script>';
	echo "<script>location.href='usuarios.php'</script>";


 ?>