<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Crédito Automotriz CPM</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-quiero-credito.php') ?> <!-- ./ Menú entre seccion -->

		<section class="page-content">
			<div class="container">
				<div class="row mb-3 mb-lg-5">
					<div class="col-12 text-center">
						<div id="carouselControls" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselControls" data-slide-to="0" class="active"></li>
								<li data-target="#carouselControls" data-slide-to="1"></li>
								<li data-target="#carouselControls" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="h-100 w-100 text-center">
										<img class="m-auto img-fluid" src="assets/img/secciones/creditos/automotriz_0.jpg" alt="">
									</div>
								</div>
								<div class="carousel-item">
									<div class="h-100 w-100 text-center">
										<img class="m-auto img-fluid" src="assets/img/secciones/creditos/automotriz_1.jpg" alt="">
									</div>
								</div>
								<div class="carousel-item">
									<div class="h-100 w-100 text-center">
										<img class="m-auto img-fluid" src="assets/img/secciones/creditos/automotriz_2.jpg" alt="">
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div> <!-- ./ End Row -->
				<div class="row">
					<div class="col-12 col-md-6">
						<!-- Bloque "NOTA", ahora llamado "DESCRIPCIÓN" -->
						<div class="has-label pb-5 pt-0 px-5">
							<!-- <h2 class="d-inline-block border-primary text-primary font-weight-bolder bw-3 py-2 px-3 mb-3">DESCRIPCIÓN</h2> -->
							<img width="" src="assets/img/secciones/logos-credito/credito-automotriz.png" class="d-block w-100 py-2 px-3 mb-3">
							<p class="lead">Adquiere el automóvil que tú quieras ya sea nuevo o seminuevo de agencia para uso personal o productivo ¡Te financiamos hasta el 100% del valor del vehículo!</p>
							<p class="lead my-3 font-weight-bold text-primary">Montos desde $38,641.20 hasta $966,930.00</p>
							<p class="lead font-weight-bold text-primary">Consulta el contrato general <a href="assets/pdfs/contratos/Credito-Automotriz/FR-1916-Contrato-de-apertura-de-credito-automotriz.pdf" target="_blank">aquí</a></p>
						</div>
						<!-- Bloque "NOTA", ahora llamado "DESCRIPCIÓN" -->
						<div class="embed-responsive embed-responsive-16by9 mb-3 mb-lg-5">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9diWKW-ZxEg" allowfullscreen></iframe>
						</div>
						<?php include('inc/calculadoras/calculadora-de-credito.php') ?> <!-- ./ calculadora de credito -->
						<!-- Nota Legal -->
						<div class="bg-grey0 p-5 mb-5">
							<p class="display-12"><strong>Costo Anual Total Promedio de 20.3% sin IVA</strong>. Para fines informativos y de comparación exclusivamente. <strong>Fecha de cálculo 31 de Diciembre de 2019.</strong></p>
							<!-- <p class="display-12">*Cálculo para el <strong>Crédito Automotríz CPM</strong> por la cantidad de <strong>$15,000.00 a un plazo de 12 meses con un monto mínimo de ahorro de $1,500.00</strong>.</p>
							<ul class="display-12">
								<li>Sujeto a aprobación de crédito.</li>
								<li>Préstamo otorgado en moneda nacional.</li>
								<li>Disponible en todas nuestras sucursales a nivel nacional.</li>
								<li>La tasa de interés se asignará de acuerdo al historial crediticio interno y externo a Caja Popular Mexicana que presente el socio.</li>
								<li>En la contratación del producto, el plan de pagos se establece de manera mensual</li>
							</ul> -->
						</div>
						<!-- Nota Legal -->
					</div>
					<div class="col-12 col-md-6">
						<!-- MENU -->
						<div class="accordion accordion-cpm" id="accordionCICPM">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Montos y plazos
										</button>
									</h2>
								</div>

								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<h4>Monto</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Montos desde $38,641.20 hasta $966,930.00</li>
											<li>Crédito otorgado en moneda nacional.</li>
											<!-- <li>Hasta 150,000.00 UDIS (Al 31 de enero de 2019, importe $937,139.25] UDIS [Unidad de inversión que se actualiza mensualmente para su conversión en moneda nacional).</li> -->
										</ul>
										<h4>Plazo</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Para vehículos nuevos hasta 72 meses.</li>
											<li>60 meses en vehículos nuevos para uso de transporte de pasajeros.</li>
											<li>Vehículos seminuevos de agencia hasta 60 meses.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Tasas y CAT
										</button>
									</h2>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li><strong>Tasa de Interés</strong>
												<p>Tasa de interés ordinaria anual fija única de 12.84% más IVA hasta un 33.0% antes de impuestos. La tasa se asignará de acuerdo al perfil crediticio del socio.</p>
											</li>
											<li><strong>CAT Promedio Crédito Automotriz CPM</strong>
												<p><strong>Costo Anual Total Promedio de 20.3% sin IVA.</strong> Para fines informativos y de comparación exclusivamente. <strong>Fecha de cálculo 31 de Diciembre de 2019.</strong></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourt" aria-expanded="false" aria-controls="collapseFourt">
											Requisitos y generales
										</button>
									</h2>
								</div>
								<div id="collapseFourt" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<h4>Requisitos</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Ser <a href="ser-socio">socio</a> de Caja Popular Mexicana.</li>
											<li>Ahorro del 10% del monto a solicitar como garantía, depositado en su Cuenta Mexicana.</li>
										</ul>
										<h4>Condiciones</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Sólo podrán ser financiados vehículos seminuevos con una antigüedad menor o igual a 4 años incluyendo el año actual.</li>
											<li>No serán financiados los accesorios que se adquieran de forma adicional al equipamiento del vehículo.</li>
											<li>Sólo podrá aplicarse para compra de vehículos que provengan directamente de agencias automotrices formalmente establecidas.</li>
											<li>Se deberá contratar un seguro automotriz de cobertura amplia que deberá permanecer vigente durante el plazo del crédito.</li>
										</ul>
										<h4>Documentos generales</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Identificación oficial y de la sociedad.</li>
											<li>Comprobante de domicilio.</li>
											<li>Comprobante de ingresos*</li>
											<li>Cotización del seguro a contratar en aquellos casos que sea objeto de financiamiento.</li>
											<li>Cotización del vehículo expedido por la agencia automotriz.</li>
											<!-- <li>Cotización del vehículo expedido por la agencia automotriz en caso de que la finalidad sea productiva.</li> -->
										</ul>
										<p><small>*Aplican restricciones, para mayor información acude a nuestras sucursales.</small></p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											Costos y comisiones
										</button>
									</h2>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<h4>Costos y comisiones</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Sin comisión por apertura o administración del crédito.</li>
										</ul>
										<h4>Gastos de contratación</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Cuando exista una garantía prendaria o hipotecaria así como de seguro que lo cubra, los costos dependen del valor de la garantía.</li>
											<li>Consulta los costos y comisiones de nuestros productos dando <a href="consulta-los-costos-y-comisiones-de-nuestros-productos">clic aquí</a>.</li>
										</ul>
										<h4>Recomendaciones</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Contratar créditos por arriba de tu capacidad de pago puede afectar tu historial crediticio.</li>
											<li>Incumplir con tus obligaciones te puede generar comisiones e intereses moratorios.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- MENU -->
						<!-- Formulario Dudas -->
						<div class="bg-grey0 p-5 my-5">
							<h3 class="font-weight-bolder">¿Dudas sobre nuestro Crédito Automotriz CPM?</h3>
							<hr>
							<?php include('inc/forms/formulario_credito-automotriz.php') ?> <!-- ./ Formulario gral de sección -->
						</div>
						<!-- Formulario Dudas -->
					</div>
				</div> <!-- ./ End Row -->
			<?php include('inc/une-recursos.php'); ?>
			</div>
		</section>

<?php include('inc/boletin-and-banner.php') ?> <!-- ./ Boletín y banner -->

<?php include('inc/footer.php'); ?>