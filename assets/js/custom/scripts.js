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

    // Navigation order for mobile
    // revere the order of the boxes
    $(function(){
        if ($(window).width() < 641) {
           $('.burger-inner-box .left-box').insertAfter($('.burger-inner-box .right-box'));
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


        //for burger menu and modal
        function toggleMenu(){
            var modalId = '#burger-menu',
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

            if (mainHeader.hasClass('show-burger')) {
                mainHeader.siblings().find('a, button, input, textarea').attr({
                    'aria-hidden' : 'true',
                    'tabindex' : '-1'
                });
                $('.btn-jump-to-content').attr({
                    'aria-hidden' : 'true',
                    'tabindex' : '-1'
                });
            } else {
                mainHeader.siblings().find('a, button, input, textarea').removeAttr('aria-hidden tabindex');
                $('.btn-jump-to-content').removeAttr('aria-hidden tabindex');
            }
        }
        $('.open-tsh-popup').on('click', function(e){
            e.preventDefault();
            $(this).focus();

            toggleMenu();
        });

        //if esc key is clicked and the menu is open
        $(document).on('keyup',function(evt) {
            if (evt.keyCode == 27) {
                var mainHeader = $('#header-main');
                if (mainHeader.hasClass('show-burger')) {
                    toggleMenu();
                }
            }
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
            setTimeout(function () {
                $('.ui-datepicker').find('a[href="#"]').on('click', function (e) {
                    e.preventDefault();
                });
            }, 1000);

/*
            $(function () {
                var datepcikerDiv = $('#ui-datepicker-div');

                $("#check-in").datepicker({
                    showOn: 'both',
                    buttonText: 'Launch Check in date picker',
                    defaultDate: "0",
                    dateFormat: "mm/dd/yy",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    onSelect: function (selectedDate) {
                        datepcikerDiv.attr({
                            'aria-hidden' : 'false',
                            'aria-expanded' : 'true'
                        });
                        $("#check-out").datepicker("option", "minDate", selectedDate);

                        $("#datepickerMessage").text(
                            "selected "
                            + $.datepicker.formatDate ("DD d MM yy", new Date(date))
                        );
                    },
                    onClose: function () {
                        datepcikerDiv.attr({
                            'aria-hidden' : 'true',
                            'aria-expanded' : 'false'
                        });
                        $(this).closest('li').next().find('input, button').focus();
                    }
                });
                $("#check-out").datepicker({
                    showOn: 'both',
                    buttonText: 'Launch Check out date picker',
                    defaultDate: "+1w",
                    dateFormat: "mm/dd/yy",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1,
                    onSelect: function (selectedDate) {
                        datepcikerDiv.attr({
                            'aria-hidden' : 'false',
                            'aria-expanded' : 'true'
                        });
                        $("#check-in").datepicker("option", "maxDate", selectedDate);

                        // var message = $('.ui-datepicker-calendar').find('.ui-state-active').text() +
                        //     ' ' + $('.ui-datepicker-month').find('[selected]').text() +
                        //     ' ' + $('.ui-datepicker-year').find('[selected]').text();
                        // console.log(message);
                    },
                    onClose: function () {
                        datepcikerDiv.attr({
                            'aria-hidden' : 'true',
                            'aria-expanded' : 'false'
                        });
                        $(this).closest('li').next().find('input, button').focus();
                    }
                });


/*
                    var $date = $("#check-in");
                    var $datepicker = null;
                    var visible = false;

                    $.datepicker.setDefaults({
                        showOn: "both",
                        buttonText: 'Launch date picker',
                        dateFormat: "mm/dd/yy",
                        changeMonth: true,
                        changeYear: true,
                        numberOfMonths: 1,
                        beforeShow: function () {
                            visible = true;
                        },
                        onClose: function () {
                            visible = false;
                            $(this).closest('li').next().find('input, button').focus();
                        }
                    });

                    $date.datepicker({
                        buttonText: 'Launch Check in date picker',
                        defaultDate: "0",
                        onSelect: function (date) {
                            datepcikerDiv.attr({
                                'aria-hidden' : 'false',
                                'aria-expanded' : 'true'
                            });
                            $("#datepickerMessage").text(
                                "selected "
                                + $.datepicker.formatDate("DD d MM yy", new Date(date))
                            );
                            $("#check-out").datepicker("option", "minDate", selectedDate);
                        }, // onSelect
                        onClose: function () {
                            datepcikerDiv.attr({
                                'aria-hidden' : 'true',
                                'aria-expanded' : 'false'
                            });
                        }
                    });


                    $datepicker = $date.datepicker("widget");
                    if ($datepicker.length == 0) {
                        return false;
                    }


// extracts currently highlighted date from calendar (including week day) and sticks it in the date field on arrow press
                    $date.on ("keydown", function (e) {
                        if (! visible) return true;
                        var key = e.keyCode;
                        var message, date, day, month, year, $datepicker;
                        $datepicker = $(this).datepicker("widget");

                        if (key >= 37 && key <= 40 && ! e.ctrlKey) {
                            e.ctrlKey = true;
                            $date.trigger(e);
                            return false;
                        } // if

                        if (key >= 33 && key <=40) {
                            day = $datepicker.find(".ui-state-hover").text();
                            month = $datepicker.find(".ui-datepicker-month").text();
                            year = $datepicker.find(".ui-datepicker-year").text();
                            date = new Date(month + " " + day + " " + year);
                            message = $.datepicker.formatDate("DD d MM yy", date);
                            $("#datepickerMessage").text(message);
                            return false;
                        } // if


                        return true;
                    }); // keydown


            }); */
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
            $('.accordion-box .accordion a').on('click', function (e) {
                e.preventDefault();
            });

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

                // if (typeof SmoothScroll !== 'undefined') {
                //     var scroll = new SmoothScroll('.smooth-accordion-js', {
                //         speed: 750,
                //         easing: 'easeInQuad',
                //         offset: function (anchor, toggle) {
                //
                //             setTimeout(function () {
                //                 if (toggle.classList.closest('.my-header-nav')) {
                //                     return 25;
                //                 } else {
                //                     return 50;
                //                 }
                //
                //                 console.log(anchor.offset().top);
                //             }, 400);
                //             // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
                //             // This example is a function, but you could do something as simple as `offset: 25`
                //
                //             // An example returning different values based on whether the clicked link was in the header nav or not
                //         },
                //     });
                // }
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
                        focus: '.mfp-close',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        },
                        callbacks: {
                            open: function() {
                                $el = $('.mfp-gallery');
                                if ($el.length) {
                                    $el.attr({
                                        'role' : 'dialog',
                                        'aria-modal' : 'true',
                                        'aria-label' : 'gallery'
                                    });
                                }
                            }
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

                $('.gallery-type .tab-list a').removeClass('active').attr('aria-selected','false');
                $(this).addClass('active').attr('aria-selected','true');

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
            load_more_box   = load_more.parent('.load-more-box'),
            insert_box      = $('#insert-list');

        if (load_more.length) {
            load_more.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                load_more_box.addClass('loading');

                var data = {
                    'action'    : 'load_more',
                    'query'     : newQuery,
                    'page'      : current_page,
                    'template'  : insert_box.hasClass('service-list') ? 'news' : 'default',
                };

                $.ajax({
                    url: load_posts_var.load_post_ajaxurl,
                    data: data,
                    type: 'POST',
                    dataType: 'html',
                    success: function (result) {
                        if( result) {
                            current_page++;
                            insert_box.append(result);
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

        //weather module for screen readers
        $(function(){
            $('.current_text').addClass('sr-only'); 
            $('i.wi').attr('aria-hidden', "true"); 

        });

        //newsletter form features
        $(function(){
            $('.subscribe-form-list input').on('keydown', function() {
                $(this).siblings('label').addClass('shift');
            });              
            $(".wpcf7 input[type=text], .wpcf7 input[type=email]").on('keydown', function() {
                $(this).parent().parent().find('label').addClass('shift');
            }); 
            $(".wpcf7 input[type=date], .wpcf7 select:not(#rq-future-events)").parent().parent().find('label').addClass('shift');

            $('.wpcf7 textarea').on('keydown', function() {
                $(this).parent().parent().find('label').addClass('shift');
            }); 
        });



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