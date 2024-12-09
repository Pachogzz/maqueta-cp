<?php include('inc/header.php'); ?>

		<section class="after-flange header-title-inner bg-gradient-green">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col">
						<h1 id="sectionTitle" class="display-4 br-30">Encuesta</h1>
					</div>
				</div>
			</div>
		</section> <!-- /. Page Title -->

		<!-- </?php include('inc/navs/inner_nav_page-legales.php') ?> -->

		<section class="pb-5">
			<div class="container">

				<div class="row">
					<!-- <div class="col-12 col-md-6 offset-md-3 text-center">
						<h3 class="title-medium font-weight-bold mb-4">...</h3>
					</div> -->

					<div class="col-12 col-md-10 offset-md-1 p-5 bg-grey0 text-center">
						<div class="text-center">
							<div id="loading2" class="spinner-border text-success" role="status">
								<span class="sr-only">Loading...</span>
							</div>
						</div>

						<script src="//prod1-8f86.kxcdn.com/s1/static/survey/js/easyXDM-2.4.16.3/easyXDM.min.js"></script>
						<div id="survey-ef29c475" style="height:600px;padding:0;margin:0;"></div>
						<iframe src="https://www.survio.com/survey/i/expspeisocios?shim=1" style="width:100%; height:30px;" frameborder="0" id="survey-prev-ef29c475"></iframe>
						<noscript>
							<iframe src="https://www.survio.com/survey/i/expspeisocios" style="width:100%; height:600px; margin-top:-35px;" frameborder="0"></iframe>
						</noscript>
						<script type="text/javascript">new easyXDM.Socket({remote: "https://www.survio.com/survey/i/expspeisocios?embed=1", container:document.getElementById("survey-ef29c475"), swf:'//prod1-8f86.kxcdn.com/s1/static/survey/js/easyXDM-2.4.16.3/easyxdm.swf', onReady:  function(){ var shim = document.getElementById("survey-prev-ef29c475"); shim.parentNode.removeChild(shim); this.container.getElementsByTagName("iframe")[0].style.width="100%"}, onMessage: function(message, origin){var h=message+"px";this.container.style.height=h;this.container.getElementsByTagName("iframe")[0] .style.height=h; }});</script>

						<!-- <hr class="border-danger my-6">

						<script src="//prod1-8f86.kxcdn.com/s1/static/survey/js/easyXDM-2.4.16.3/easyXDM.min.js"></script>
						<div id="survey-18e3cd14" style="height:600px;padding:0;margin:0;"></div>
						<iframe src="https://www.survio.com/survey/i/Y9D/cpmmovilplus?shim=1" style="width:100%; height:30px;" frameborder="0" id="survey-prev-18e3cd14"></iframe>
						<noscript>
							<iframe src="https://www.survio.com/survey/i/Y9D/cpmmovilplus" style="width:100%; height:600px; margin-top:-35px;" frameborder="0"></iframe>
						</noscript>
						<script type="text/javascript">new easyXDM.Socket({remote: "https://www.survio.com/survey/i/Y9D/cpmmovilplus?embed=1", container:document.getElementById("survey-18e3cd14"), swf:'//prod1-8f86.kxcdn.com/s1/static/survey/js/easyXDM-2.4.16.3/easyxdm.swf', onReady:  function(){ var shim = document.getElementById("survey-prev-18e3cd14"); shim.parentNode.removeChild(shim); this.container.getElementsByTagName("iframe")[0].style.width="100%"}, onMessage: function(message, origin){var h=message+"px";this.container.style.height=h;this.container.getElementsByTagName("iframe")[0].style.height=h; }});</script>  -->
					</div>
				</div>
			</div>
		</section> <!-- /. Main Content -->

<?php include('inc/footer.php'); ?>
<script>
	$(function() {
		setTimeout(function() { 
			$("#loading2").fadeOut(500); 
		}, 4000)
	})
</script>