jQuery(function () {

    jQuery(document).on('click', '.hamburger', function (e) {
        e.preventDefault();

        var nav = $(this).parents('.mobile-menu').find('.hidden-menu');
        nav.removeClass('d-none');

        $(this).addClass('is-active');
    }).on('click', '.is-active', function (e) {
        e.preventDefault();

        var nav = $(this).parents('.mobile-menu').find('.hidden-menu');
        nav.addClass('d-none');

        $(this).removeClass('is-active');

    });

    jQuery(document).on('click', '.btn-default', function (e) {
        e.preventDefault();

        //text



        //
        // var tarifdef = jQuery(this).parents('.tarif').find('.d-none');
        // tarifdef.removeClass('d-none').addClass('tarif-prof');




        //btn
        var btndef = jQuery(this).parents('.tarif').find('.btn-change');
        btndef.addClass('btn-default').removeClass('btn-change');

        // var tarifprof = jQuery(this).parents('.tarif').find('.tarif-prof');
        // tarifprof.addClass('d-none').removeClass('tarif-prof');




        jQuery(this).removeClass('btn-default').addClass('btn-change');

    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin: 10,
        nav:true,

        navText: ["<i class='fa fa-chevron-left slide-nav slide-previous' aria-hidden='true'></i>","<i class='fa fa-chevron-right slide-nav slide-next' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items:1
            },
            300:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

});