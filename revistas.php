<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner  bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Revistas</h1>
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
							<p class="mb-0 lead font-weight-normal">Mantente informado de todo lo relacionado con Caja Popular Mexicana y las <br>cooperativas en México y el mundo, siguiendo nuestras publicaciones impresas.</p>
						</blockquote>
					</div>
				</div> <!-- ./ Main info block -->

				<div class="row mb-5">
					<div class="col-12 col-md-6 offset-md-3 text-center py-3">
						<h3 class="title-medium font-weight-bold">REVISTAS</h3>
						<p class="lead font-weight-semibold">Selecciona la revista de tu interés</p>

						<div class="text-center">
							<div id="loading" class="spinner-border text-success" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</div>

						<form id="filtering_s" action="">
							<div class="form-group">
								<select class="form-control selectpicker" id="filterSelector">
									<option value="seleccione">- Categoría -</option>
									<option value="encuentro">Encuentro</option>
									<option value="patrimonio">Patrimonio</option>
									<option value="compromiso">Compromiso</option>
								</select>
							</div>
						</form>
					</div>
				</div>
				
				<div class="row guides-grid">
					<?php include('inc/sala-de-prensa/revistas/encuentro.php') ?>
					<?php include('inc/sala-de-prensa/revistas/patrimonio.php') ?>
					<?php include('inc/sala-de-prensa/revistas/compromiso.php') ?>
				</div>

			</div>
		</section> <!-- ./ Page content -->

<?php include('inc/footer.php'); ?>