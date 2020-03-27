<?php

	$mysqli = new mysqli('localhost', 'root', '', 'horse');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
	// 2J2AMwDbOKf4
?>