<?php
	require("connect_db.php");
	$username=$_POST['username'];
	$pass=$_POST['password'];

$sql2=mysql_query("SELECT * FROM users WHERE username='$username'");
if($fd=mysql_fetch_array($sql2)){
	if($pass == $fd['password']){
		echo '<script>alert("Bienvenido...")</script>';
		echo "<script>location.href='usuarios.php'</script>";
	}
	else
		echo '<script>alert("ERROR AL INGRESAR DATOS")</script>';
		echo "<script>location.href='login.php'</script>";
}
?>