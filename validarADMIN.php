<?php  
	require("connect_db.php");
	$usr=$_POST['user'];
	$pas=$_POST['pass'];

	$query= "INSERT INTO users(username,password) values('$usr','$pas')";
	mysql_query($query);
	echo '<script>alert("Usuario agregado...")</script>';
	echo "<script>location.href='usuarios.php'</script>";

?>