<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Agenda tu cita</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-citas.php') ?> <!-- ./ Menú entre seccion -->

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
										<img class="m-auto img-fluid" src="assets/img/secciones/citas/Citas-en-linea-LANDING-01.png" alt="Agenda tu cita">
									</div>
								</div>
								<div class="carousel-item">
									<div class="h-100 w-100 text-center">
										<img class="m-auto img-fluid" src="assets/img/secciones/citas/Citas-en-linea-LANDING-02.png" alt="Agenda tu cita">
									</div>
								</div>
								<div class="carousel-item">
									<div class="h-100 w-100 text-center">
										<img class="m-auto img-fluid" src="assets/img/secciones/citas/Citas-en-linea-LANDING-03.png" alt="Agenda tu cita">
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
					</div> <!-- ./ Video o imágen principal -->
				</div> <!-- ./ End Row -->

				<div class="row mb-5">
					<div class="col-12 ">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-3 h3 font-weight-normal">¡Solicita tu cita ya!</p>
							<p class="mb-0 h3"><strong>Es muy fácil, solo escríbenos <a href="mailto:contacto@cpm.coop">aquí</a>, en la burbuja de chat o llámanos al 800 7100 800.</strong></p>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-4 order-lg-2">
						<div class="row">
							<div class="landing-grid-box col-12 mb-5">
								<a href="operaciones-disponibles-sei" class="h-100">
									<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
										<i class="fas fa-info fa-4x bg-primary text-white rounded-circle"></i>
										<h2 class="text-primary"><strong>¡No olvides!</strong></h2>
										<ol type="1" class="text-left">
											<li>Llegar <strong>10 minutos antes</strong> de la hora de tu cita.</li>
											<li>A tu llegada a sucursal, selecciona la opción <strong>“CITADO”</strong> en el intro que verás para obtener tu turno, bríndanos el número telefónico que registrarte en la solicitud de cita y ¡listo! Con eso sabremos que llegaste y un ejecutivo pronto te pasará a escritorio.</li>
										</ol>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-8 order-lg-1">
						<!-- MENU -->
						<div class="accordion accordion-cpm" id="accordionCICPM">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											¿Qué servicios están disponibles para citas?
										</button>
									</h2>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<h4>Puedes agendar tu cita para:</h4>
										<ul class="p-5 bg-white bw-1 border-grey1">
											<li>Tramitar un crédito</li>
											<li>Entrega de un crédito</li>
											<li>Solicitud de tu tarjeta de débito</li>
											<li>Entrega de tarjeta de débito</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											¿Este servicio es a nivel nacional?
										</button>
									</h2>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<p class="p-3 border border-grey1 bg-white">Por el momento, únicamente el servicio está disponible en la sucursal Villagrán y Arcos en la ciudad de Villagrán y Celaya respectivamente.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											¿En qué medios puedo agendar mi cita?
										</button>
									</h2>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<p class="p-3 border border-grey1 bg-white">Llámanos al 800 7100 800 de lunes a domingo de 8am a 9pm o escríbenos vía Facebook dando <a class="text-primary" href="https://www.messenger.com/t/CajaPopularMexicana" target="_blank"><strong>clic aquí</strong></a>.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFour">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											¿Qué datos debo brindar?
										</button>
									</h2>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<div class="p-3 bg-white bw-1 border-grey1">
											<p>Para poder agendar tu cita, debes brindar tu nombre completo, número de socio, correo electrónico y número telefónico como requisitos básicos. Adicional, el monto y finalidad deseada para tu trámite de crédito.</p>
											<p>– Consulta nuestro aviso de privacidad en <a href="aviso-de-privacidad" class="text-primary"><strong>aquí</strong></a>.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFive">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											Recibí una llamada después de agendar mi cita, ¿cuál es la finalidad?
										</button>
									</h2>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<p class="p-3 bg-white bw-1 border-grey1">Con la finalidad de brindarte un servicio más rápidos y para fines calificativos del proceso, es probable que te contacte un asesor de crédito de nuestra institución por teléfono (con lada 477), de esta forma podremos compartirte la documentación adicional que deberás llevar el día de tu cita.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingSix">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											¿Se puede reagendar?
										</button>
									</h2>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionCICPM">
									<div class="card-body bg-grey0 p-4">
										<div class="p-3 bg-white bw-1 border-grey1">
											<p>Sí. Para reagendar tu cita, llámanos al 800 7100 800 y un ejecutivo te apoyará en el proceso.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- MENU -->
					</div>
				</div> <!-- ./ End Row -->
			</div>
		</section>

<?php include('inc/boletin-and-banner.php') ?> <!-- ./ Boletín y banner -->

<?php include('inc/footer.php'); ?>