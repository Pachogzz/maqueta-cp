		<footer id="site-footer" class="py-5 border-top">
			<div class="container">
				<div class="row">
					<!-- <div class="d-none d-lg-block d-xl-block col-1"></div> -->
					<div class="col-12 col-md-8 col-lg-8">
						<p class="display-20">¡Queremos escucharte! Llámanos al </p>
						<p class="display-30">800 7100 800</p>
						<p class="display-20">o escríbenos a </p>
						<p class="display-30"><a href="mailto:contacto@cpm.coop">contacto@cpm.coop</a></p>
						<div class="row mt-3">
							<div class="col-6 col-md-auto">
								<a href="https://www.buro.gob.mx/" target="_blank">
									<img src="assets/img/buro-g-logo.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-6 col-md-auto">
								<a href="http://www.aciamericas.coop/" target="_blank">
									<img src="assets/img/coop-g-logo.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-6 col-md-auto mt-3 mt-md-0">
								<a href="http://www.woccu.org/" target="_blank">
									<img src="assets/img/cm-g-logo.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-6 col-md-auto mt-3 mt-md-0">
								<a href="http://concamex.coop/es-mx/" target="_blank">
									<img src="assets/img/concamex-g-logo.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="col-6 col-md-auto mt-3 mt-md-0">
								<a href="https://www.integradoracentral.coop/" target="_blank">
									<img src="assets/img/fic-g-logo-2.png" alt="" class="img-fluid" height="90" width="auto">
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-4 mt-3 mt-md-0">
						<ul class="social-icons pt-3 pt-md-0 text-right">
							<li><a href="https://www.facebook.com/CajaPopularMexicana/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/CajaMexicana" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/user/CajaPopularMexicana" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/caja-popular-mexicana/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<!-- <div class="d-none d-lg-block d-xl-block col-1"></div> -->
				</div>
			</div>
		</footer> <!-- /. Site Footer -->

		<section id="copyright" class="bg-tertiary py-3">
			<div class="container">
				<div class="row">
					<div class="col-12 mb-2 text-center">
						<ul class="nav justify-content-center">
							<a class="nav-link" href="https://www.cpm.coop/inmuebles/" target="_blank"><small>Inmuebles</small></a>
							<a class="nav-link" href="consulta-los-costos-y-comisiones-de-nuestros-productos"><small>Costos y comisiones de nuestros productos</small></a>
							<a class="nav-link" href="criterios-contables-especiales"><small>Criterios contables especiales</small></a>
							<a class="nav-link" href="aviso-de-privacidad"><small>Aviso de privacidad</small></a>
							<a class="nav-link" href="politicas-de-uso"><small>Políticas de uso</small></a>
							<a class="nav-link" href="mapa-de-sitio"><small>Mapa del sitio</small></a>
							<a class="nav-link" href="despacho-de-cobranza"><small>Despacho de cobranza</small></a>
							<!-- <a class="nav-link" href="aviso-de-privacidad-credito-y-cobranza"><small>Aviso de privacidad crédito y cobranza</small></a> -->
							<a class="nav-link" href="buro-de-entidades-financieras"><small>Buró de Entidades Financieras</small></a>
							<!-- <a class="nav-link" href="terminos-de-uso-para-redes-sociales"><small>Términos de uso para redes sociales</small></a> -->
							<!-- <a class="nav-link" href="aviso-de-privacidad-en-redes-sociales"><small>Aviso de privacidad en redes sociales</small></a> -->
							<a class="nav-link" href="terminos-y-condiciones-sei"><small>Términos y condiciones para el Servicio Electrónico por Internet</small></a>
						</ul>
					</div>
					<div class="col-12 text-center text-light"><small>&copy; Caja Popular Mexicana 2020</small></div>
				</div>
			</div>
		</section>

		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function() {
				FB.init({
					xfbml : true,
					version : 'v6.0'
					});
			};
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		    attribution=setup_tool
		    page_id="508172242584661"
			theme_color="#13cf13"
			logged_in_greeting="Hola qué tal, gracias por contactarnos, ¿cómo puedo ayudarte?"
			logged_out_greeting="Seguimos a tus órdenes, saludos.">
		</div>

		<!-- jQiuery -->
		<script src="assets/js/jquery-3.4.1.min.js"></script>
		<!-- jQuery Waypoints -->
		<script src="assets/js/jquery.waypoints.min.js"></script>
		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Tiny Slider 2.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
		<!-- Selector de estados -->
		<script type="text/javascript" src="assets/js/municipios.js"></script>
		<!-- Form Validatr -->
		<script src="assets/js/validator.js"></script>
		<!-- Línea de tiempo -->
		<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
		<script src="assets/js/timeline.js"></script>
		<!-- Bootstrap Select - CUSTOM -->
		<script src="assets/js/bootstrap-select.min.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/site.js"></script>
		<!-- Maps Google -->
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiLXdNlZzFjV8DV-Rj16QWiN37zx2nbLo&callback=initMap" async defer></script> -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY3wtYGDWhjl332uvDlxDkWpmh8Tum3qk&callback=initMap" async defer></script>
		<script type="text/javascript" src="assets/js/maps-config.js"></script>
		<script type="text/javascript" src="assets/js/select-drop.js"></script>
	</body>
</html>