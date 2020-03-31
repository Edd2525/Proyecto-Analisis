<?php

	$mysqli = new mysqli('localhost', 'root', '', 'carnes');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
	// 2J2AMwDbOKf4
?>