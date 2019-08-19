jQuery(document).ready(function($) {
    function decodeEntities(encodedString) {
        var translate_re = /&(nbsp|amp|quot|lt|gt);/g;
        var translate = {
            "nbsp":" ",
            "amp" : "&",
            "quot": "\"",
            "lt"  : "<",
            "gt"  : ">"
        };
        return encodedString.replace(translate_re, function(match, entity) {
            return translate[entity];
        }).replace(/&#(\d+);/gi, function(match, numStr) {
            var num = parseInt(numStr, 10);
            return String.fromCharCode(num);
        });
    }

    (function($) {
        var mapEl = document.getElementById('map');

        if (mapEl) {
            function initMap() {
                var map = new google.maps.Map(mapEl, {
                    zoom: 16,
                    center: {lat: 32.7159711, lng: -117.1666568},
                    disableDefaultUI: true,
                    styles: [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#444444"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#E6D8DC"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "color": "#bd99a4"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "weight": "0.20"
                                },
                                {
                                    "color": "#723548"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dbc8cd"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                },
                                {
                                    "hue": "#ff0047"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#CAAFB7"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ],
                });

                setMarkers(map);
            }

            var beaches = JSON.parse(tsh_arr);

            function setMarkers(map) {
                // Adds markers to the map.
                var image = {
                    url: tsh_marker_url,
                    size: new google.maps.Size(51, 68),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(25, 68)
                };

                var shape = {
                    coords: [15, 36, 21, 25, 27, 20, 27, 8, 21, 4, 13, 1, 7, 2, 2, 9, 1, 17, 4, 22],
                    type: 'poly'
                };

                for (var i = 0; i < beaches.length; i++) {
                    var beach = beaches[i];
                    var marker = new google.maps.Marker({
                        position: {lat: beach[2], lng: beach[3]},
                        map: map,
                        icon: image,
                        shape: shape,
                        title: beach[0]
                    });

                    var infowindow = new google.maps.InfoWindow({});

                    google.maps.event.addListener(marker, 'click', (function (marker, beach) {
                        return function () {
                            infowindow.setContent('<div class="service-marker-box">' +
                                '                           <h2 class="service-marker-title">' + beach[0] + '</h2>' +
                                '<div class="service-marker-info">' + decodeEntities(beach[1]) + '</div>' +
                                '</div>');
                            infowindow.open(map, marker);
                        }
                    })(marker, beach));
                }
            }

            initMap();
        }
    })(jQuery);
});


