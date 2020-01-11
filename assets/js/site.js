$(document).ready(function(){
	$('.dropdown-submenu a.sub-drop').on("click", function(e){
		/* This is to hide all dropdown-menu children if the parent(dropdown-submenu) in the element have been clicked */ 
		$(this).next('ul').find('.dropdown-menu').each(function(){
			$(this).hide();
		});
		/* This is to find another dropdown-menu have has been opened and hide its submenu */   
		var xw = $(this);
		$(this).closest(".dropdown-menu").find('.dropdown-submenu a.sub-drop').not(xw).each(function(){
			if($(this).next("ul").is(":visible")){
				$(this).next("ul").hide();
			}

		});
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	});
	
	$(function() {
		$('#filterSelector').change(function(){
			$('.guides-grid-col').hide();
			$('.guides-grid #' + $(this).val()).show();
		});
	});

	$(function() {
		$('.counter-val').rCounter({
			duration: 55
		});
	});
});