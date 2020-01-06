jQuery(document).ready(function(){
    // Cargamos los estados
    var estados = "<option value='' disabled selected>Selecciona el estado</option>";

    for (var key in municipios) {
        if (municipios.hasOwnProperty(key)) {
            estados = estados + "<option value='" + key + "'>" + key + "</option>";
        }
    }

    jQuery('#estado').html(estados);

    // Al detectar
    jQuery( "#estado" ).change(function() {
        var html = "<option value='' disabled selected>Selecciona el municipio</option>";
        jQuery( "#estado option:selected" ).each(function() {
            var estado = jQuery(this).text();
            if(estado != "Selecciona el estado"){
                var municipio = municipios[estado];
                for (var i = 0; i < municipio.length; i++)
                    html += "<option value='" + municipio[i] + "'>" + municipio[i] + "</option>";
            }
        });
        jQuery('#municipio').html(html);
        // jQuery('select').material_select('update');
    })
    .trigger( "change" );
});