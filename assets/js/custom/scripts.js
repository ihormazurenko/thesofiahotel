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
                offset: 130
            });
        }
    });

	$(document).ready(function() {
        // for burger menu
        $('.menu-toggle').on('click', function(){
            $('.menu-toggle').toggleClass('active');
            $('#header-main').toggleClass('show-burger');
            $(document.body).toggleClass('overflow');
        });



        //for slider
        $(function () {
            if (typeof Swiper !== 'undefined') {
                if ($('.inner-slider .swiper-container').length) {

                    var innerSliders = $('.inner-slider .swiper-container');

                    innerSliders.each(function (i) {
                        new Swiper(innerSliders.eq(i), {
                            effect: 'fade',
                            loop: true,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        });
                    });
                }
            }
        });

        //for nicescroll
        $(function () {
            if (typeof NiceScroll !== 'undefined') {
                if ($('.section-two-columns .content-box').length) {
                    setTimeout(function () {
                        $('.section-two-columns .content-box').niceScroll({
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
                        // anchorNavHeight = anchorNav.outerHeight();

                    // if (anchorNav.length) {
                    //     if (anchorNav.hasClass('.details')) {
                    //         var anchorNavOffset = anchorNav.offset().top - 40;
                    //     } else {
                    //         var anchorNavOffset = anchorNav.offset().top;
                    //     }
                    // }

                    // if (currentPos > anchorNavOffset) {
                    //     setTimeout(function () {
                    //         if (!(anchorNav.hasClass('affix'))) {
                    //             anchorNav.addClass('affix');
                    //             anchorNav.next().css('margin-top', anchorNavHeight);
                    //         }
                    //     }, 500);
                    // }

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

                                //for anchor nav
                                // if (anchorNav.length) {
                                //     var anchorNavTrigger = anchorNavOffset - 65;
                                //
                                //     if (top < anchorNavTrigger) {
                                //         if (anchorNav.hasClass('affix')) {
                                //             anchorNav.removeClass('affix');
                                //             anchorNav.next().css('margin-top', '0');
                                //         }
                                //     }
                                // }
                            } else {
                                // scroll DOWN
                                if (workTrigger == 1) {
                                    if (top > 2 * headerTrigger) {
                                        if (!(body.hasClass('direction-down'))) {
                                            body.removeClass('direction-up').addClass('direction-down');
                                        }
                                    }

                                    //for anchor nav
                                    // if (anchorNav.length) {
                                    //     var anchorNavTrigger = anchorNavOffset;
                                    //
                                    //     if (top > anchorNavTrigger) {
                                    //         if (!(anchorNav.hasClass('affix'))) {
                                    //             anchorNav.addClass('affix');
                                    //             anchorNav.next().css('margin-top', anchorNavHeight);
                                    //         }
                                    //     }
                                    // }
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

                                //for anchor nav
                                // if (anchorNav.length) {
                                //     var anchorNavTrigger = anchorNavOffset;
                                //
                                //     if (top < anchorNavTrigger) {
                                //         if (anchorNav.hasClass('affix')) {
                                //             anchorNav.removeClass('affix');
                                //             anchorNav.next().css('margin-top', '0');
                                //         }
                                //     }
                                // }
                            } else {
                                // scroll DOWN
                                if (workTrigger == 1) {
                                    //for main nav
                                    if (top > 2 * headerTrigger) {
                                        if (!(body.hasClass('direction-down'))) {
                                            body.removeClass('direction-up').addClass('direction-down');
                                        }
                                    }

                                    //for anchor nav
                                    // if (anchorNav.length) {
                                    //     var anchorNavTrigger = anchorNavOffset;
                                    //
                                    //     if (top > anchorNavTrigger) {
                                    //         if (!(anchorNav.hasClass('affix'))) {
                                    //             anchorNav.addClass('affix');
                                    //             anchorNav.next().css('margin-top', anchorNavHeight);
                                    //         }
                                    //     }
                                    // }
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
                }, 50);
            });
        }

        scrollEffects();
	});

});