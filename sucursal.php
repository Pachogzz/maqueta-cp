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
                <input type="hidden" id="hestado" value="<?php echo $_GET['estado'];?>"> 
                <input type="hidden" id="hmuni" value="<?php echo $_GET['municipio'];?>"> 
                <input type="hidden" id="hsab" value="<?php echo $_GET['sab'];?>"> 
                <input type="hidden" id="hdom" value="<?php echo $_GET['dom'];?>"> 
                <input type="hidden" id="idmun" value="<?php echo $_GET['idmun'];?>"> 
                <!--<input type="hidden" id="htel" value="<?php echo $_GET['tel'];?>"> 
                <input type="hidden" id="hluz" value="<?php echo $_GET['luz'];?>"> 
                <input type="hidden" id="hrem" value="<?php echo $_GET['rem'];?>"> -->
                <input type="hidden" id="hcaj" value="<?php echo $_GET['caj'];?>"> 
<select name="cbx_estado" id="cbx_estado">
				<option value="0">Seleccionar Estado</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_estado']; ?>"><?php echo strtoupper($row['estado']); ?></option>
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
                <button class="btn btn-primary"  id ="btn-filtro" type="button">
                    Filtrar por
                </button>
              </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing" valude="1" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing">
                            Sábados
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing2" valude="2"  type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing2">
                            Domingos
                        </label>
                    </input>
                </div>
            </div>
            <!--<div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing3" valude="3" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing3">
                            Teléfono
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing4" valude="4" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing4">
                            Luz
                        </label>
                    </input>
                </div>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing5" valude="5" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing5">
                            Remesas
                        </label>
                    </input>
                </div>
            </div>-->
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2 form-group">
                    <input class="custom-control-input" id="customControlAutosizing6" valude="6" type="checkbox">
                        <label class="custom-control-label" for="customControlAutosizing6">
                            Cajeros
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
        <div class="maps-data-scroll">
            <div id="maps-scroll">
                <div class="row date-maping" id="data-mapf">
                </div>
			</div>
		</div>
    </div>
    <div class="col-8 col-md-8 col-sm-12">
        <div id="map">
        </div>
    </div>
</div>
   <!--<table class="table maps-st"  id="data-mapf" style="font-size: 13px;">
				</table>-->