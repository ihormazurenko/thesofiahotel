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
                    center: {lat: tsh_base_lat, lng: tsh_base_lng},
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
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e6d8dc"
                                },
                                {
                                    "visibility": "on"
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
                    icon: iconBase + 'marker_tsh.svg'
                },
                coffee: {
                    icon: iconBase + 'marker_coffee.svg'
                },
                dining: {
                    icon: iconBase + 'marker_dining.svg'
                },
                shops: {
                    icon: iconBase + 'marker_shops.svg'
                },
                nightlife: {
                    icon: iconBase + 'marker_nightlife.svg'
                },
                sites: {
                    icon: iconBase + 'marker_sites.svg'
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

            var hash = window.location.hash;

            var beaches = JSON.parse(tsh_arr);

            function setMarkers(map) {
                // Adds markers to the map.
                for (var i = 0; i < beaches.length; i++) {
                    var beach = beaches[i];


                    if (beach['place_type'] == 'tsh') {
                        var image = {
                            url: icons[beach['place_type']].icon,
                            scaledSize: new google.maps.Size(50, 69),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 69)
                        };
                    } else {
                        var image = {
                            url: icons[beach['place_type']].icon,
                            scaledSize: new google.maps.Size(20, 20),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(10, 10)
                        };

                    }

                    var raitingStr = '';

                    var marker = new google.maps.Marker({
                        position: {lat: beach['place_lat'], lng: beach['place_lng']},
                        map: map,
                        icon: image,
                        title: beach['place_title'],
                        type: beach['place_type']
                    });

                    if (!markerGroups[beach['place_type']]) markerGroups[beach['place_type']] = [];
                    markerGroups[beach['place_type']].push(marker);

                    var infowindow = new google.maps.InfoWindow({
                        maxWidth: 340
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, beach) {
                        return function () {
                            var level = '';
                            if (beach['price_level']) {
                                level = "$".repeat(beach['price_level'])
                            }

                            if (beach['rating'] && beach['review_count'] && beach['place_url']) {
                                var starTotal = 5,
                                    starPercentage = (beach['rating'] / starTotal) * 100;

                                raitingStr = '<div class="place-ratings-wrap"><a href="' + beach['place_url'] + '"  class="plan-review-link" title="' + beach['place_title'] + '" target="_blank" rel="nofollow"><span class="rating-count">' + beach['rating'] + '</span><span class="rating-box" data-rating="' + beach['rating'] + '"><span class="stars-outer"><span class="stars-inner" style="width: '+starPercentage+'%"></span></span></span><span>' + beach['review_count'] + ' reviews. '+ level +'</span></a></div>'
                            } else {
                                raitingStr = '';
                            }

                            infowindow.setContent('<div class="place-marker-box">' +
                                '<div class="place-icon-box">' + getTypeIcon(beach['place_type']) + '</div>' +
                                '<h2 class="place-marker-title">' + beach['place_title'] + '</h2>' +
                                '<div class="place-marker-info content">' + decodeEntities(beach['place_short_desc']) + '</div>' +
                                raitingStr +
                                '</div>');
                            infowindow.open(map, marker);
                        }
                    })(marker, beach));
                }

                if (hash) {
                    $(window).on('load', function () {
                        $('.map-type .tab-list a[href='+hash+']').trigger('click');
                    })
                }

                //show/hide some markers
                $('.map-type .tab-list a').on('click', function () {
                    var btn = $(this),
                        allBtn = btn.closest('.tab-list').find('a');

                    if (!(btn.hasClass('active'))) {

                        if (infowindow) {
                            infowindow.close();
                        }

                        allBtn.removeClass('active');
                        btn.addClass('active');

                        var markerArr = btn.data('types').split(',');

                        markerArr = markerArr.map(function (el) {
                            return el.trim();
                        });

                        $.each(markerGroups, function (key, value) {

                            if ($.inArray(key, markerArr) !== -1) {
                                for (var i = 0; i < markerGroups[key].length; i++) {
                                    markerGroups[key][i].setVisible(true);
                                }
                            } else {
                                for (var i = 0; i < markerGroups[key].length; i++) {
                                    markerGroups[key][i].setVisible(false);
                                }
                            }

                        });
                    }


                });
            }

            initMap();
        }
    })(jQuery);

    function getTypeIcon(type) {
        var icon = '';

        switch (type) {
            case 'coffee':
                icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.02 20.05" class="place-icon-coffee"><defs><style>.cls-1{fill:#739193;}</style></defs><title>icon-coffe</title><g id="Слой_2" data-name="Слой 2"><g id="Artwork"><g id="khhnPH"><path class="cls-1" d="M21.12.85a9.67,9.67,0,0,1,2.2.8,2.72,2.72,0,0,1,1,.8c.33.45.3.7-.14,1a2.79,2.79,0,0,0-.75.82.48.48,0,0,0-.05.52A4.16,4.16,0,0,1,24.74,4a3.24,3.24,0,0,1,3.12.19.12.12,0,0,0,.19,0c.16-.19.3-.08.44,0A1.87,1.87,0,0,1,29,5V6.13C28.29,8,26.7,8.65,24.9,9a7.37,7.37,0,0,0-1.46.34,1.15,1.15,0,0,0-.48.3c-.17.2-.25.38,0,.6a.78.78,0,0,1,.22.7.71.71,0,0,1-.45.66.79.79,0,0,1-.83-.14,4.62,4.62,0,0,1-.48-.64c-.1.18-.2.34-.28.5a7,7,0,0,1-.66,1c-.08.11-.26.2-.19.34s.23.09.35.11a25.76,25.76,0,0,1,2.92.48,9.83,9.83,0,0,1,2.53.81,2.64,2.64,0,0,1,.46.27.75.75,0,0,1,0,1.37c-.38.24-.79.43-1.18.64a30,30,0,0,1-5.52,2.24c-.43.13-.89.19-1.1.68-.07.14-.26.15-.41.2a15.88,15.88,0,0,1-3.22.5,24.5,24.5,0,0,1-6.4-.36,5.68,5.68,0,0,1-1-.31c-.17-.07-.36-.15-.42-.32-.15-.43-.52-.54-.88-.66a36.06,36.06,0,0,1-4-1.62,12.52,12.52,0,0,1-2-1.28.69.69,0,0,1,0-1.19,3.6,3.6,0,0,1,1.29-.66,21.93,21.93,0,0,1,4.22-.85c.29,0,.35-.11.16-.34a10.19,10.19,0,0,1-1.75-4q-.39-1.53-.75-3.06A3.93,3.93,0,0,0,2.18,3.15c-.42-.34-.4-.71,0-1A7.87,7.87,0,0,1,4.94.87,23.36,23.36,0,0,1,10.57,0a44.11,44.11,0,0,1,8.67.42Zm1,7.73a3.56,3.56,0,0,1,2.09-.66,4.45,4.45,0,0,0,2.07-.76A1.65,1.65,0,0,0,27.13,6,1,1,0,0,0,26,4.78a1.2,1.2,0,0,0-1.07.7,1.67,1.67,0,0,1-.89.9.6.6,0,0,0-.34.39c-.18.58-.47.72-1,.49-.17-.07-.24,0-.27.13C22.34,7.75,22.26,8.11,22.16,8.58Z"/></g></g></g></svg>';
                break;
            case 'dining':
                icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.48 15.37" class="place-icon-dining"><defs><style>.cls-1{fill:#6e3d50;}</style></defs><title>icon-restaurant</title><g id="Слой_2" data-name="Слой 2"><g id="Artwork"><path class="cls-1" d="M2.53,2.44C6.71,4,13.1,5.84,23.64,5.84c.74,0,1-.12,1.21-.64,2.61-5.95,15.95-1.82,23-1.82,3.91,0,5.64-.8,5.64-1.79S50.75,0,48,0C40.43,0,25,1,2.89.05.36-.12.09.19,0,.58S-.07,1.45,2.53,2.44Z"/><path class="cls-1" d="M53.4,11.18c-.33-.58-1.33-1.42-4.79-1.36-7.2.12-18.3,2-25,.53-1.84-.39-2.74-.62-3.43-2-.39-.74-.72-.85-3.91-.68-2.72.15-6.55.39-10.53,1l-.11,0a.09.09,0,0,0-.08.09v0a.09.09,0,0,0,.08.09h.11c.26,0,6.77,0,9.81,0,.29,0,.62.1.62.48a.51.51,0,0,1-.55.53c-3,.12-8.74.36-9.88.44h-.1a.11.11,0,0,0-.09.1v0a.09.09,0,0,0,.09.09h.1c1.15.08,7.08.32,10.09.44.27,0,.49.14.49.45s-.29.42-.53.42h0c-3,.12-8.91.35-10,.44h-.1a.09.09,0,0,0-.09.09v0a.1.1,0,0,0,.09.09h.1c1.13.09,6.8.32,9.83.44.32,0,.6.16.6.53s-.31.48-.6.49c-3,0-9.56,0-9.83,0H5.6a.11.11,0,0,0-.08.1v.05a.1.1,0,0,0,.08.09h.11c4,.59,7.81.83,10.53,1,3.19.17,3.52.07,3.91-.67.66-1.42,1.65-1.63,3.43-2,6.83-1.45,17.83.41,25,.53,3.46.06,4.46-.78,4.79-1.37a.61.61,0,0,0,.08-.3A.67.67,0,0,0,53.4,11.18Z"/></g></g></svg>';
                break;
            case 'nightlife':
                icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.14 27.37" class="place-icon-nightlife"><defs><style>.cls-1{fill:#4f5051;}</style></defs><title>icon-area_1</title><g id="Слой_2" data-name="Слой 2"><g id="Artwork"><path class="cls-1" d="M8.07,5.14a42.1,42.1,0,0,1,7,.55c1.17.24,1.31.72.7,1.54-1.48,2-5.09,6.78-6.34,8.53a4.37,4.37,0,0,0-.81,2.63,21.16,21.16,0,0,0,0,3.69A3.77,3.77,0,0,0,9,23.78c1.22.06,4.33.56,4.31,1.79s-2.77,1.8-5.26,1.8-5.24-.61-5.25-1.8,3.08-1.73,4.3-1.79a3.64,3.64,0,0,0,.41-1.7,21.53,21.53,0,0,0,0-3.69,4.38,4.38,0,0,0-.82-2.63C5.44,14,1.83,9.2.36,7.23c-.62-.82-.47-1.3.69-1.54A42.1,42.1,0,0,1,8.07,5.14Z"/><polyline class="cls-1" points="6.44 10.12 13.99 0 14.32 0.3 9.09 7.84"/></g></g></svg>';
                break;
            case 'shops':
                icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.75 25.75" class="place-icon-shops"><defs><style>.cls-1{fill:#929497;}</style></defs><title>icon-shop</title><g id="Слой_2" data-name="Слой 2"><g id="Artwork"><path class="cls-1" d="M15.75,5.7,12.1,5C11.77,2.09,10.7.1,9.32,0A1.64,1.64,0,0,0,8.06.49,3.15,3.15,0,0,0,7.61,1,1.58,1.58,0,0,0,7.19,1a1.62,1.62,0,0,0-1.25.49,4.57,4.57,0,0,0-1.12,2l-.9-.18C2.84,3.8,1.74,4.14,0,5L.4,17.64.25,21.4l12.09,4.35,3.23-2.24-.16-3.3ZM6.9,3.85a7.55,7.55,0,0,1,.81-2.46,4.61,4.61,0,0,1,1.72,3ZM8.25.69A1.36,1.36,0,0,1,9.3.28c1.22.08,2.19,2,2.52,4.61L9.73,4.45A5,5,0,0,0,7.86,1.16,2.63,2.63,0,0,1,8.25.69Zm-2.12,1a1.39,1.39,0,0,1,1-.42,1.36,1.36,0,0,1,.29.06A8,8,0,0,0,6.63,3.8L5.09,3.49A4.31,4.31,0,0,1,6.13,1.64Z"/></g></g></svg>';
                break;
            case 'sites':
                icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.82 21.63" class="place-icon-sites"><defs><style>.cls-1{fill:#9b7f50;}</style></defs><title>icon-photo</title><g id="Слой_2" data-name="Слой 2"><g id="Artwork"><path class="cls-1" d="M20.29,4.59c0-.2,0-.37,0-.54a.67.67,0,0,1,.76-.76H24.8a.65.65,0,0,1,.74.74V4.6c.62,0,1.2,0,1.79,0a1.4,1.4,0,0,1,1.46,1.09,2,2,0,0,1,0,.34V20.19a1.38,1.38,0,0,1-1.44,1.44h-26A1.38,1.38,0,0,1,0,20.21V6A1.36,1.36,0,0,1,1.42,4.6h2a.28.28,0,0,0,.33-.23C4.22,3,4.69,1.65,5.13.28A.34.34,0,0,1,5.51,0h6a.33.33,0,0,1,.38.28c.45,1.37.91,2.73,1.37,4.09.05.15.09.23.28.23h6.75Zm-11.76,2A6.58,6.58,0,0,0,2,13.13a6.65,6.65,0,0,0,6.38,6.53,6.66,6.66,0,0,0,6.73-6.44A6.6,6.6,0,0,0,8.53,6.57Zm14.4,0H20.39a.67.67,0,0,0-.74.75c0,.54,0,1.08,0,1.62s.23.9.89.9H25.3a1.23,1.23,0,0,0,.27,0,.65.65,0,0,0,.62-.7V7.31a.67.67,0,0,0-.75-.74Z"/><path class="cls-1" d="M13.75,13.11A5.25,5.25,0,1,1,8.63,7.85,5.27,5.27,0,0,1,13.75,13.11Z"/></g></g></svg>';
                break;
        }

        return icon;
    }
});


