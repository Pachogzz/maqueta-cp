<?php
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	// $mysqli = new mysqli("11.78.0.38","hitdioed_cpm","UKmBQR2bkcLn","hitdioed_cpm"); 
	$mysqli = new mysqli("localhost","root","root","cpm-sucursales"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>