<?php  
require('conn_db.php');

	$nombre=$_POST['nombre'];
	$no_con=$_POST['no_con'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$area=$_POST['area'];


	$query= "INSERT INTO Profesores(noControlP,passwordP,nombreP,correo,area) values('$no_con','$pass','$nombre','$email','$area')";
	mysql_query($query);
	echo "<script type='text/javascript'>alert('Agregado...');</script>";
	echo "<script>location.href='usuarios.php'</script>";
?>