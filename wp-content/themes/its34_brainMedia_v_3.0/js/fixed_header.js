$(document).ready(function () {
    $('body').scrollspy({target: '#navbarSupportedContent'});
    // Фикмированная шапка при скролле
    $("#header-main-fixed").removeClass("default");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            $('#header-main-fixed').addClass("poz-fixed","d-none").fadein();
        }
        else if ($(this).scrollTop() < 1000) {
            $('#header-main-fixed').removeClass("poz-fixed");
        }
    });
});
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#header-landing-fixed').addClass("poz-fixed");
        }
        else if ($(this).scrollTop() < 0) {
            $('#header-landing-fixed').removeClass("poz-fixed");
        }
    });
});