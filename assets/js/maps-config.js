    /*Funcion botton*/
    $("#btn-filtro").click(function() {
        var inpest = $('#cbx_estado').val();
        var inpmun2 = $("#cbx_municipio option:selected").text();
        var inpmun = $("#cbx_municipio").val();
        var inpsab = $('#customControlAutosizing').prop("checked");
        var inpdom = $('#customControlAutosizing2').prop("checked");
        /*var inptel = $('#customControlAutosizing3').prop("checked");
        var inpluz = $('#customControlAutosizing4').prop("checked");
        var inprem = $('#customControlAutosizing5').prop("checked");*/
        /*var inpcaj = $('#customControlAutosizing6').prop("checked");*/
        var inpcajdis = $('#customControlAutosizing7').prop("checked");
        var inpcajrec = $('#customControlAutosizing8').prop("checked");        
        window.location = "https://hitdigital.mx/maps/demo/ubica-tu-sucursal.php?estado=" + inpest + "&idmun=" + inpmun + "&municipio=" + inpmun2 + "&sab=" + inpsab + "&dom=" + inpdom + "&cajdis=" + inpcajdis + "&cajrec=" + inpcajrec + "#data-gmaps";
    });

    function autocompleteMun() {
        $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        $("#cbx_estado option:selected").each(function() {
            id_estado = $(this).val();
            $.post("conexion/includes/getMunicipio.php", {
                id_estado: id_estado
            }, function(data) {
                $("#cbx_municipio").html(data);
            });
        });
    }
    setTimeout(function() {
        autocompleteMun();
    }, 1000);
    setTimeout(function() {
        $("#cbx_municipio option[value='" + $('#idmun').val() + "']").prop('selected', true);
    }, 2000);
    /*Cierre funcion botton filtro*/
    /*Funcionalidad datos GET*/
    $("#cbx_estado option[value='" + $('#hestado').val() + "']").prop('selected', true);
    $("#cbx_estado option[value='" + $('#hmuni').val() + "']").prop('selected', true);
    $("#cbx_municipio").append("<option>" + $('#hmuni').val() + "</option>");
    if ($('#hsab').val() == "true") {
        $('#customControlAutosizing').prop("checked", true);
    }
    if ($('#hdom').val() == "true") {
        $('#customControlAutosizing2').prop("checked", true);
    }
    /*if ($('#htel').val() == "true") {
        $('#customControlAutosizing3').prop("checked", true);
    }
    if ($('#hluz').val() == "true") {
        $('#customControlAutosizing4').prop("checked", true);
    }
    if ($('#hrem').val() == "true") {
        $('#customControlAutosizing5').prop("checked", true);
    }*/
    /*if ($('#hcaj').val() == "true") {
        $('#customControlAutosizing6').prop("checked", true);
    }*/
    if ($('#hcajdis').val() == "true") {
        $('#customControlAutosizing7').prop("checked", true);
    }
    if ($('#hcajrec').val() == "true") {
        $('#customControlAutosizing8').prop("checked", true);
    }
    /*Cierre funcionalidad datos GET*/
    /*Funcion colocar mapa*/
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
    /*Cierre colocar mapa*/
    /*Funcion traer datos json*/
    window.eqfeed_callback = function(results) {
        /*Datos de filtrado*/
        var inpest = $("#cbx_estado option:selected").text();
        var inpmun = $("#cbx_municipio option:selected").text();
        var inpsab = $('#customControlAutosizing').prop("checked");
        var inpdom = $('#customControlAutosizing2').prop("checked");
        /*var inptel = $('#customControlAutosizing3').prop("checked");
        var inpluz = $('#customControlAutosizing4').prop("checked");
        var inprem = $('#customControlAutosizing5').prop("checked");*/
        /*var inpcaj = $('#customControlAutosizing6').prop("checked");*/
        var inpcajdis = $('#customControlAutosizing7').prop("checked");
        var inpcajrec = $('#customControlAutosizing8').prop("checked");
        /*Cierre de datos de filtrado*/
        for (var i = 0; i < results.features.length; i++) {
            /*Variables generales, ubicaciones, etc*/
            var coords = results.features[i].geometry.coordinates;
            var estado = results.features[i].properties.estado;
            var sucursal = results.features[i].properties.sucursal;
            var latitud = results.features[i].properties.latitud;
            var longitud = results.features[i].properties.longitud;
            var direccion = results.features[i].properties.direccion;
            var municipio = results.features[i].properties.municipio;
            var colonia = results.features[i].properties.colonia;
            var tel = results.features[i].properties.tel1;
            var fax = results.features[i].properties.tel2;
            /*Cierre de variables generales*/
            /*Variables de servicios*/
            var lada = results.features[i].properties.lada;
            var luz = results.features[i].properties.servicios_luz;
            var telefonia = results.features[i].properties.servicios_teleono;
            var remesas = results.features[i].properties.servicios_remesas;
            var agua = results.features[i].properties.servicios_agua;
            var cajero = results.features[i].properties.cajero;
            var cdisp = results.features[i].properties.cajero_dispensador;
            var crecep = results.features[i].properties.cajero_receptor;
            /*Cierre de variable de servicios*/
            /*Variables banners 1 y 2*/
            var banner = results.features[i].properties.imagen1;
            var info1 = results.features[i].properties.texto1;
            var banner2 = results.features[i].properties.imagen2;
            var info2 = results.features[i].properties.texto2;
            var info3 = results.features[i].properties.texto3;
            var banner3 = results.features[i].properties.imagen3;
            var link1 = results.features[i].properties.ver_mas1;
            var link2 = results.features[i].properties.ver_mas2; 
            var link3 = results.features[i].properties.ver_mas3;
            
            
            /*Cierre de variables 1 y 2*/
            /*Variables de horarios*/  
            var horariolv = results.features[i].properties.horario_lv;
            var horariosb = results.features[i].properties.horario_sb;
            var horariodm = results.features[i].properties.horario_dm;
            /*cierre de variables de horarios*/
            /*Datos asamblea*/
            var dasamblea = results.features[i].properties.direccion_asamblea;
            var fasamblea = results.features[i].properties.fecha_asamblea;
            var hasamblea = results.features[i].properties.hora_asamblea;
            /*Cierre de datos asamblea*/
            /*Validacion de campos*/
            /*Union de servicios*/
            var unionser = "";
            var uniontel = "";
            if (luz === undefined) {
                luz = '';
            } else {
                if (unionser == "") {
                    unionser = luz;
                } else {
                    unionser += ', ' + luz;
                }
            }
            if (agua === undefined) {
                agua = '';
            } else {
                if (unionser == "") {
                    unionser = agua;
                } else {
                    unionser += ', ' + agua;
                }
            }
            if (telefonia === undefined) {
                telefonia = '';
            } else {
                if (unionser == "") {
                    unionser = telefonia;
                } else {
                    unionser += ', ' + telefonia;
                }
            }
            if (remesas === undefined) {
                remesas = '';
            } else {
                if (unionser == "") {
                    unionser = remesas;
                } else {
                    unionser += ', ' + remesas;
                }
            }
            /*Cierre de union de servicios*/
            if (tel === undefined) {
                tel = '';
            } else {
                if (uniontel == "") {
                    uniontel = tel;
                } else {
                    uniontel += ', ' + tel;
                }
            }
            if (fax === undefined) {
                fax = '';
            } else {
                if (uniontel == "") {
                    uniontel = fax;
                } else {
                    uniontel += ', ' + fax;
                }
            }
            /*Si el campo esta vacio cambia a un espacio en blanco*/
            if (horariolv === undefined) {
                horariolv = '';
            } else {}
            if (horariosb === undefined) {
                horariosb = '';
            } else {}
            if (horariodm === undefined) {
                horariodm = '';
            } else {}
            if (banner === undefined) {
                banner = '';
            } else {}
            if (banner2 === undefined) {
                banner2 = '';
            } else {}
            if (banner3 === undefined) {
                banner3 = '';
            } else {}
            if (info1 === undefined) {
                info1 = '';
            } else {}
            if (info2 === undefined) {
                info2 = '';
            } else {}
            if (info3 === undefined) {
                info3 = '';
            } else {}
            /*Cierre de telefonos concatenados*/
            if (cajero === undefined) {
                cajero = '';
            } else {}
            if (cajero === undefined) {
                cajero = '';
            } else {}

            /*Cierre validacion datos banner */ 
            /*Cierre de validacion de campos*/
            var direccionfinal = direccion + '<br>' + colonia;
            var title = estado + ' ' + sucursal;
            var localizacion = '(' + latitud + ',' + longitud + ')';
            var existe = false;
            var seleccion = 0;            
            /*Contador carousel*/
            var ccarousel = sucursal + 'cpm';
            /*Cierre contador carousel*/
            if (inpest == estado.toUpperCase()) {
                if (inpmun == municipio.toUpperCase()) {
                    if (inpsab) {
                        if (horariosb.length > 2) {
                            existe = true;
                        }
                    } else {
                        seleccion++;
                    }
            if(i === 0) {
              template = '<div class="carousel-item active">';
            } else {
              template = '<div class="carousel-item">';
            }
                    if (inpdom) {
                        if (horariodm.length > 2) {
                            existe = true;
                        }
                    } else {
                        seleccion++;
                    }
                    /* if (inptel) {
                         if (telefonia.length > 2) {
                             existe = true;
                         }
                     } else {
                         seleccion++;
                     }
                     if (inpluz) {
                         if (luz.length > 2) {
                             existe = true;
                         }
                     } else {
                         seleccion++;
                     }
                     if (inprem) {
                         if (remesas.length > 2) {
                             existe = true;
                         }
                     } else {
                         seleccion++;
                     }*/
                    if (inpcajrec) {
                        if (crecep == "SI") {
                            existe = true;
                        }
                    } else {
                        seleccion++;
                    }
                    if (inpcajdis) {
                        if (cdisp == "SI") {
                            existe = true;
                        }
                    } else {
                        seleccion++;
                    }
                    if (seleccion == 4) {
                        existe = true;
                    }
                    if (existe) {
                        var datainfo = "<div class='col-12 col-md-12'><div class='card w-100 rounded-0' style='margin-bottom: 15px;'><div class='card-header py-2 px-3'><h5 class='card-title mb-0 data-info'>*sucursal*</h5></div><div class='card-body py-2 px-3'><p class='card-text data-info'><strong>Direcci&oacute;n:</strong>  *direccion*</p></div><ul class='list-group list-group-flush'><li class='list-group-item py-2 px-3 data-info'><strong>Telefono: </strong> (*lada*) *tel*</li><li class='list-group-item py-2 px-3 data-info'><strong>Horarios: </strong>*horariolv*<br>*horariosb*<br>*horariodm*</li><li class='list-group-item py-2 px-3 data-info'><strong>Servicios: </strong> *servicios*.</li></ul><div class='card-body py-2 px-3 data-info'><div id='carouselExampleControls' class='carousel slide' data-ride='carousel'><div class='carousel-inner'><div class='carousel-item active *sucursal* data-info'><img class='d-block w-100'  src='*banner*' alt='' id='slide-uno'><p class='data-info'>*info1*</p><a href='*link1*' target='_blank'><input type='button' class='btn btn-primary btn-sm datos-maker' value='Ver m&aacute;s'></a></div><div class='carousel-item *sucursal* data-info'><img class='d-block w-100' src='*banner2*' alt='' id='slide-dos'><p class='data-info'>*info2*</p><a href='*link2*' target='_blank'><input type='button' class='btn btn-primary btn-sm datos-maker' value='Ver m&aacute;s'></a></div><div class='carousel-item *sucursal* data-info'><img class='d-block w-100' src='*banner3*' alt='' id='slide-tres'><p class='data-info'>*info3*</p><a href='*link3*' target='_blank'><input type='button' class='btn btn-primary btn-sm datos-maker' value='Ver m&aacute;s'></a></div></div><a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'></a><a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'></a></div></div><div class='card-body py-2 px-3'><p class='card-text data-info'><strong>Direcci&oacute;n Asamblea:</strong>  *dasamblea*</p></div><div class='card-body py-2 px-3'><p class='card-text data-info'><strong>Fecha:</strong>  *fasamblea*</p></div><div class='card-body py-2 px-3'><p class='card-text data-info'><strong>Hora:</strong>  *hasamblea*</p></div><div class='card-body py-2 px-3'><input type='button' class='btn btn-primary btn-sm datos-maker' value='Ver en mapa' target='*localizacion*'></div></div>";
                        var datainsert = datainfo.replace('*sucursal*', sucursal).replace('*direccion*', direccion).replace('*banner*', banner).replace('*banner2*', banner2).replace('*horariolv*', horariolv).replace('*horariosb*', horariosb).replace('*horariodm*', horariodm).replace('*info1*', info1).replace('*info2*', info2).replace('*info3*', info3).replace('*banner3*', banner3).replace('*tel*', uniontel).replace('*lada*', lada).replace('*servicios*', unionser).replace('*localizacion*', localizacion).replace('*dasamblea*', dasamblea).replace('*fasamblea*', fasamblea).replace('*hasamblea*', hasamblea).replace('*link1*', link1).replace('*link2*', link2).replace('*link3*', link3);
                        $("#data-mapf").append(datainsert);
                        /*Mapeo Inicio*/
                        var latLng = new google.maps.LatLng(coords[1], coords[0]);
                        // Creating a marker and putting it on the map
                        var marker = new google.maps.Marker({
                            position: latLng,
                            map: map,
                            title: title,
                            local: localizacion,
                            direccion: direccionfinal,
                            icon: 'https://hitdigital.mx/maps/demo/assets/img/market.png'
                        });
                        //limpiamos el contenido del globo de informacion
                        var infowindow = new google.maps.InfoWindow({
                            content: ''
                        });
                        //contenido de la infowindow
                        var content = '<div id="content" style="width: auto; height: 80px;">' + marker.title + '<hr/>' + marker.direccion + '</div>';
                        /*metodo para desplegar la infowindow cuando se haga clic en el marcador*/
                        /*google.maps.event.addListener(marker, 'click', function(marker, content, infowindow) {             
                            infowindow.setContent(content); //asignar el contenido al globo
                            infowindow.open(map, marker); //mostrarlo                      
                          }(marker, content, infowindow));
                            /*medoto para crear las infowindow independiente una de otra y 
                           * desplegarlas todas a la vez*/
                        google.maps.event.addListener(marker, 'mouseover', function(marker, content, infowindow) {
                            return function() {
                                infowindow.setContent(content); //asignar el contenido al globo
                                infowindow.open(map, marker); //mostrarlo
                                map.setZoom(16);
                            };
                        }(marker, content, infowindow));
                        /* infowindow.open(map, marker);  */
                        /*Mapeo Final*/
                    }
                }
            }
        }
    } /*Cierre funcion traer datos json*/
    /*Aqui estaba la funcion clic*/
    $('body').on("click", ".datos-maker", function() {
        var loc = $(this).attr("target"); //Localizacion extraida del boton
        loc = loc.replace("(", "").replace(")", "");
        loc = loc.split(',');
        var newlat = 1 * loc[0];
        var newlng = 1 * loc[1];
        map.setZoom(16);
        map.setCenter({
            lat: newlat,
            lng: newlng
        });
    });