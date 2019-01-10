$(document).ready(function () {
    $('body').scrollspy({target: '#HeadNavbar'});
    // Фикмированная шапка при скролле
    $("#header-main-fixed").removeClass("default");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('#header-main-fixed').addClass("boxshadow", "d-none").fadeIn();
        }
        else if ($(this).scrollTop() < 1) {
            $('#header-main-fixed').removeClass("boxshadow");
        }
    });
});