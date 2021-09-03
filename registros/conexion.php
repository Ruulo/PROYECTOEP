<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'equipos_p');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>