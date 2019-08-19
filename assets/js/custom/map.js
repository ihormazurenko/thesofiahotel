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

            var iconBase = tsh_marker_base_url;

            var icons = {
                tsh: {
                    icon: iconBase + 'marker_tsh.png'
                },
                coffee: {
                    icon: iconBase + 'marker_coffee.png'
                },
                dining: {
                    icon: iconBase + 'marker_dining.png'
                },
                shops: {
                    icon: iconBase + 'marker_shops.png'
                },
                nightlife: {
                    icon: iconBase + 'marker_nightlife.png'
                },
                sites: {
                    icon: iconBase + 'marker_sites.png'
                },
                other: {
                    icon: iconBase + 'marker_other.png'
                },
            };

            var markerGroups = {
                'tsh': [],
                'coffee': [],
                'dining': [],
                'nightlife': [],
                'shops': [],
                'sites': [],
            };

            var beaches = JSON.parse(tsh_arr);

            function setMarkers(map) {
                // Adds markers to the map.
                for (var i = 0; i < beaches.length; i++) {
                    var beach = beaches[i];


                    if (beach['place_type'] == 'tsh') {
                        var image = {
                            url: icons[beach['place_type']].icon,
                            size: new google.maps.Size(51, 68),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 68)
                        };
                    } else {
                        var image = {
                            url: icons[beach['place_type']].icon,
                            size: new google.maps.Size(18, 18),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(9, 9)
                        };

                    }


                    var marker = new google.maps.Marker({
                        position: {lat: beach['place_lat'], lng: beach['place_lng']},
                        map: map,
                        icon: image,
                        title: beach['place_title'],
                        type: beach['place_type']
                    });

                    if (!markerGroups[beach['place_type']]) markerGroups[beach['place_type']] = [];
                    markerGroups[beach['place_type']].push(marker);

                    var infowindow = new google.maps.InfoWindow({});

                    google.maps.event.addListener(marker, 'click', (function (marker, beach) {
                        return function () {
                            infowindow.setContent('<div class="place-marker-box">' +
                                '                           <h2 class="place-marker-title">' + beach['place_title'] + '</h2>' +
                                '<div class="place-marker-info content">' + decodeEntities(beach['place_short_desc']) + '</div>' +
                                '</div>');
                            infowindow.open(map, marker);
                        }
                    })(marker, beach));
/*
                    $('.map-type .tab-list a').on('click', function () {
                        var btn = $(this),
                            allBtn = btn.closest('.tab-list').find('a'),
                            markerArr = btn.data('types').split(',');

                            markerArr = markerArr.map(function (el) {
                                return el.trim();
                            });

                            if (!(btn.hasClass('active'))) {
                                allBtn.removeClass('active');
                                btn.addClass('active');

                                console.log(markerArr);

                                // for (var j = 0; j < markerArr.length; j++) {
                                    // console.log('------------' + j + '-----------');
                                    // console.log(markerArr[j]);

                                // $.each(markerGroups, function () {
                                //     $.each(this, function (name, value) {
                                //         console.log(name + '=' + value);
                                //     });
                                // });

                                // for (var i = 0; i < markerGroups.length; i++) {
                                //     var markers = markerGroups[i];
                                    console.log(markerGroups);
                                    // if () {
                                    //
                                    // }
                                    // for (var j = 0; j < markers.length; j++) {
                                    //     var marker = markerGroups[i][j];
                                    //     if (!marker.getVisible()) {
                                    //         marker.setVisible(true);
                                    //     } else {
                                    //         marker.setVisible(false);
                                    //     }
                                    // }


                                // }
                                    // console.log('------------END - ' + j + '-----------');
                                // }
                            }
                    });
*/
                }
            }

            initMap();


            // function toggleGroup() {
            //     // var typeArr = types.split(',');
            //     $('.map-type .tab-list a').on('click', function () {
            //        var btn = $(this),
            //            markerArr = btn.data('types').split(',');
            //
            //         console.log(markerArr);
            //
            //         for (var j = 0; j < markerArr.length; j++) {
            //             console.log(markerGroups[markerArr[j]]);
            //             for (var i = 0; i < markerGroups[markerArr[j]].length; i++) {
            //                 var marker = markerGroups[markerArr[j]][i];
            //                 if (!marker.getVisible()) {
            //                     marker.setVisible(true);
            //                 } else {
            //                     marker.setVisible(false);
            //                 }
            //             }
            //         }
            //     });
            //
            // }

            // toggleGroup();
        }
    })(jQuery);
});


