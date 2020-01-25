$(document).ready(function(){
	// Bloque que nos permite colocar dropdowns dentro del menú principal
	$('.dropdown-submenu a.sub-drop').on("click", function(e){
		 // This is to hide all dropdown-menu children if the parent(dropdown-submenu) in the element have been clicked  
		$(this).next('ul').find('.dropdown-menu').each(function(){
			$(this).hide();
		});
		 // This is to find another dropdown-menu have has been opened and hide its submenu    
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
	
	// Opción para filtros en las páginas de CPM en Línea y Móvil
	$(function() {
		$('#filterSelector').change(function(){
			$('.guides-grid-col').hide();
			$('.guides-grid #' + $(this).val()).show();
		});
	});

	$('.counter-val').counterUp({
		delay: 10,
		time: 1000
	});

// Código para transformar en acoredeón los tabs en el sitio con la clase "responsive-tabs"
! function($) {
	"use strict";
	var a = {
		accordionOn: ["xs"]
	};
	$.fn.responsiveTabs = function(e) {
		var t = $.extend({}, a, e),
			s = "";
		return $.each(t.accordionOn, function(a, e) {
			s += " accordion-" + e
		}), this.each(function() {
			var a = $(this),
				e = a.find("> li > a"),
				t = $(e.first().attr("href")).parent(".tab-content"),
				i = t.children(".tab-pane");
			a.add(t).wrapAll('<div class="responsive-tabs-container" />');
			var n = a.parent(".responsive-tabs-container");
			n.addClass(s), e.each(function(a) {
				var t = $(this),
					s = t.attr("href"),
					i = "",
					n = "",
					r = "";
				t.parent("li").hasClass("active") && (i = " active"), 0 === a && (n = " first"), a === e.length - 1 && (r = " last"), t.clone(!1).addClass("accordion-link" + i + n + r).insertBefore(s)
			});
			var r = t.children(".accordion-link");
			e.on("click", function(a) {
				a.preventDefault();
				var e = $(this),
					s = e.parent("li"),
					n = s.siblings("li"),
					c = e.attr("href"),
					l = t.children('a[href="' + c + '"]');
				s.hasClass("active") || (s.addClass("active"), n.removeClass("active"), i.removeClass("active"), $(c).addClass("active"), r.removeClass("active"), l.addClass("active"))
			}), r.on("click", function(t) {
				t.preventDefault();
				var s = $(this),
					n = s.attr("href"),
					c = a.find('li > a[href="' + n + '"]').parent("li");
				s.hasClass("active") || (r.removeClass("active"), s.addClass("active"), i.removeClass("active"), $(n).addClass("active"), e.parent("li").removeClass("active"), c.addClass("active"))
			})
		})
	}
}(jQuery);

$('.responsive-tabs').responsiveTabs({
	 accordionOn: ['xs', 'sm']
});
 

});