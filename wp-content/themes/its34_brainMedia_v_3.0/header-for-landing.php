<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage its34_brainMedia_v_2.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Итс</title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/ITS-new/img/logo.png" type="image/x-icon">

<!--    <link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/css/bootstrap/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ITS-new/css/landing-page.css">
    <link href="<?php echo get_template_directory_uri(); ?>/ITS-new/fonts/Raleway/raleway.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/ITS-new/plugins/aos/css/aos.css" rel="stylesheet">

</head>
<body class="raleway">


<!--шапка-->
<div class="container-fluid bg-white border-bottom poz-fixed" id="header-main-fixed">
    <div class="container nav-container px-0">
        <div class="row">
            <div class="col-xl-auto col mx-auto">
                <nav class="navbar navbar-expand-xl navbar-light px-0">
                    <div class="row w-100 d-xl-none d-lg-flex align-items-center">
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img-fluid header-logo-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/logo_red1c.jpg" alt="">
                                </div>
                                <div class="col-auto d-none d-md-block decoration-none">
                                    <a class="text-dark" href="tel:+78442781050">+7(8442)78-10-50,</a><br>
                                    <a class="text-dark" href="tel:+79616919960">+7(961)691-99-60</a>
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
                                <div class="col-xl-auto col-1 d-none d-xl-block">
                                    <img class="img-fluid my-2 header-logo-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/logo_red1c.jpg" alt="">
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
                                <button class="btn btn-danger header-btn-with my-4 my-xl-0" href="#" data-toggle="modal" data-target="#Modalfree">Консультация бесплатно</button>
                            </div>
                            <div class="col-xl-auto col-12 margin-header-x mb-3 my-md-0 text-center d-md-none d-block d-xl-block decoration-none">
                                <a class="text-dark" href="tel:+78442781050">+7(8442)78-10-50,</a><br>
                                <a class="text-dark" href="tel:+79616919960">+7(961)691-99-60</a>
                            </div>
                            <div class="col-xl-auto col-12 text-center">
                                <img class="img-fluid header-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/fran1c.png" alt="">
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--шапка-->

