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
                            loop: true,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
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
                            loop: true,
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

        //for accordion
        $(function () {
            if ($('.accordion-box .accordion').length && $('.accordion-box .panel').length) {
                var accordion = $('.accordion-box .accordion');

                $(window).on('load', function () {
                    accordion.eq(2).addClass('active');
                    accordion.eq(2).next().slideDown();
                });

                accordion.on('click', function() {
                    $(this).toggleClass('active');
                    var panel = $(this).next();

                    if(panel.is(':visible')) {
                        panel.slideUp();
                    } else {
                        panel.slideDown();
                    }

                });
            }
        });

        //for popup
        $(function () {
            if (typeof $.fn.magnificPopup !== 'undefined') {
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
            }
        });

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
           if ($('.service-box').length) {
               $(window).on('load resize', function () {
                   var serviceBox = $('.service-box');

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