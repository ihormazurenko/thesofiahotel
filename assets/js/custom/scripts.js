jQuery(document).ready(function($) {
	// header fade
	// $(function() {
	//    var header = $('#header');
	//    setTimeout(function(){
	//    	header.addClass('show');
	//    },800);
	// });

	//header background on scroll
	var header = $('#header');
	$(window).on('scroll', function() {
	   var st2 = $(this).scrollTop();
		   		
	   if (st2 > 0) {
	      // console.log(st2);
	      header.addClass('scrolling');
	      
	   } else {
	   	header.removeClass('scrolling');
	   }

	});


    // for smooth scroll
    $(function () {
        if (typeof SmoothScroll !== 'undefined') {
            var scroll = new SmoothScroll('.smooth-js', {
                speed: 750,
                easing: 'easeInQuad',
                offset: 150
            });
        }
    });

	$(document).ready(function() {
        // for placeholder link
        function prevent(){
            $('.prevent, .btn-modal, a[href="#"]').on('click touch', function(event){
                event.preventDefault();
            });
        }

        // for empty link
        prevent();


        // for burger menu
        // $('.menu-toggle').on('click', function(){
        //     $('.menu-toggle').toggleClass('active');
        //     $('#header-main').toggleClass('show-burger');
        //     $(document.body).toggleClass('overflow');
        // });

        //for burger menu and modal
        $('.open-tsh-popup').on('click', function(e){
            e.preventDefault();

            var modalId = $(this).attr('href'),
                mainHeader = $('#header-main');

            if (mainHeader.hasClass('show-burger')) {
                modalId = mainHeader.find('.menu-toggle').data('open');
                mainHeader.find('[data-open]').data('open', '');
            } else {
                mainHeader.find('[data-open]').data('open', modalId);
            }

            $('.menu-toggle').toggleClass('active');
            mainHeader.toggleClass('show-burger');
            $(modalId).toggleClass('show-tsh-popup');
            $(document.body).toggleClass('overflow');
        });

        //for slider
        $(function () {
            if (typeof Swiper !== 'undefined') {
                //for inner slider
                if ($('.inner-slider .swiper-container').length) {

                    var innerSliders = $('.inner-slider .swiper-container');

                    innerSliders.each(function (i) {
                        new Swiper(innerSliders.eq(i), {
                            effect: 'fade',
                            loop: false,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    });
                }

                //for banner slider
                if ($('.banner-slider .swiper-container').length) {

                    var bannerSliders = $('.banner-slider .swiper-container');

                    bannerSliders.each(function (i) {
                        new Swiper(bannerSliders.eq(i), {
                            effect: 'fade',
                            loop: false,
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true
                            },

                        });
                    });
                }

                //for single slider
                if ($('.single-slider:not(.small) .swiper-container').length) {
                    var singleSliders = $('.single-slider:not(.small) .swiper-container');

                    singleSliders.each(function () {
                        new Swiper($(this), {
                            slidesPerView: 4,
                            spaceBetween: 0,
                            freeMode: true,
                            freeModeSticky: true,
                            loop: false,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            breakpoints: {
                                1024: {
                                    slidesPerView: 3,
                                },
                                768: {
                                    slidesPerView: 2,
                                },
                                480: {
                                    slidesPerView: 1,
                                }
                            }
                        });
                    });
                }

                if ($('.single-slider.small .swiper-container').length) {
                    var singleSliders = $('.single-slider.small .swiper-container');

                    singleSliders.each(function () {
                        new Swiper($(this), {
                            slidesPerView: 3.4,
                            spaceBetween: 0,
                            freeMode: true,
                            freeModeSticky: true,
                            centeredSlides: true,
                            loop: true,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            breakpoints: {
                                1024: {
                                    slidesPerView: 2.2,
                                },
                                768: {
                                    slidesPerView: 2,
                                    centeredSlides: false,
                                },
                                480: {
                                    slidesPerView: 1,
                                }
                            }
                        });
                    });
                }
            }
        });


        //for Book datepickers
        if (typeof jQuery.ui != 'undefined') {
            $(function () {
                $("#check-in").datepicker({
                    defaultDate: "0",
                    dateFormat: "mm/dd/yy",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    onSelect: function (selectedDate) {
                        console.log(selectedDate);
                        $("#check-out").datepicker("option", "minDate", selectedDate);
                    }
                });
                $("#check-out").datepicker({
                    defaultDate: "+1w",
                    dateFormat: "mm/dd/yy",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    onSelect: function (selectedDate) {
                        $("#check-in").datepicker("option", "maxDate", selectedDate);
                    }
                });
            });
        }


        //for nicescroll
        $(function () {
            if (typeof NiceScroll !== 'undefined') {
                if ($('.two-column-box .content-box').length) {
                    setTimeout(function () {
                        $('.two-column-box .content-box').niceScroll({
                            cursoropacitymin: 0.1,
                            cursoropacitymax: 0.8,
                            cursorcolor: "#62666a",
                            cursorwidth: "6px",
                            autohidemode: false,
                            scrollbarid: 'cursor-15px'
                        });
                    }, 50);
                }

                if ($('.burger-inner-wrap').length) {
                    setTimeout(function () {
                        $('.burger-inner-wrap').niceScroll({
                            cursoropacitymax: 0.8,
                            cursorcolor: "#62666a",
                            cursorwidth: "8px",
                            autohidemode: false,
                            scrollbarid: 'cursor-8px'
                        });
                    }, 50);
                }
            }
        });

        //for accordion
        $(function () {
            var accordion = $('.accordion-box .accordion');

            if (accordion.length && $('.accordion-box .panel').length) {

                $(window).on('load', function () {
                    var hash = window.location.hash;
                    if (hash.length) {
                        $('.accordion-box .panel'+hash).slideDown().attr('aria-hidden', 'false');
                        $('.accordion-box .panel'+hash).prev().addClass('active').find('a').attr('aria-expanded', 'true');
                    }
                });

                accordion.on('click', function() {

                    $(this).toggleClass('active');
                    var panel = $(this).next();

                    if(panel.is(':visible')) {
                        panel.slideUp().attr('aria-hidden', 'true');
                        $(this).find('a').attr('aria-expanded', 'false');
                    } else {
                        panel.slideDown().attr('aria-hidden', 'false');
                        $('.accordion-box .panel').not(panel).slideUp().prev().removeClass('active');
                        $('.accordion-box').find('a').attr('aria-expanded', 'false');
                        $(this).find('a').attr('aria-expanded', 'true');
                    }

                });
            }
        });


        //for popup
        if (typeof $.fn.magnificPopup !== 'undefined') {
            $(function () {
                if ($('.popup-gallery a > img').length) {
                    $('.popup-gallery').magnificPopup({
                        delegate: 'a',
                        type: 'image',
                        tLoading: 'Loading image #%curr%...',
                        mainClass: 'mfp-img-mobile',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        }
                    });
                }

                $('.popup-modal').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    focus: '#username',
                    modal: true
                });

                $(document).on('click', '.popup-modal-dismiss', function (e) {
                    e.preventDefault();
                    $.magnificPopup.close();
                });
            });
        }


        //for parralax
        $(function () {
            if ($('#parallax-container div').length) {
                function newBgPosition() {
                    let parent = document.getElementById('parallax-container');
                    let children = parent.getElementsByTagName('div');
                    for(let i = 0; i < children.length; i++) {
                        children[i].style.transform = 'translateY(-' + (window.pageYOffset * 0.8 / children.length) + 'px)';
                    }
                }

                window.addEventListener('load', newBgPosition, false);
                window.addEventListener('scroll', newBgPosition, false);
            }
        });

        //for read more
        $(function () {
           if ($('ul:not(.press) .service-box').length) {
               $(window).on('load resize', function () {
                   var serviceBox = $('ul:not(.press) .service-box');

                   serviceBox.each(function () {
                       var box = $(this),
                           content = box.find('.content'),
                           contentHeight = content.height(),
                           descBox = content.closest('.service-desc');

                       if (contentHeight > 160) {
                           descBox.addClass('show-read-more');
                       } else {
                           descBox.removeClass('show-read-more');
                       }
                   });
               });

               $('.read-more').on('click', function (e) {
                   e.preventDefault();

                   var btn = $(this),
                       parentBox = btn.prev('.service-desc');

                        if (parentBox.hasClass('less-more')) {
                            parentBox.removeClass('less-more');
                            btn.text('Read More');
                       } else {
                            parentBox.addClass('less-more');
                            btn.text('Less');
                       }

               })
            }
        });

        // for Isotope tabs
        if (typeof $.fn.isotope !== 'undefined' && $('.grid-isotope').length) {
            var hash = window.location.hash,
                item = '.gallery-type .grid-item';

            // init Isotope
            var $grid = $('.grid-isotope').isotope({
                itemSelector: item,
                layoutMode: 'fitRows'
            });

            // filter items on button click
            $('.gallery-type .tab-list').on('click', 'a', function () {
                var filterValue = $(this).attr('data-filter');

                if ($(this).attr('href') == '#') {
                    history.pushState("", document.title, window.location.pathname);
                }

                $('.gallery-type .tab-list a').removeClass('active');
                $(this).addClass('active');

                $(item).removeClass('width-50 width-66');
                var filterItem = (filterValue !== '*') ? item+filterValue : item;
                $(filterItem).each( function (i) {
                    i += 1;
                    var result = i % 7;
                    if (result == 0 || result == 6) {
                        $(this).addClass('width-50');
                    } else if (result == 4) {
                        $(this).addClass('width-66');
                    }
                });

                $grid.isotope({filter: filterValue});
            });

            if (hash) {
                $('.gallery-type .tab-list a[href='+hash+']').addClass('active').trigger('click');
            }
        }


        // ajax Load More button
        var load_more       = $('#load-more'),
            load_more_box   = load_more.parent('.load-more-box');
        if (load_more.length) {
            load_more.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                load_more_box.addClass('loading');

                var data = {
                    'action' : 'load_more',
                    'query'  : newQuery,
                    'page'   : current_page
                };
                $.ajax({
                    url: load_posts_var.load_post_ajaxurl,
                    data: data,
                    type: 'POST',
                    dataType: 'html',
                    success: function (result) {
                        if( result) {
                            current_page++;
                            $('#insert-list').append(result);
                            if (current_page == max_pages) {
                                load_more_box.remove();
                            } else {
                                load_more_box.removeClass('loading');
                            }
                        } else {
                            load_more_box.remove();
                        }
                    }
                });
            });
        }


        //header scroll effect
        function scrollEffects() {
            var $window = $(window),
                html = $('html'),
                body = $('body'),
                header = $('#header-main'),
                lastScrollTop = 0,
                delayHeight = 0,
                testCount = 0,
                workTrigger = 0;

            $window.on('load resize', function () {
                var currentPos = $window.scrollTop();

                body.removeClass('direction-up direction-down');
                header.removeClass('fixed');

                setTimeout(function () {
                    var windowWidth = $window.width(),
                        headerOffset = header.offset().top,
                        headerHeight = header.outerHeight();

                    if (windowWidth < 1025) {
                        // for mobile & tablet
                        var headerTrigger = headerOffset + headerHeight;

                        $window.unbind('scroll');
                        $window.on('scroll', function () {
                            var top = $window.scrollTop();

                            if (lastScrollTop > top) {
                                // scroll UP
                                if (top == 0 && top < 2 * headerTrigger) {
                                    if (body.hasClass('direction-up')) {
                                        body.removeClass('direction-up');
                                        header.removeClass('fixed');
                                    }
                                } else if (top != 0 && top > 2 * headerTrigger) {
                                    if (workTrigger == 1) {
                                        if (!(body.hasClass('direction-up'))) {
                                            body.removeClass('direction-down').addClass('direction-up');
                                        }
                                    }
                                }
                            } else {
                                // scroll DOWN
                                if (workTrigger == 1) {
                                    if (top > 2 * headerTrigger) {
                                        if (!(body.hasClass('direction-down'))) {
                                            body.removeClass('direction-up').addClass('direction-down');
                                        }
                                    }
                                }
                            }

                            if (testCount > delayHeight || testCount < -delayHeight) {
                                testCount = 0;
                                workTrigger = 1;
                            } else {
                                testCount = testCount + (top - lastScrollTop);
                                workTrigger = 0;
                            }

                            lastScrollTop = top;
                        });
                    } else {
                        //for desktop
                        var headerTrigger = headerOffset + headerHeight;

                        $window.unbind('scroll');
                        $window.on('scroll', function () {
                            var top = $window.scrollTop();

                            if (lastScrollTop > top) {
                                // scroll UP
                                //for main nav
                                if (top == 0 && top < 2 * headerTrigger) {
                                    if (body.hasClass('direction-up')) {
                                        body.removeClass('direction-up');
                                        header.removeClass('fixed');
                                    }
                                } else if (top != 0 && top > 2 * headerTrigger) {
                                    if (workTrigger == 1) {
                                        if (!(body.hasClass('direction-up'))) {
                                            body.removeClass('direction-down').addClass('direction-up');
                                        }
                                    }
                                }
                            } else {
                                // scroll DOWN
                                if (workTrigger == 1) {
                                    //for main nav
                                    if (top > 2 * headerTrigger) {
                                        if (!(body.hasClass('direction-down'))) {
                                            body.removeClass('direction-up').addClass('direction-down');
                                        }
                                    }
                                }
                            }

                            if (testCount > delayHeight || testCount < -delayHeight) {
                                testCount = 0;
                                workTrigger = 1;
                            } else {
                                testCount = testCount + (top - lastScrollTop);
                                workTrigger = 0;
                            }

                            lastScrollTop = top;
                        });
                    }
                }, 10);
            });
        }

        scrollEffects();
	});
});