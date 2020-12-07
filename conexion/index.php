<?php
	require ('conexion.php');
	
	$query = "SELECT id_estado, estado FROM t_estado ORDER BY estado";
	$resultado=$mysqli->query($query);
?>

	</head>
	
	<body>
		<form id="combo" name="combo" action="guarda.php" method="POST">
			<div>Selecciona Estado : <select name="cbx_estado" id="cbx_estado">
				<option value="0">Seleccionar Estado</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
				<?php } ?>
			</select></div>
			<br />
			<div>Selecciona Municipio : <select name="cbx_municipio" id="cbx_municipio"></select></div>
			
			<br />
			<input type="submit" id="enviar" name="enviar" value="Guardar" />
		</form>
	</body>
</html>