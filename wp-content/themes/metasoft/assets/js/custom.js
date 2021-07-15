(function ($) {
    "use strict";

    $(document).ready(function () {
		
		// Slider
        $(".main-slider").owlCarousel({
            rtl: $("html").attr("dir") == 'rtl' ? true : false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 10000,
            margin: 0,
            loop: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            singleItem: true,
            transitionStyle: "fade",
            animateIn: 'pulse',
            animateOut: 'fadeOut'
        });

        // Header Slide items with animate.css
        var owl = $('.main-slider');
        owl.owlCarousel();
        owl.on('translate.owl.carousel', function (event) {
            $('.theme-slider .theme-slider-card').removeClass('animated').hide();
            $('.theme-slider .btn').removeClass('animated').hide();
        });

        owl.on('translated.owl.carousel', function (event) {
            $('.theme-slider .theme-slider-card').addClass('animated flipInX').show();
            $('.theme-slider .btn').addClass('animated fadeInUp').show();
        });
  
    });

}(jQuery));