<?php include('inc/header.php'); ?>
  <?php include('conexion/conexion.php') ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Ubica tu sucursal</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php //include('inc/navs/inner_nav_page-ubica-tu-sucursal.php'); ?>

		<section class="page-content">
			<div class="container">
				<div class="row">
					<div class="col">
						<blockquote class="blockquote mb-5 p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="h3 font-weight-bold text-primary">AVISO</p>
							<p class="mb-0 lead font-weight-normal">Ante la apertura y liberación de actividades económicas en diferentes estados y municipios de nuestro país, comenzamos, de manera paulatina, la modificación de nuestros horarios de servicio en sucursales a partir del 7 de septiembre de 2020.</p>
							<br>
							<p class="mb-0 lead font-weight-normal"><strong>Consulta el horario de tu sucursal filtrando los campos correspondientes.</strong></p>
							<br>
							<p class="h3 font-weight-bold">Si tienes alguna duda, <span class="text-primary">escríbenos vía Messenger de Facebook</span> en la burbuja verde.</p>
							<!-- <p class="h3 font-weight-bold">Consulta más información <a href="https://www.facebook.com/CajaPopularMexicana/photos/a.508180245917194/2846261228775739/" class="text-primary" target="_blank">AQUÍ</a></p> -->
						</blockquote>
					</div>
				</div>
                      <?php include('sucursal.php') ?>
				</div>	
			</div>
		</section>

<?php include('inc/boletin-and-banner.php') ?>

<?php include('inc/footer.php'); ?>