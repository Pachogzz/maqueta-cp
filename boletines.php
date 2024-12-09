<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Boletines</h1>
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
							<p class="mb-0 lead font-weight-normal">Conoce la información más relevante de Caja Popular Mexicana, con nuestros boletines de prensa.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->

				<div class="row mb-5">
					<div class="col-12 text-center py-3">
						<h3 class="title-medium font-weight-bold">BOLETINES</h3>
						<p class="lead font-weight-semibold">Selecciona el año de tu interés</p>

						<div class="text-center">
							<div id="loading" class="spinner-border text-success" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</div>

						<div class="col-12 col-md-4 offset-md-4">
							<form id="filtering_s" action="">
								<div class="form-group">
									<select class="form-control selectpicker" id="filterSelector">
										<option value="seleccione">- Seleccionar año -</option>
										<option value="item-2021">2021</option>
										<option value="item-2020">2020</option>
										<option value="item-2019">2019</option>
										<option value="item-2018">2018</option>
										<option value="item-2017">2017</option>
										<option value="item-2016">2016</option>
										<option value="item-2015">2015</option>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Boletines -->
				<div class="row guides-grid border-green">
					<?php include('inc/sala-de-prensa/boletines/boletines.php') ?>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>