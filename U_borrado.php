<?php  
require('conn_db.php');
	$no_con=$_POST['no_con'];


	$query=mysql_query("SELECT * FROM Alumnos WHERE noControlA='$no_con'");
	if(mysql_fetch_array($query)){
		
		$query2= "DELETE * FROM Alumnos WHERE noControlA='$no_con";
		mysql_query($query2);

		echo "<script type='text/javascript'>alert('Alumno borrado...');</script>";
		echo "<script>location.href='usuarios.php'</script>";
	}

	$sen=mysql_query("SELECT * FROM Profesores WHERE noControlP='$no_con'");
	if(mysql_fetch_array($sen)){
		
		$sen2= "DELETE * FROM Profesores WHERE noControlP='$no_con";
		mysql_query($sen2);

		echo "<script type='text/javascript'>alert('Profesor borrado...');</script>";
		echo "<script>location.href='usuarios.php'</script>";
	}

?>