<form id="productFormCreditos" action="inc/forms/entregar-mailercaptcha.php" method="POST">
	<div class="form-row">
		<div class="form-group col-12">
			<label for="nombreCompleto">Nombre completo</label>
			<input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" required="">
		</div>
		<div class="form-group col-md-6">
			<label for="correoelectronico">Correo</label>
			<input type="email" class="form-control" id="correoelectronico" name="correoelectronico" required="">
		</div>
		<div class="form-group col-md-6">
			<label for="telefonoDeContacto">Teléfono</label>
			<input type="text" class="form-control" id="telefonoDeContacto" name="telefonoDeContacto" required="">
		</div>
	</div>
	<div class="form-group">
		<label for="montoaSolicitar">Monto a solicitar</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
			</div>
			<input type="number" class="form-control" id="montoaSolicitar" name="montoaSolicitar" required="">
		</div>
	</div>
	<div class="form-group">
		<label for="finalidad">Finalidad</label>
		<input type="text" class="form-control" id="finalidad" name="finalidad" required="">
	</div>
	<div class="form-group">
		<label for="numerodeSocio">Numero de socio</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-user"></i></div>
			</div>
			<input type="number" class="form-control" id="numerodeSocio" name="numerodeSocio">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="estado">Estado</label>
			<select id="estado" class="form-control" name="estado"></select>
		</div>
		<div class="form-group col-md-6">
			<label for="municipio">Municipio</label>
			<select id="municipio" class="form-control" name="municipio"></select>
		</div>
	</div>
	<div class="form-group">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" id="avisoDePrivacidad" name="avisoDePrivacidad" required>
			<label class="form-check-label" for="avisoDePrivacidad">
				<a href="aviso-de-privacidad.php" target="_blank">Consulta nuestro aviso de privacidad</a>
			</label>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Enviar información</button>
</form>