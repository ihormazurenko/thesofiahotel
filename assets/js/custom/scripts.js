jQuery(document).ready(function($) {
	// header fade
	$(function() {
	   var header = $('#header');
	   setTimeout(function(){
	   	header.addClass('show');
	   },800);
	});

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
    if (typeof SmoothScroll !== 'undefined') {
        var scroll = new SmoothScroll('.smooth-js', {
            speed: 750,
            easing: 'easeInQuad',
            offset: 130
        });
    }

	$(document).ready(function() {
        // for burger menu
        $('.mobile-menu-toggle, .mobile-menu-overlay').on('click', function(){
            $('.mobile-menu-toggle').toggleClass('active');
            $('.mobile-menu-wrap').toggleClass('showing');
            $(document.body).toggleClass('overflow');
        });

        //for slider
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

});