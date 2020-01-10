		<div class="container">
		    <div id="map-target" class="row video-section">
					<div class="table-responsive mt-5">
							<table class="table">
								<thead>
								   <tr class="bg-primary">
									<th scope="col"><h3 class="text-white font-weight-semibold"><center>LOCALIZA LA SUCURSAL MAS CERCANA</center></h3></th>
								   </tr>
								</thead>
							</table>
					</div>
		    </div>
		    <div id="cajaMapa" class="row">
		        <iframe id="mapSucursales" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3884998.258069709!2d-95.44816764142968!3d18.119741694894838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1svitrocar!5e0!3m2!1ses-419!2ssv!4v1565211926658!5m2!1ses-419!2ssv"
		                frameborder="0" style="border: 0; width: 100%; min-height: 450px;" allowfullscreen></iframe>
		    </div>
		    <div class="row video-section">
		        <div class="col-md-12">
					<div class="table-responsive mt-5">
							<table class="table">
								<thead>
								   <tr class="bg-primary">
									<th scope="col"><h5 class="text-white font-weight-semibold">Selecciona el estado en que quieres ubicar las sucursales</h5></th>
								   </tr>
								</thead>
							</table>
				    </div>
		        </div>
		        <div class="col-md-5">
		            <form action="POST">
		                <div class="form-group selectWrapper">
		                    <select class="form-control-select" id="estadoSelect">
		                    	<option></option>
		                        <option>AGUASCALIENTES</option>
		                        <option>BAJA CALIFORNIA</option>
		                        <option>CAMPECHE</option>
		                        <option>CHIAPAS</option>
		                        <option>CHIHUAHUA</option>
		                        <option>COAHUILA</option>
		                        <option>COLIMA</option>
		                        <option>DURANGO</option>
		                        <option>GUANAJUATO</option>
		                        <option>GUERRERO</option>
		                        <option>HIDALGO</option>
		                        <option>JALISCO</option>
		                        <option>MICHOACÁN</option>
		                        <option>MORELOS</option>
		                        <option>NAYARIT</option>
		                        <option>NUEVO LEÓN</option>
		                        <option>OAXACA</option>
		                        <option>PUEBLA</option>
		                        <option>QUERÉTARO</option>
		                        <option>QUINTANA ROO</option>
		                        <option>SAN LUIS POTOSÍ</option>
		                        <option>SINALOA</option>
		                        <option>SONORA</option>
		                        <option>TABASCO</option>
		                        <option>TAMAULIPAS</option>
		                        <option>TLAXCALA</option>
		                        <option>VERACRUZ</option>
		                        <option>YUCATÁN</option>
		                        <option>ZACATECAS</option>
		                    </select>
		                </div>
		            </form>
		        </div>
		    </div>
		    <div class="row" id="cards">
		        <div class="col-md-4">
		            <div class="location-card">
		                <div class="location-card-details text-left">
		                </div>
		                <div class="container-fluid blue-bar text-center">
		                    <a href="#map-target" id="botonMapa" class="mapa-button button btn btn-secondary br-30 px-5" onclick="cargarMapa('Aguascalientes Fátima')">VER MAPA</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>