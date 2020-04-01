<?php
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
    $mysqli = new mysqli("162.210.70.9","hitdioed_cpm","UKmBQR2bkcLn","hitdioed_cpm"); 
	// $Mysqli = new mysqli("localhost", "cpmcoo5_cml20", "No!xMK+GV?Fu@pNYo@", "cpmcoo5_sucursales_cpm");
	// $mysqli = new mysqli("localhost","root","root","cpm-sucursales"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>