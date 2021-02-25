<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Solidez Empresarial</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-conocenos.php') ?>
		
		<section class="featured-module-home mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 mb-3 mb-md-5">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center h-100">
							<h3 class="font-weight-bold text-primary">Confianza</h3>
							<p class="mb-0 lead font-weight-normal">Gracias a la confianza de nuestros socios, hemos mostrado un sólido crecimiento financiero y económico, lo que nos permite desarrollar servicios financieros competitivos, personalizados, oportunos y accesibles.</p>
						</blockquote>
					</div>
					<div class="col-12 col-md-6 mb-3 mb-md-5">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center h-100">
							<h3 class="font-weight-bold text-primary">Transparencia y responsabilidad</h3>
							<p class="mb-0 lead font-weight-normal">Operamos conforme a los valores de la transparencia y responsabilidad, por ello, es de conocimiento de la autoridad y de nuestros socios el estado financiero que guarda nuestra cooperativa.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main entrance text -->
			</div>
		</section> <!-- /. Main Tag Line -->

		<section class="page-content">
			<div class="container">
				<div class="row" id="counter">
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-users fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">2,912,350</h2>
							<h4>Socios</h4>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-child fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">326,855</h2>
							<h4>Ahorradores Menores de Edad</h4>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-store-alt fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">478</h2>
							<h4>Sucursales</h4>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-piggy-bank fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">56,337,697</h2>
							<h4>Captación</h4>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-money-bill-wave fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">39,381,948</h2>
							<h4>Colocación</h4>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-hand-holding-usd fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">68,076,406</h2>
							<h4>Activos</h4>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="text-center text-grey2">CAJA POPULAR MEXICANA S.C. DE A.P. DE R.L. DE C.V. <br>
						*Cifras en miles de pesos | Información estadística al 31 de Enero de 2021</p>
					</div>
				</div>
			</div>
		</section> <!-- /. Main Content -->

<?php include('inc/boletin-and-banner.php') ?>

<?php include('inc/footer.php'); ?>
		
<!-- Counter Up -->
<script src="assets/js/jquery.counterup.js"></script>
<script>
	$(document).ready(function(){
		// Inicializa el contador de los números ( actualmente ubicado solamente en Solidez Empresarial )
		$('.counter-val').rCounter({});
	});
</script>