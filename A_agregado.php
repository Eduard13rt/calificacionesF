<?php  
require('conn_db.php');
	$no_con=$_POST['no_con'];
	$pass=$_POST['pass'];
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$carrera=$_POST['carrera'];


	$query= "INSERT INTO Alumnos(noControlA,passwordA,nombreA,correo,carrera) values('$no_con','$pass','$nombre','$email','$carrera')";
	mysql_query($query);
	echo "<script type='text/javascript'>alert('Agregado...');</script>";
	echo "<script>location.href='usuarios.php'</script>";
?>