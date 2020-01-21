<?php include('inc/header.php'); ?>
  <?php include('conexion/conexion.php') ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 class="display-4 br-30">Ubica tu sucursal</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-ubica-tu-sucursal.php') ?>

		<section class="page-content">
			<div class="container">
				<div class="row">
					<div class="col">
						<blockquote class="blockquote mb-5 p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-0 lead font-weight-normal">¡Te esperamos en tu sucursal más cercana!</p>
						</blockquote>
					</div>
				</div>
                      <?php include('sucursal.php') ?>
				</div>	
			</div>
		</section>

<?php include('inc/boletin-and-banner.php') ?>

<?php include('inc/footer.php'); ?>