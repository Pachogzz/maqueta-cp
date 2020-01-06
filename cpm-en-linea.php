<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-purple">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 class="display-4 bg-primary d-inline-block px-lg-5 py-lg-3 br-30 text-white font-weight-semibold">CPM en línea</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner-nav-page-cpm-en-linea.php') ?>

		<section class="page-content">
			<div class="container">
				<div class="row mb-5">
					<div class="col">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-0 lead font-weight-normal">Comineza a usar CPM en línea y comienza a tener más tiempo en tus manos</p>
							<p class="mb-0 lead text-primary font-weight-bolder mb-3">
								<a href="https://www.cpmenlinea.cpm.coop/" target="_blank">Ingresa aquí</a>
							</p>
							<p class="mt-3 mb-0 lead font-weight-normal">Consulta los términos y condiciones de nuestro servicio Electrónico por Internet dando <a href="terminos-y-condiciones-sei.php" target="_blank">clic aquí</a>.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->

				<div class="row video-tutorial-holder mb-5">
					<div class="col-12 col-md-6">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9i5BUEnW-_Q?rel=0" allowfullscreen></iframe>
						</div>
						<div class="video-label bg-purple p-3 text-center"><p class="h3 text-white font-weight-bold mb-0">Guía de primer ingreso</p></div>
					</div>
					<div class="col-12 col-md-6">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FLdPlEdzkJU?rel=0" allowfullscreen></iframe>
						</div>
						<div class="video-label bg-purple p-3 text-center"><p class="h3 text-white font-weight-bold mb-0">Guía de transferencias</p></div>
					</div>
				</div> <!-- ./ Video guides -->

				<div class="row mb-5">
					<div class="col-12 col-md-6 offset-md-3 text-center py-3">
						<h3 class="title-medium font-weight-bold">GUÍAS DE USO</h3>
						<p class="lead font-weight-semibold">Selecciona la guía de tu interés por su categoría</p>
						<form action="">
							<div class="form-group">
								<select class="form-control" id="filterSelector">
									<option value="seleccione">- Seleccione una guía -</option>
									<option value="0">Guía de uso general</option>
									<option value="1">Guía primer ingreso</option>
									<option value="2">Guía de transacciones</option>
									<option value="3">Guía de consulta y eliminación de transferencias programadas</option>
									<option value="4">Guía de transferencias a cuentas de otros socios</option>
									<option value="5">Guía de administración de dispositivo</option>
									<option value="6">Guía de consulta de saldos</option>
									<option value="7">Guía de consulta, bloqueo y desbloqueo de tarjeta</option>
									<option value="8">Guía de notificaciones de cuentas</option>
									<option value="9">Guía de administración de terceros</option>
									<option value="10">Guía de consulta de actividad en línea y recibo electrónico</option>
									<option value="11">Guía de cambio de nombre de usuario</option>
									<option value="12">Guía de administración de límites diarios</option>
									<option value="13">Guía de cambio de contraseña</option>
									<option value="14">Guía de envío y respuesta de mensajes del servicio</option>
									<option value="15">Guía de administración de plantillas</option>
									<option value="16">Guía de administración de cuentas</option>
								</select>
							</div>
						</form>
					</div>
				</div>

				<div class="row guides-grid">
				  <div id="0" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de uso general</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalOne">Visualizar</a>
								<div class="modal fade vh-100" id="modalOne" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle1">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle1">Guía de uso general</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_guia_de_uso_digital.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_guia_de_uso_digital.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="1" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía primer ingreso</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalTwo">Visualizar</a>
								<div class="modal fade vh-100" id="modalTwo" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle2">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle2">Guía primer ingreso</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_primerIngreso_linea_digital.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_primerIngreso_linea_digital.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="2" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de transacciones</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalThree">Visualizar</a>
								<div class="modal fade vh-100" id="modalThree" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle3">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle3">Guía de transacciones</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_transacciones_digital.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_transacciones_digital.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="3" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta y eliminación de transferencias programadas</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalFour">Visualizar</a>
								<div class="modal fade vh-100" id="modalFour" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle4">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle4">Guía de consulta y eliminación de transferencias programadas</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_consulta_administra_transferencias_programadas_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_consulta_administra_transferencias_programadas_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="4" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de transferencias a cuentas de otros socios</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalFive">Visualizar</a>
								<div class="modal fade vh-100" id="modalFive" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle5">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle5">Guía de transferencias a cuentas de otros socios</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_transferencias_de_socios_a_socios_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_transferencias_de_socios_a_socios_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="5" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de dispositivo</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalSix">Visualizar</a>
								<div class="modal fade vh-100" id="modalSix" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle6">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle6">Guía de administración de dispositivo</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administra_tu_dispositivo_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administra_tu_dispositivo_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="6" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta de saldos</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalSeven">Visualizar</a>
								<div class="modal fade vh-100" id="modalSeven" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle7">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle7">Guía de consulta de saldos</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_de_saldos_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_de_saldos_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="7" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta, bloqueo y desbloqueo de tarjeta</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalEight">Visualizar</a>
								<div class="modal fade vh-100" id="modalEight" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle8">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle8">Guía de consulta, bloqueo y desbloqueo de tarjeta</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_tarjeta_de_debito_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_tarjeta_de_debito_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="8" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de notificaciones de cuentas</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalNine">Visualizar</a>
								<div class="modal fade vh-100" id="modalNine" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle9">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle9">Guía de notificaciones de cuentas</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Notificaciones_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Notificaciones_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="9" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de terceros</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalTen">Visualizar</a>
								<div class="modal fade vh-100" id="modalTen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle10">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle10">Guía de administración de terceros</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administra_terceros_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administra_terceros_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="10" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta de actividad en línea y recibo electrónico</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalEleven">Visualizar</a>
								<div class="modal fade vh-100" id="modalEleven" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle11">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle11">Guía de consulta de actividad en línea y recibo electrónico</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_de_actividad_enLinea_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Consulta_de_actividad_enLinea_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="11" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de cambio de nombre de usuario</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalTwelve">Visualizar</a>
								<div class="modal fade vh-100" id="modalTwelve" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle12">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle12">Guía de cambio de nombre de usuario</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Cambiar_nombre_de_usuario_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Cambiar_nombre_de_usuario_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="12" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de límites diarios</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalThirteen">Visualizar</a>
								<div class="modal fade vh-100" id="modalThirteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle13">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle13">Guía de administración de límites diarios</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administrar_limites_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administrar_limites_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="13" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de cambio de contraseña</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalFourteen">Visualizar</a>
								<div class="modal fade vh-100" id="modalFourteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle14">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle14">Guía de cambio de contraseña</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_cambiar_contrasena_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_cambiar_contrasena_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="14" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de envío y respuesta de mensajes del servicio</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalFifteen">Visualizar</a>
								<div class="modal fade vh-100" id="modalFifteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle15">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle15">Guía de envío y respuesta de mensajes del servicio</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Envia_recibe_mensajes_del_servicio_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Envia_recibe_mensajes_del_servicio_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="15" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de plantillas</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalSixteen">Visualizar</a>
								<div class="modal fade vh-100" id="modalSixteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle16">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle16">Guía de administración de plantillas</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administrar_plantillas_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Administrar_plantillas_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				  <div id="16" class="guides-grid-col col-12 col-md-4">
				    <div class="card h-100 guides-grid-block">
				      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
				      <div class="card-body">
				        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de cuentas</h4>
				      </div>
				      <div class="card-footer">
						<div class="row">
							<div class="col-6">
								<a href="#" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" data-toggle="modal" data-target="#modalSeventeen">Visualizar</a>
								<div class="modal fade vh-100" id="modalSeventeen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle17">
								  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								      	<h5 class="modal-title" id="modaltitle17">Guía de administración de cuentas</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <embed src="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Configurar_cuentas_enLinea.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
								      </div>
								    </div>
								  </div>
								</div> <!-- ./ Modal Ends -->
							</div>
							<div class="col-6">
								<a href="tutoriales/pdf/cpm-en-linea/CPM_Omnicanalidad_infografico_Configurar_cuentas_enLinea.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
							</div>
						</div>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>