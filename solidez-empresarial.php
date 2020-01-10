<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
				<!-- <div class="row h-100 align-items-center has-video-bg">
					<div class="bg-video-title w-100 text-center">
						<video autoplay loop muted class="video-bg container px-0" id="video-bg">
							<source 
								class=""
								src="assets/video/conocenos.mp4" 
								type="video/mp4" 
								alt="Bienvenido a Caja Popular Mexicana">
						</video>
					</div> -->
					<div class="col">
						<h1 class="display-4 bg-primary d-inline-block px-lg-5 py-lg-3 br-30 text-white font-weight-semibold">Solidez Empresarial</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner-nav-page-conocenos.php') ?>
		
		<section class="featured-module-home mt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 mb-3 mb-md-5">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center h-100">
							<h3 class="font-weight-bold text-primary">Confianza</h3>
							<p class="mb-0 lead font-weight-normal">Gracias a la confianza de los socios, la cooperativa muestra un sólido crecimiento financiero y económico, lo que permite su desarrollo y oferta de productos y servicios competitivos.</p>
						</blockquote>
					</div>
					<div class="col-12 col-md-6 mb-3 mb-md-5">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center h-100">
							<h3 class="font-weight-bold text-primary">Transparencia y Responsabilidad</h3>
							<p class="mb-0 lead font-weight-normal">En Caja Popular Mexicana operamos conforme a los valores de la transparencia y responsabilidad, por ello, es de conocimiento de la autoridad y de los asociados el estado financiero que guarda la cooperativa.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main entrance text -->
			</div>
		</section> <!-- /. Main Tag Line -->

		<section class="page-content">
			<div class="container">
				<div class="row" id="counter">
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-users fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">1,726,428</h2>
							<h4>Socios</h4>
						</div>
					</div>
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-child fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">360,957</h2>
							<h4>Ahorradores Menores de Edad</h4>
						</div>
					</div>
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-store-alt fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val">473</h2>
							<h4>Sucursales</h4>
						</div>
					</div>
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-piggy-bank fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">48,282,360</h2>
							<h4>Captación</h4>
						</div>
					</div>
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-primary text-white text-center rounded p-5">
							<i class="fas fa-money-bill-wave fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">38,479,149</h2>
							<h4>Colocación</h4>
						</div>
					</div>
					<div class="col-12 col-md-4 mb-4 mb-md-5">
						<div class="h-100 bg-quinary text-white text-center rounded p-5">
							<i class="fas fa-hand-holding-usd fa-5x mb-3"></i>
							<h2 class="font-weight-bolder mb-3 counter-val asterisk">60,047,095</h2>
							<h4>Activos</h4>
						</div>
					</div>
				</div>

				<script type="text/javascript">
					$(document).ready(function(){
						$(function() {
							$('.counter-val').rCounter({
								duration: 45
							});
						});
					});
				</script>

				<div class="row">
					<div class="col-12">
						<p class="text-center text-grey2">CAJA POPULAR MEXICANA S.C. DE A.P. DE R.L. DE C.V. <br>
						*Cifras en miles de pesos | Información estadística al 30 de noviembre de 2019</p>
					</div>
				</div>
			</div>
		</section> <!-- /. Main Content -->

<?php include('inc/boletin-and-banner.php') ?>

<?php include('inc/footer.php'); ?>