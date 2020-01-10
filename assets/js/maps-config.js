    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: new google.maps.LatLng(22.4878769, -104.0788209),
            mapTypeId: 'roadmap'
        });
        var script = document.createElement('script');
        script.src = 'https://hitdigital.mx/maps/demo/data/mapa.js';
        document.getElementsByTagName('head')[0].appendChild(script);
    }
    window.eqfeed_callback = function(results) {
        for (var i = 0; i < results.features.length; i++) {
            var coords = results.features[i].geometry.coordinates;
            var estado = results.features[i].properties.estado;
            var sucursal = results.features[i].properties.sucursal;
            var latitud = results.features[i].properties.latitud;
            var longitud = results.features[i].properties.longitud;
            var title = estado + ' ' + sucursal;
            var localizacion = '('+ latitud + ','+ longitud+')';
            
            
            var latLng = new google.maps.LatLng(coords[1], coords[0]);
            // Creating a marker and putting it on the map
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: title,
                icon: 'https://hitdigital.mx/maps/demo/assets/img/market.png'
                
            });
          
        }
    }