<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Notas de prensa</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<?php include('inc/navs/inner_nav_page-revistas.php') ?>

		<section class="page-content">
			<div class="container">
				<div class="row mb-5">
					<div class="col">
						<blockquote class="blockquote p-5 border border-light bw-5 rounded border-grey1 text-center">
							<p class="mb-0 lead font-weight-normal">Consulta qué es lo que dicen los medios de comunicación sobre Caja Popular Mexicana.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->

				<div class="row mb-5">
					<div class="col-12 text-center py-3">
						<!-- <h3 class="title-medium text-primary font-weight-bold mb-4">Lista por año de boletines</h3> -->

						<?php include('inc/sala-de-prensa/notas-de-prensa/notas-de-prensa.php'); ?>

					</div>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>