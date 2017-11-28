
<?php

require ("conn_db.php");

session_start();

$_SESSION['login']=1;

// variables que se van a recibir del metodo POST
$username=$_POST['username'];
$pass=$_POST['password'];

//Busca Primero en los Alumnos el user y el pass mandado en el post
$sql2=mysql_query("SELECT * FROM Alumnos WHERE noControlA='$username'");
	if($fd=mysql_fetch_array($sql2)){
		if($pass == $fd['passwordA']){


			$_SESSION['tipo_usuario']=0;

			$_SESSION['user_alumno']=$username;


			//variables para saludar al usuario que se loggea
			$sql4=mysql_query("SELECT nombreA FROM Alumnos WHERE noControlA = '$username'");
			$volcado=mysql_fetch_array($sql4);
			$nombre=$volcado['nombreA'];


			//

		//pruebas de salida
			echo "<script type='text/javascript'>alert('Bienvenido $nombre');</script>";
			echo "<script>location.href='menu.php'</script>";


	}
}		//si no encontro alumnos, ahora va a la tabla profesores a buscar el username y el pass
		//mandado en el POST
		else
		$sql2=mysql_query("SELECT * FROM Profesores WHERE noControlP='$username'");
			if($fd=mysql_fetch_array($sql2)){
				if($pass == $fd['passwordP']){

				$_SESSION['tipo_usuario']=1;
				$_SESSION['user_prof']=$username;

				//variables para saludar al usuario que se loggea
				$sql4=mysql_query("SELECT nombreP FROM Profesores WHERE noControlP = '$username'");
				$volcado=mysql_fetch_array($sql4);
				$nombre=$volcado['nombreP'];


		//pruebas de salida
			echo "<script type='text/javascript'>alert('Bienvenido $nombre');</script>";
			echo "<script>location.href='menu.php'</script>";


	}
}
		echo '<script>alert("ERROR AL INGRESAR DATOS")</script>';
		echo "<script>location.href='index.php'</script>";

?>