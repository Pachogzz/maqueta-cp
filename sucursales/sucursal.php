<?php
	require ('conexion/conexion.php');
	
	$query = "SELECT id_estado, estado FROM t_estado ORDER BY estado";
	$resultado=$mysqli->query($query);
?>
<div class="row date-map"> 
  <div class="col-12 col-md-12">
    <form>
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <div class="form-group selectWrapper">
<select name="cbx_estado" id="cbx_estado">
				<option value="0">Seleccionar Estado</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
				<?php } ?>
			</select>
		       </div>
            </div>
            <div class="col-auto my-1">
                <div class="form-group selectWrapper">
		                    <select name="cbx_municipio" id="cbx_municipio"></select>
		        </div>
            </div>
            <div class="col-auto my-1">
              <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Filtrar por
                </button>
              </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing">
                            Sábados
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing2" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing2">
                            Domingos
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing3" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing3">
                            Teléfono
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing4" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing4">
                            Luz
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing5" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing5">
                            Remesas
                        </label>
                    </input>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<div class="row date-maping">
    <div class="col-4 col-md-4 col-sm-12">
                <table class="table" style="font-size: 15px;">
					    <thead>
							    <tr>
							      <th scope="col"><h3><center>Sucursal</center></h3></th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row"><b>Dirtecci&oacute;n:</b></th>
							      <td colspan="2">Hidalgo No. 62-A, Centro, Paracuaro, Guanajuato.</td>
							    </tr>
							    <tr>
							      <td scope="row"><b>Tel:</b> 81564648</td>
							      <td scope="row"><b>LADA:</b> 81564648</td>
							      <td scope="row"><b>FAX:</b> 81 56 46 48</td>
							    </tr>
							    <tr>
							      <th scope="row"><b>Servicios</b></th>
							      <td colspan="2">Tel&eacute;fonia:</td>
							    </tr>
							    <tr>
							      <td colspan="3">
							          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="..." alt="slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="..." alt="slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="..." alt="slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
							      </td>
							    </tr>
							    <tr>
							      <th scope="row"><b>Informaci&oacute;n:</b></th>
							      <td colspan="2">Texto de imagen rotativa Paam audae con comnimentis sequi des nullabore eatur?</td>
							    </tr>
							    <tr>
							      <th scope="row"><td><center><?php include('button-maps-cpm.php') ?></td></th>
							      <td></td>
							      <td></td>
							    </tr>
					    </tbody>
				</table>
    </p>
    </div>
    <div class="col-8 col-md-8 col-sm-12">
        <div id="map">
        </div>
    </div>
</div>

