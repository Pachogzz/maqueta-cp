<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">CPM Móvil Plus</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-cpm-en-linea.php') ?>

		<section class="main-tag-line py-5 mb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1 text-center">
						<h2 class="display-4 text-primary font-weight-semibold">¡Tramita tu <strong>Crédito Inmediato</strong> o <strong>Rendicuenta</strong>, donde sea y cuando quieras, con <strong>CPM Móvil Plus</strong>!</h2>
					</div>
				</div>
			</div>
		</section> <!-- /. Main Tag Line -->

		<section class="page-content">
			<div class="container">
				<div class="row mb-5">
					<!-- <div class="col-12 mb-5">
						<img src="assets/img/secciones/serviciosdigitales-plus.jpg" class="img-fluid" />
					</div> -->
					<div class="col-12">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-0 lead font-weight-normal">Descarga la aplicación CPM Móvil Plus desde tu tienda de aplicaciones.</p>
							<p class="mb-0 lead text-primary font-weight-bolder mb-3">Disponible para IOS y Android</p>
							<div class="row">
								<div class="col-sm-3 offset-sm-3 text-center">
									<a href="https://apps.apple.com/mx/app/cpm-m%C3%B3vil-plus/id1540000678" target="_blank">
										<img src="assets/img/disponible-en-app-store.png" alt="Descarga el app en la app store" class="img-fluid">
									</a>
								</div>
								<div class="col-sm-3 text-center">
									<a href="https://play.google.com/store/apps/details?id=coop.cpm.movilplus.android" target="_blank">
										<img src="assets/img/disponible-en-google-play.png" alt="Descarga el app en google play" class="img-fluid">
									</a>
								</div>
							</div>
							<p class=""><small>Consulta los términos y condiciones de nuestro Servicio Electrónico por Internet dando <a href="terminos-y-condiciones-sei" target="_blank"><strong>clic aquí</small></strong></a>.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->
				
				<div class="row">
					<div class="col-12 mb-5">
						<video autoplay loop muted inline class="w-100">
							<source class="embed-responsive-item" src="assets/video/20201126_CPMmovil_plus.mp4" type="video/mp4">
						</video>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-10 offset-md-1 text-center mb-5">
						<p class="h4"><a href="https://www.cpm.coop/pv-movil-plus" class="font-weight-bold text-purple">Apertura tu Rendicuenta o contrata un Crédito Inmediato con CPM Móvil Plus, <br>¡y gana con Puntos Verdes! <br><strong>Da clic AQUÍ para más información</strong></a></p>
						<p class="text-center"><small><i>* Vigencia de la promoción del 4 de enero del 2021, al 7 de febrero de 2021.</i></small></p>
					</div>
				</div> -->

				<div class="row video-tutorial-holder mb-5">
					<div class="col-12 col-lg-6 mb-5 mb-lg-0">
						<!-- <div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oggYx0qQ6DI?rel=0"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div> -->
						<div class="embed-responsive embed-responsive-16by9">
							<div id="playerList" class="embed-responsive-item"></div>
						</div>
						
						<script>

						  // 2. This code loads the IFrame Player API code asynchronously.
						  var tag = document.createElement('script');

						  tag.src = "https://www.youtube.com/iframe_api";
						  var firstScriptTag = document.getElementsByTagName('script')[0];
						  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

						  // 3. This function creates an <iframe> (and YouTube player)
						  //    after the API code downloads.
						  var player;
						  function onYouTubeIframeAPIReady() {
						    player = new YT.Player('playerList', {
						      height: '680',
						      width: '1080',
						      playerVars: { 
						      	'autoplay': 0, 
						      	'rel': 0,
						      	listType: 'playlist',
						      	list: 'PLguI2Hcl-wqfYMhEPgTQKvNrziwGR-1nu'
						      },
						      events: {
						        'onReady': onPlayerReady,
						        'onStateChange': onPlayerStateChange
						      }
						    });
						  }

						  // 4. The API will call this function when the video player is ready.
						  function onPlayerReady(event) {
						  	event.target.setVolume(50);
						    event.target.playVideo();
							event.target.setPlaybackQuality('hd1080');
						  }

						  // 5. The API calls this function when the player's state changes.
						  //    The function indicates that when playing a video (state=1),
						  //    the player should play for six seconds and then stop.
						  var done = false;
						  function onPlayerStateChange(event) {
						    if (event.data == YT.PlayerState.BUFFERING) {
						      event.target.setPlaybackQuality('hd1080');
						    }
						    if (event.data == YT.PlayerState.PLAYING && !done) {
						      // setTimeout(stopVideo, 27000);
						      done = true;
						    }
						  }
						  function stopVideo() {
						    player.stopVideo();
						  }
						</script>
						<div class="video-label bg-purple p-3 text-center">
							<p class="h3 text-white font-weight-bold mb-0">#CPMMóvilPlus</p>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="p-5 border border-light bw-5 rounded border-grey1 text-left">
							<h4><span class="text-primary"><strong>¡Activa CPM Móvil Plus</strong></span> en 5 sencillos pasos!</h4>
							<ul class="has-arrow">
								<li><strong>Paso 1:</strong> Da clic en el botón <span class="text-primary">ACTÍVATE</span> y coloca tu número de socio.</li>
								<li><strong>Paso 2:</strong> Verifica que las <span class="text-primary">iniciales coincidan con tu nombre</span> y sigue los pasos indicados.</li>
								<li><strong>Paso 3:</strong> Recibe un código de activación que te llegará a tu dispositivo móvil.</li>
								<li><strong>Paso 4:</strong> Genera tu <span class="text-primary">contraseña</span> siguiendo las recomendaciones y condiciones de seguridad que te aparecerán en la pantalla.</li>
								<li><strong>Paso 5:</strong> Selecciona tu <span class="text-primary">pregunta de seguridad</span> que te ayudará a identificarte en caso de perder tu contraseña <span class="text-primary">¡Recuerda no olvidar la respuesta!</span></li>
							</ul>
							<p><span class="text-primary">¡Listo!</span> Terminaste de activar tu aplicación <span class="text-primary">CPM Móvil Plus</span> y ya estás listo para solicitar tu <span class="text-primary">Crédito Inmediato.</span></p>
						</div>
					</div>
				</div> <!-- ./ Video guides -->

				<div class="row align-items-center mb-5">
					<div class="col-12 col-lg-6 order-1 order-lg-2">
						<img src="assets/img/secciones/banner-CPMMovilPlus.png" alt="Infografía - Antes de comenzar CPM Movil Plus" class="img-fluid mb-5 mb-lg-0">
						<!-- <img src="assets/img/secciones/banner-CPMMovilPlus-antesdecomenzar.png" alt="Infografía - Antes de comenzar CPM Movil Plus" class="img-fluid mb-5 mb-lg-0"> -->
					</div>
					<div class="col-12 col-lg-6 order-2 order-lg-1">
						<div class="p-5 border border-light bw-5 rounded border-grey1 text-left">
							<h4><span class="text-primary">Pasos para tramitar tu <span class="text-primary">Crédito Inmediato</span>:</h4>
							<ul class="has-arrow">
								<li>Accede a tu aplicación <strong>CPM Móvil Plus</strong>.</li>
								<li>Da clic en <strong>Créditos CPM</strong> y selecciona <strong>Crédito Inmediato</strong>.</li>
								<li>Revisa detenidamente los términos y condiciones del crédito, una vez que termines da clic en <strong>continuar</strong>.</li>
								<li>Realiza tu simulación colocando el <strong>monto a solicitar</strong> <i>(igual o menor a tu ahorro)</i>, <strong>el plazo</strong> <i>(desde un mes hasta 72 meses)</i> y la primera <strong>fecha de pago</strong>.</li>
								<li>Si la simulación se acomoda a tus necesidades da clic en <strong>quiero este crédito</strong>; recuerda que puedes simular las veces que necesites.</li>
								<li>Al dar clic en <strong>continuar</strong>, te pedirá escanear tu documentación (INE); recuerda seguir muy bien las instrucciones ya que solo tienes 4 intentos de escaneo.</li>
								<li><strong>Firma y aprueba</strong> para obtener tu crédito siguiendo los pasos que se indican para autenticarte por seguridad.</li>
								<li>Por último, <strong>revisa la cuenta donde el dinero fue depositado</strong> y da clic en <strong>obtén tu contrato</strong>; los documentos serán enviados a tu correo electrónico por tu seguridad y comodidad.</li>
								<li>No olvides dar clic en <strong>finalizar</strong> y disponer de tu crédito mediante <a href="https://www.cpm.coop/serviciosdigitales" class="text-primary"><strong>CPM Móvil</strong></a> y <a href="https://www.cpm.coop/serviciosdigitales" class="text-primary"><strong>CPM en Línea</strong></a>.</li>
							</ul>
							<p>En caso de que no hayas terminado tu trámite <strong>¡No te preocupes!</strong> Da clic en <strong>solicitudes</strong> y continúa el proceso o bien, consulta los términos y/o documentación de tu crédito actual.</p>
						</div>
					</div>
				</div> <!-- ./ Banner simple informativo -->

				<div class="row align-items-center mb-5">
					<div class="col-12 col-lg-6 order-lg-1">
						<!-- <img src="assets/img/secciones/banner-CPMMovilPlus.png" alt="Infografía - Antes de comenzar CPM Movil Plus" class="img-fluid mb-5 mb-lg-0"> -->
						<img src="assets/img/secciones/banner-CPMMovilPlus-antesdecomenzar.png" alt="Infografía - Antes de comenzar CPM Movil Plus" class="img-fluid mb-5 mb-lg-0">
					</div>
					<div class="col-12 col-lg-6 order-lg-2">
						<div class="p-5 border border-light bw-5 rounded border-grey1 text-left">
							<h4><span class="text-primary">Pasos para tramitar una cuenta de inversión <span class="text-primary">Rendicuenta</span>:</h4>
							<ul class="has-arrow">
								<li>Accede a tu aplicación <strong>CPM Móvil Plus</strong>.</li>
								<li>Da clic en <strong>Inversiones CPM</strong> y selecciona la modalidad que deseas (pago de interés mensual o al final de tu inversión)</li>
								<li>Revisa detenidamente los términos y condiciones de la inversión que contratarás; una vez que termines da clic en <strong>continuar</strong>.</li>
								<li>Realiza tu simulación colocando el <strong>monto a invertir</strong>, el <strong>plazo</strong> y el <strong>vencimiento del capital</strong>.</li>
								<li>Si la simulación se acomoda a tus necesidades, da clic en <strong>quiero esta inversión</strong>; recuerda que puedes simular las veces que necesites.</li>
								<li><strong>Sigue las instrucciones</strong> para contratar tu inversión; no olvides notificar al beneficiario que asignaste.</li>
								<li><strong>Firma y aprueba</strong> para contratar tu inversión, siguiendo los pasos que se indican para autenticarte por seguridad.</li>
								<li>Por último, revisa la documentación que se expide.</li>
								<li>No olvides dar clic en <strong>finalizar</strong> para que tu sesión se cierre con seguridad.</li>
							</ul>
							<p>En caso de que no hayas terminado tu trámite <strong>¡No te preocupes!</strong> Da clic en <strong>solicitudes</strong> y continúa el proceso. <strong>Recuerda</strong> que debes terminarla <strong>el mismo día que crees la solicitud</strong>, de lo contrario tendrás que comenzar de nuevo.</p>
						</div>
					</div>
				</div> <!-- ./ Banner simple informativo -->

				<div class="row mb-5 pb-5">

					<div class="col-12">
						<h2 class="display-4 text-center text-primary font-weight-semibold mb-5">¡Sácale provecho a CPM Móvil Plus, con tu Crédito Inmediato y Rendicuenta!</h2>
						<div class="blog-slider">
							<div>
								<div class="row">
									<div class="col-md-6 col-lg-7 offset-lg-1 mr-lg-n5 has-label">
										<img src="assets/img/secciones/servicios-digitales-plus/carrusel_emergencia.jpg" class="bg-grey1 img-fluid" alt="Imagen alusiva: No gastes todos tus ahorros en 1 minuto">
									</div>
									<div class="col-md-6 col-lg-4 h-50 ml-lg-n1 my-auto">
										<div class="h-100 p-5 py-md-2 p-lg-5 bg-primary text-white br-ntl-30">
											<h3><strong>¡No gastes en 1 minuto lo que te costó 1 año ahorrar!</strong></h3>
											<h5 class="text-yellow"><strong>Solicita tu Crédito Inmediato</strong></h5>
											<p>Sabemos lo mucho que vale tu esfuerzo, por eso te invitamos a cuidar tu patrimonio solicitando tu Crédito Inmediato con una tasa accesible.</p>
											<a href="https://www.cpm.coop/cpm-movil-plus" target="_blank" class="btn bg-secondary br-30 px-5"><strong>Saber más</strong></a>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col-md-6 col-lg-7 offset-lg-1 mr-lg-n5 has-label">
										<img src="assets/img/secciones/cpm-movil-plus/01-banner-carrusel-rendi.png" class="bg-grey1 img-fluid" alt="Imagen alusiva: No gastes todos tus ahorros en 1 minuto">
									</div>
									<div class="col-md-6 col-lg-4 h-50 ml-lg-n1 my-auto">
										<div class="h-100 p-5 py-md-2 p-lg-5 bg-primary text-white br-ntl-30">
											<h3><strong>Invierte cooperativamente</strong></h3>
											<h5 class="text-yellow"><strong>3 razones para hacerlo en una caja popular</strong></h5>
											<p>Invertir es muy bonito y está bien hacerlo al menos una vez en la vida, hazlo en una entidad financiera regulada, como una caja popular.</p>
											<a href="https://cooperandoando.com/invertir-cooperativamente-es-bonito-y-esta-bien/" target="_blank" class="btn bg-secondary br-30 px-5"><strong>Saber más</strong></a>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col-md-6 col-lg-7 offset-lg-1 mr-lg-n5 has-label">
										<img src="assets/img/secciones/servicios-digitales-plus/carrusel-nota.jpg" class="bg-grey1 img-fluid" alt="Imagen alusiva: ¿Planeas las vacaciones del 2021?">
									</div>
									<div class="col-md-6 col-lg-4 h-50 ml-lg-n1 my-auto">
										<div class="h-100 p-5 py-md-2 p-lg-5 bg-primary text-white br-ntl-30">
											<h3><strong>¿Planeando las vacaciones del 2021?</strong></h3>
											<h5 class="text-yellow"><strong>¡NO te gastes tus ahorros!</strong></h5>
											<p>¿Te gustaría ir planeando tus próximas vacaciones, para cuando la contingencia pase? Checa esta información y descubre todo lo que debes saber.</p>
											<a href="https://cooperandoando.com/un-credito-para-viajar" target="_blank" class="btn bg-secondary br-30 px-5"><strong>Saber más</strong></a>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="row">
									<div class="col-md-6 col-lg-7 offset-lg-1 mr-lg-n5 has-label">
										<img src="assets/img/secciones/cpm-movil-plus/02-banner-carrusel-rendi.png" class="bg-grey1 img-fluid" alt="Imagen alusiva: No gastes todos tus ahorros en 1 minuto">
									</div>
									<div class="col-md-6 col-lg-4 h-50 ml-lg-n1 my-auto">
										<div class="h-100 p-5 py-md-2 p-lg-5 bg-primary text-white br-ntl-30">
											<h3><strong>Hazlo en una cooperativa regulada</strong></h3>
											<h5 class="text-yellow"><strong>Tu dinero crece y ayuda a que otros prosperen</strong></h5>
											<p>Dentro de las bondades de invertir en una cooperativa de ahorro y préstamo regulada, es que tu dinero está a salvo.</p>
											<a href="https://cooperandoando.com/al-invertir-vete-a-la-segura/" target="_blank" class="btn bg-secondary br-30 px-5"><strong>Saber más</strong></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-slider_nav">
							<ul class="controls" id="gallery-controls" aria-label="Gallery Navigation" tabindex="0">
								<li class="prev" aria-controls="gallery" tabindex="-1" data-controls="prev">
									<i class="fas fa-chevron-left"></i>
								</li>
								<li class="next" aria-controls="gallery" tabindex="-1" data-controls="next">
									<i class="fas fa-chevron-right"></i>
								</li>
							</ul>
						</div>
						
						<script type="module">
							var slider = tns({
								container: '.blog-slider',
								mode: 'carousel',
								controlsContainer: "#gallery-controls",
								nav: false,
								items: 1,
								slideBy: 'page',
								autoplay: true,
								autoplayTimeout: 8500,
								speed: 650,
								animateIn: 'fadeIn',
								animateOut: 'fadeOut',
								touch: true
							});
						</script>

					</div>
				</div> <!-- ./ CPM Movil Plus Slider -->

				<!-- Grid: Mas opciones -->
				<div class="row row-eq-height mt-5">
					<!-- <div class="landing-grid-box col-12 col-md-4 mb-5">
						<a href="operaciones-disponibles-sei" class="h-100">
							<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
								<i class="fas fa-clipboard-list fa-4x bg-primary text-white rounded-circle"></i>
								<h3>Operaciones disponibles</h3>
								<p>Consulta todo lo que puedes realizar en CPM Móvil y CPM en Línea</p>
							</div>
						</a>
					</div> -->
					<div class="landing-grid-box col-12 col-md-6 mb-5">
						<a href="preguntas-frecuentes-sei" class="h-100">
							<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center h-100">
								<i class="far fa-question-circle fa-4x bg-primary text-white rounded-circle"></i>
								<h3>Preguntas <br>frecuentes</h3>
								<p>Resuelve tus dudas con un solo clic</p>	
							</div>
						</a>
					</div>
					<div class="landing-grid-box col-12 col-md-6 mb-5">
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
					<div class="landing-grid-box col-12 mb-0">
						<div class="landing-grid-box-info rounded bw-5 border-grey0 text-center py-5">
							<h3 class="">No olvides revisar estos consejos de seguridad que tenemos para tí</h3>
							<a href="consejo-de-seguridad-sei" class="btn btn-lg bg-blue3 text-white">Por tu seguridad</a>
						</div>
					</div>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>