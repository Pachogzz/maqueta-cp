<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">CPM Móvil</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-cpm-en-linea.php') ?>

		<section class="page-content">
			<div class="container">

				<div class="row mb-5">
					<div class="col">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-0 lead font-weight-normal">Descarga la aplicación CPM Móvil desde tu tienda de aplicaciones.</p>
							<p class="mb-0 lead text-primary font-weight-bolder mb-3">Disponible para IOS y Android</p>
							<div class="row">
								<div class="col-sm-3 offset-sm-3 text-center">
									<a href="https://apps.apple.com/mx/app/cpm-movil/id1395963629" target="_blank">
										<img src="assets/img/disponible-en-app-store.png" alt="Descarga el app en la app store" class="img-fluid">
									</a>
								</div>
								<div class="col-sm-3 text-center">
									<a href="https://play.google.com/store/apps/details?id=coop.cpm.cpmenlinea.mobile&amp;hl=es_MX" target="_blank">
										<img src="assets/img/disponible-en-google-play.png" alt="Descarga el app en google play" class="img-fluid">
									</a>
								</div>
							</div>
							<p class="mt-3 mb-2 lead font-weight-normal">Recuerda registrar tu dispositivo móvil para poder hacer uso de <strong>CPM en Línea</strong></p>
							<p class=""><small>Consulta los términos y condiciones de nuestro servicio Electrónico por Internet dando <a href="terminos-y-condiciones-sei" target="_blank"><strong>clic aquí</small></strong></a>.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->

				<div class="row video-tutorial-holder mb-5">
					<div class="col-12 col-md-6 mb-3 mb-md-0">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jucJ__OH2Fc?rel=0" allowfullscreen></iframe>
							<!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nZLaOsUI8H4?rel=0" allowfullscreen></iframe> -->
						</div>
						<div class="video-label bg-purple p-3 text-center"><p class="h3 text-white font-weight-bold mb-0">SPEI en CPM Móvil</p></div>
					</div>
					<div class="col-12 col-md-6">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/12k7cvzy4S0?rel=0" allowfullscreen></iframe>
						</div>
						<div class="video-label bg-purple p-3 text-center"><p class="h3 text-white font-weight-bold mb-0">Guía de transferencias</p></div>
					</div>
				</div> <!-- ./ Video guides -->

				<!-- Cinto animado: Servicios Digitales -->
				<div class="row mb-5 pb-5">
					<div class="col-12">
						<video autoplay loop muted inline class="w-100">
							<source class="embed-responsive-item" src="assets/video/Video_para_httpswww.cpm.coop-serviciosdigitales_112020.mp4" type="video/mp4">
							<img src="assets/img/secciones/cpm-movil-nueva-imagen.jpg" />
						</video>
					</div>
				</div>

				<div class="row mb-5">
					<div class="col-12 col-md-6 offset-md-3 text-center py-3">
						<h3 class="title-medium font-weight-bold">GUÍAS DE USO</h3>
						<p class="lead font-weight-semibold">Selecciona la guía de tu interés por su categoría</p>

						<div class="text-center">
							<div id="loading" class="spinner-border text-success" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</div>
						<script>
							$(document).ready(function(){
								$('#loading').hide();
							});
						</script>
						
						<form id="filtering_s" action="">
							<div class="form-group">
								<select class="form-control selectpicker" id="filterSelector">
									<option value="seleccione">- Seleccione una guía -</option>
									<option value="0">Guía de uso general</option>
									<option value="1">Guía de primer ingreso</option>
									<option value="5">Guía de administración de dispositivo</option>
									<option value="2">Guía de transferencias entre cuentas propias</option>
									<option value="3">Guía de consulta y eliminación de transferencias programadas</option>
									<option value="4">Guía de transferencias a cuentas de otros socios</option>
									<option value="6">Guía de consulta de saldos</option>
									<option value="7">Guía de consulta, bloqueo y desbloqueo de tarjetas</option>
									<option value="8">Guía de notificaciones de cuentas</option>
									<option value="9">Guía de consulta de actividad en línea y recibo electrónico</option>
									<option value="10">Guía de cambio de nombre de usuario</option>
									<option value="11">Guía de cambio de contraseña</option>
									<option value="12">Guía de localización de cajeros y sucursales</option>
									<option value="13">Guía de administración de cuentas</option>
									<option value="14">Guía para disposición de Credinámico</option>
								</select>
							</div>
						</form>
					</div>
				</div>

				<div class="row guides-grid">
				  <div id="0" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de uso general</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center" data-toggle="modal" data-target="#modalOne">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_guia_de_uso_movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_guia_de_uso_movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="1" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de primer ingreso</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalTwo">Ver</a>
									<div class="modal fade vh-100" id="modalTwo" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle2">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle2">Guía de primer ingreso</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_primerIngreso_movil_2020.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_primerIngreso_movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="2" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de transferencias entre cuentas propias</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalThree">Ver</a>
									<div class="modal fade vh-100" id="modalThree" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle3">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle3">Guía de transferencias entre cuentas propias</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_transacciones_movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_transacciones_movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="3" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta y eliminación de transferencias programadas</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalFour">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_consulta_administra_tranferencias_programadas_movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_consulta_administra_tranferencias_programadas_movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="4" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de transferencias a cuentas de otros socios</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalFive">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Transferencias_a_cuentas_de_otros_socios.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Transferencias_a_cuentas_de_otros_socios.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="5" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de dispositivo</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalSix">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Administra_tu_dispositivo_CPM_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Administra_tu_dispositivo_CPM_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="6" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta de saldos</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalSeven">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Consulta_de_saldos_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Consulta_de_saldos_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="7" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta, bloqueo y desbloqueo de tarjetas</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalEight">Ver</a>
									<div class="modal fade vh-100" id="modalEight" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle8">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle8">Guía de consulta, bloqueo y desbloqueo de tarjetas</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Consulta_tarjeta_de_debito_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Consulta_tarjeta_de_debito_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="8" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de notificaciones de cuentas</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalNine">Ver</a>
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
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Notificaciones_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Notificaciones_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="9" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de consulta de actividad en línea y recibo electrónico</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalTen">Ver</a>
									<div class="modal fade vh-100" id="modalTen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle10">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle10">Guía de consulta de actividad en línea y recibo electrónico</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Consulta_de_actividad_enLinea_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Consulta_de_actividad_enLinea_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="10" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de cambio de nombre de usuario</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalEleven">Ver</a>
									<div class="modal fade vh-100" id="modalEleven" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle11">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle11">Guía de cambio de nombre de usuario</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Cambiar_nombre_de_usuario_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_Cambiar_nombre_de_usuario_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="11" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de cambio de contraseña</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalTwelve">Ver</a>
									<div class="modal fade vh-100" id="modalTwelve" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle12">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle12">Guía de cambio de contraseña</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_cambiar_contraseña_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/2020/Movil_CPM_Omnicanalidad_infografico_cambiar_contraseña_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="12" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de localización de cajeros y sucursales</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalthirteen">Ver</a>
									<div class="modal fade vh-100" id="modalthirteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle13">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle13">Guía de localización de cajeros y sucursales</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Localiza_cajeros_y_sucursales_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Localiza_cajeros_y_sucursales_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="13" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía de administración de cuentas</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalFourteen">Ver</a>
									<div class="modal fade vh-100" id="modalFourteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle14">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle14">Guía de administración de cuentas</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Configurar_cuentas_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_Configurar_cuentas_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>

				  <div id="14" class="guides-grid-col">
				  	<div class="row">
					  <div class="guides-grid-col col-12 col-md-6 col-lg-4">
					    <div class="card h-100 guides-grid-block">
					      <img src="assets/img/icons/icon-pdf.png" class="" width="100" height="100">
					      <div class="card-body">
					        <h4 class="card-title mb-3 font-weight-bolder">Guía para disposición de Credinámico</h4>
					      </div>
					      <div class="card-footer">
							<div class="row">
								<div class="col-6">
									<a href="#" class="btn btn-md btn-block rounded-pill bg-primary text-white text-center"  data-toggle="modal" data-target="#modalFifteen">Ver</a>
									<div class="modal fade vh-100" id="modalFifteen" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modaltitle15">
									  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									      	<h5 class="modal-title" id="modaltitle15">Guía para disposición de Credinámico</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <embed src="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_credinamico_Movil.pdf" type="application/pdf" class="vh-100" width="100%" height="100%">
									      </div>
									    </div>
									  </div>
									</div> <!-- ./ Modal Ends -->
								</div>
								<div class="col-6">
									<a href="tutoriales/pdf/cpm-movil/CPM_Omnicanalidad_infografico_credinamico_Movil.pdf" class="btn btn-md btn-block rounded-pill bg-purple text-white text-center" download>Descargar</a>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <div class="guides-grid-col col-12 col-md-6 col-lg-8">
					  	<a href="serviciosdigitales">
					  		<img class="w-100 img-fluid" src="assets/img/secciones/en-linea/nueva-imagen-cpm-movil-072020.png" alt="Nueva imagen CPM Móvil">
					  	</a>
					  </div>
				    </div>
				  </div>
				</div>

				<!-- Grid: Mas opciones -->
				<div class="row row-eq-height">
					<div class="landing-grid-box col-12 col-md-4 mb-5">
						<a href="operaciones-disponibles-sei" class="h-100">
							<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
								<i class="fas fa-clipboard-list fa-4x bg-primary text-white rounded-circle"></i>
								<h3>Operaciones disponibles</h3>
								<p>Consulta todo lo que puedes realizar en CPM Móvil y CPM en Línea</p>
							</div>
						</a>
					</div>
					<div class="landing-grid-box col-12 col-md-4 mb-5">
						<a href="preguntas-frecuentes-sei" class="h-100">
							<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
								<i class="far fa-question-circle fa-4x bg-primary text-white rounded-circle"></i>
								<h3>Preguntas <br>frecuentes</h3>
								<p>Resuelve tus dudas con un solo clic</p>	
							</div>
						</a>
					</div>
					<div class="landing-grid-box col-12 col-md-4 mb-5">
						<a href="consideraciones-tecnicas-sei" class="h-100">
							<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
								<i class="fas fa-cog fa-4x bg-primary text-white rounded-circle"></i>
								<h3>Consideraciones técnicas</h3>
								<p>Conoce lo que necesitas para una mejor experiencia de nuestro Servicio Electrónico por Internet</p>
							</div>
						</a>
					</div>
				</div>

				<!-- Grid: Consejos de seguridad -->
				<div class="row row-eq-height">
					<div class="landing-grid-box col-12">
						<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center py-5">
							<h3 class="">No olvides revisar estos consejos de seguridad que tenemos para tí</h3>
							<a href="consejo-de-seguridad-sei" class="btn btn-lg bg-blue3 text-white">Por tu seguridad</a>
						</div>
					</div>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>