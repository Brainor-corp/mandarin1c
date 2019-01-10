<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage its34_brainMedia_v_2.0
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <div class="px-0">
        <?php
        include 'calculator.php';
        ?>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120823452-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-120823452-1');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter49228114 = new Ya.Metrika2({id: 49228114, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true});
                } catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2"); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/49228114" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript> <!-- /Yandex.Metrika counter -->

    <meta charset="utf-8">
    <!-- Required meta tags -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/ITS-new/img/fav-logo.png" type="image/x-icon">

<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/css/bootstrap/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ITS-new/plugins/fontawesome/css/all.css">
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/plugins/OwlCarousel/dist/assets/owl.carousel.min.css">-->
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/plugins/OwlCarousel/dist/assets/owl.theme.default.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ITS-new/css/general.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ITS-new/css/main-page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ITS-new/css/main-page-media.css">
<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/css/main-page-v4.css">-->
    <link href="<?php echo get_template_directory_uri(); ?>/ITS-new/fonts/Raleway/raleway.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/ITS-new/plugins/aos/css/aos.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- [if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!-- [if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css " rel=" stylesheet ">
    <script src=" https://cdn.jsdelivr.net/g/html5shiv @3.7 ""></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body class="main-site">
<!-- Header -->
<div class="container-fluid bg-white border-bottom poz-fixed" id="header-main-fixed">
    <div class="container nav-container px-0">
        <div class="row">
            <div class="col-xl-auto col mx-auto">
                <nav class="navbar navbar-expand-xl navbar-light px-0">
                    <div class="row w-100 d-xl-none d-lg-flex align-items-center">
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <a href="/">
                                    <div class="col-auto">
                                        <img class="img-fluid header-logo-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/logo_red1c.png" alt="">
                                    </div>
                                </a>
                                <div class="col-auto d-none d-md-block decoration-none">
                                    <a href="tel:+78442781050">+7(8442)78-10-50,</a><br>
                                    <a href="tel:+79616919960">+7(961)691-99-60</a>
                                </div>
                                <div class="col-auto d-none d-md-block">
                                    <button class="btn btn-danger header-btn-with my-4 my-xl-0" href="#" data-toggle="modal" data-target="#Modalfree">Консультация бесплатно</button>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="row align-items-center text-center">
                            <a href="/">
                                <div class="col-xl-auto col-1 d-none d-xl-block px-0">
                                    <img class="img-fluid mb-2 header-logo-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/logo_red1c.png" alt="">
                                </div>
                            </a>
                            <div class="col-xl-auto col-lg-12 margin-header-x text-center">
                                <nav class="nav d-xl-flex d-block">
                                    <a class="nav-link text-dark" href="<?php echo get_site_url(); ?>/about-us">О нас</a>
<!--                                    <a class="nav-link text-dark" href="--><?php //echo get_site_url(); ?><!--/products">Тарифы</a>-->
                                    <a class="nav-link text-dark" href="<?php echo get_site_url(); ?>/catalog">Каталог</a>
                                    <a class="nav-link text-dark" href="<?php echo get_site_url(); ?>/stati">Новости</a>
<!--                                    <a class="nav-link text-dark" href="--><?php //echo get_site_url(); ?><!--/calculator">Калькулятор</a>-->
                                    <a class="nav-link text-dark" href="<?php echo get_site_url(); ?>/contacts">Контакты</a>
                                </nav>
                            </div>
                            <div class="col-xl-auto col-lg-12 d-md-none d-block d-xl-block">
                                <button class="btn btn-danger header-btn-with my-4 my-xl-0 white-space fs-slider-button" href="#" data-toggle="modal" data-target="#Modalfree">Консультация бесплатно</button>
                            </div>
                            <div class="col-xl-auto col-12 margin-header-x mb-3 my-md-0 text-center d-md-none d-block d-xl-block decoration-none">
                                <a href="tel:+78442781050">+7(8442)78-10-50,</a><br>
                                <a href="tel:+79616919960">+7(961)691-99-60</a>
                            </div>
                            <div class="col-xl-auto col-12 text-center px-0">
                                <img class="img-fluid header-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/fran1c.png" alt="">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
