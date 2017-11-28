<?php

function menu(){
	
	if($_SESSION['login']){

		if($_SESSION['tipo_usuario']==1){

			echo "<li><a href='usuarios.php'> Usuarios</a></li>
			<li><a href='reportes.php'> Reportes
			</a></li>
			<li><a href='calific.php'> Calificaciones</a></li>
			<li><a href='cerrar_sesion.php'> Salir</a></li>";
		} else 
			if($_SESSION['tipo_usuario']==0)
		{
			echo "<li><a href='calif_alu.php'> Mis calificaciones</a></li>
			<li><a href='perfil.php'> Mi perfil</a></li>
			<li><a href='cerrar_sesion.php'> Salir</a></li>";

		}
	} else{
	echo "debes <a href='index.php'>loguearte</a>";
	}

}