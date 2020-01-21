<?php
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	// $mysqli = new mysqli("162.210.70.9","hitdioed_cpm","UKmBQR2bkcLn","hitdioed_cpm"); 
	$mysqli = new mysqli("localhost","root","","cpm"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>