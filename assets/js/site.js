$(document).ready(function(){
	$('#loading').hide();
	// Get dinamically the site title
	var titleSite = $('#sectionTitle').text();
	console.log(titleSite);
	$(document).prop('title', titleSite + " - Caja Popular Mexicana");

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
		$('.guides-grid-col').hide();
		$('#filterSelector').change(function(){
			$('.guides-grid-col').hide();
			$('.guides-grid #' + $(this).val()).show();
		});
	});

	// Inicializa el contador de los números ( actualmente ubicado solamente en Solidez Empresarial )
	$('.counter-val').rCounter({
		// delay: 100000,
		// time: 100000
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
	// Busca la clase para cualquier tab que tenga esta, sean acordiones en movil.
	$('.responsive-tabs').responsiveTabs({
		 accordionOn: ['xs', 'sm']
	});

    // Cargamos los estados en los formularios de dudas de creditos
    var estados = "<option value='' disabled selected>Selecciona el estado</option>";
    // Carga por cada elemento existente en el objeto el nombre y lo agrega como value y dato
    for (var key in municipios) {
        if (municipios.hasOwnProperty(key)) {
            estados = estados + "<option value='" + key + "'>" + key + "</option>";
        }
    }
    $('#estado').html(estados);
    // Al detectar estado cambia municipio
    $( "#estado" ).change(function() {
        var html = "<option value='' disabled selected>Selecciona el municipio</option>";
        $( "#estado option:selected" ).each(function() {
            var estado = $(this).text();
            if(estado != "Selecciona el estado"){
                var municipio = municipios[estado];
                for (var i = 0; i < municipio.length; i++)
                    html += "<option value='" + municipio[i] + "'>" + municipio[i] + "</option>";
            }
        });
        $('#municipio').html(html);
    })
    .trigger( "change" );

});