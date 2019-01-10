<?php
/**
 * Главная v3.0
 * @package WordPress
 * @subpackage its34_brainMedia_v_3.0
 * Template Name: Главная v3.0
 */
?>

<!DOCTYPE html>
<html lang="en">

<body class="raleway">


<!--шапка-->
<?php get_header(); ?>
<!--шапка-->

<!--Слайдер-->
<div class="container-fluid margin-banner top-slider-container mb-3">
    <div class="container nav-containe">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="owl-carousel owl-theme slider-fixed-height">

                    <!--     Блок с фотокой               -->
                    <div class="h-100 v-100 px-3 py-4 slider-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/ITS-new/img/slider_back.png)">
                    <!--     Блок с фотокой               -->

                        <div class="w-100 h-100 border-white-transparent p-3">
                            <div class="w-100 h-100 bg-white-transparent p-3 text-center">
                                <h1 class="mt-4 slider-header">1С:Бизнес Старт</h1>
                                <h3 class="color-gold-dark mt-4"><strong>Облачная
                                        автоматизация бизнеса
                                        для начинающих предпринимателей.</strong></h3>
                                <a class="btn btn-danger header-btn-with mt-3 white-space fs-slider-button" href="/service1c">Попробовать бесплатно</a>
                            </div>
                        </div>
                    </div>

                    <!--     Блок с фотокой               -->
                    <div class="h-100 v-100 px-3 py-4 slider-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/ITS-new/img/slider_back.png)">
                    <!--     Блок с фотокой               -->

                        <div class="w-100 h-100 border-white-transparent p-3">
                            <div class="w-100 h-100 bg-white-transparent p-3 text-center">
                                <h1 class="mt-4 slider-header">1С:ГРМ</h1>
                                <h3 class="color-gold-dark mt-4"><strong>Месяц бесплатного использования</strong></h3>
                                <a class="btn btn-danger header-btn-with mt-3 white-space fs-slider-button" href="/service1c">Попробовать бесплатно</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-md-0 mt-3 decoration-none">
                <a href="/torgovoe-oborudovanie">
                    <div class="row">
                        <div class="col-12 pl-md-0 pl-3">

                            <!--     Блок с фотокой               -->
                            <div class="w-100 h-100 py-3 px-2 fz-top">
                                <!--     Блок с фотокой               -->

                                <div class="w-100 h-100 border-white-transparent p-3">
                                    <div class="w-100 h-100 bg-white-transparent p-3 text-center">
                                        <h5>Терминалы <br>Мобильные терминалы для приема банковских карт</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/torgovoe-oborudovanie">
                    <div class="row mt-3">
                        <div class="col-12 pl-md-0 pl-3">

                            <!--     Блок с фотокой               -->
                            <div class="w-100 h-100 py-3 px-2 fz-bottom">
                                <!--     Блок с фотокой               -->

                                <div class="w-100 h-100 border-white-transparent p-3">
                                    <div class="w-100 h-100 bg-white-transparent p-3 text-center">
                                        <h5>Онлайн-кассы <br>Компактные онлайн-кассы для магазинов, кафе, салонов</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Слайдер-->


<div class="container my-5">
    <div class="row">
        <div class="col align-self-center">
            <hr class="gold">
        </div>
        <div class="col-auto">
            <h1 class="font-weight-bold fs-headers-md">Наши услуги</h1>
        </div>
        <div class="col align-self-center">
            <hr class="gold">
        </div>
    </div>
</div>

<!--Сервисы-->
<div class="container services-container">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12 px-3 mb-3">
            <div class="border-gray py-3 px-1 service-block h-100">
                <div class="hidden-content w-100 h-100 p-2">
                    <div class="text-center decoration-none">
                        <?php
                        $post_slug = 'software';
                        $args = array('category_name' => 'services','tag_slug__and' => array($post_slug), 'post_type' => 'post', 'numberposts' => '5');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post): setup_postdata($post);
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="text-center decoration-none">
                        <a class="text-danger link-all-servises" href="/software">Все услуги</a>
                    </div>
                </div>
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/svg/desktop.svg" alt="">
<!--                    <i class="fas fa-desktop color-gray fa-3x"></i>-->
<!--                    <img class="img-fluid" src="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/img/services/car.png" alt="Автоюрист">-->
                </div>
                <div class="text-center mt-3 service-label">
                    <span><strong>Программное обеспечение</strong></span>
                </div>
                <div class="text-center mt-3">
                    <span class="text-center service-desk color-gray">
                        Универсальные решения <br>
                        Лицензии 1С:Предприятие
<!--                        1С:Зарплата и управление персоналом-->
<!--                        1С:Управление торговлей <br>-->
<!--                        1С: Бухгалтерия <br>-->
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 px-3 mb-3">
            <div class="border-gray py-3 px-1 service-block h-100">
                <div class="hidden-content w-100 h-100 p-2">
                    <div class="text-center decoration-none">
                        <?php
                        $post_slug = '1c-support';
                        $args = array('category_name' => 'services','tag_slug__and' => array($post_slug), 'post_type' => 'post', 'numberposts' => '5');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post): setup_postdata($post);
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="text-center decoration-none">
                        <a class="text-danger link-all-servises" href="/1c-support">Все услуги</a>
                    </div>
<!--                    <div class="text-center">-->
<!--                        <a class="btn bg-transparent border-gray hvr-sweep-to-right" href="№">Подробнее</a>-->
<!--                    </div>-->
                </div>
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/svg/cogs.svg" alt="">
<!--                    <i class="fas fa-cogs color-gray fa-3x"></i>-->
<!--                    <img class="img-fluid" src="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/img/services/court.png" alt="Автоюрист">-->
                </div>
                <div class="text-center mt-3 service-label">
                    <span><strong>Обслуживание 1С</strong></span>
                </div>
                <div class="text-center mt-3">
                    <span class="text-center service-desk color-gray">
                        Дистанционное обновление ПО 1С <br>
                        Линия консультаций
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 px-3 mb-3">
            <div class="border-gray py-3 px-1 service-block h-100">
                <div class="hidden-content w-100 h-100 p-2">
                    <div class="text-center decoration-none">
                        <?php
                        $post_slug = 'pc-support';
                        $args = array('category_name' => 'services','tag_slug__and' => array($post_slug), 'post_type' => 'post', 'numberposts' => '5');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post): setup_postdata($post);
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="text-center decoration-none">
                        <a class="text-danger link-all-servises" href="/pc-support">Все услуги</a>
                    </div>
<!--                    <div class="text-center">-->
<!--                        <a class="btn bg-transparent border-gray hvr-sweep-to-right" href="№">Подробнее</a>-->
<!--                    </div>-->
                </div>
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/svg/user.svg" alt="">
<!--                    <i class="far fa-user color-gray fa-3x"></i>-->
<!--                    <img class="img-fluid" src="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/img/services/car.png" alt="Автоюрист">-->
                </div>
                <div class="text-center mt-3 service-label">
                    <span><strong>Обслуживание ПК</strong></span>
                </div>
                <div class="text-center mt-3">
                    <span class="text-center service-desk color-gray">
                        Техническое обслуживание и ремонт компьютерной техники
<!--                        Установка и настройка сервера на основе ОС Linux-->
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 px-3 mb-3">
            <div class="border-gray py-3 px-1 service-block h-100">
                <div class="hidden-content w-100 h-100 p-2">
                    <div class="text-center decoration-none">
                        <?php
                        $post_slug = 'industry-solutions';
                        $args = array('category_name' => 'services','tag_slug__and' => array($post_slug), 'post_type' => 'post', 'numberposts' => '5');
                        $postslist = get_posts($args);
                        foreach ($postslist as $post): setup_postdata($post);
                            ?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="text-center decoration-none">
                        <a class="text-danger link-all-servises" href="/industry-solutions">Все услуги</a>
                    </div>
<!--                    <div class="text-center">-->
<!--                        <a class="btn bg-transparent border-gray hvr-sweep-to-right" href="№">Подробнее</a>-->
<!--                    </div>-->
                </div>
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/svg/hand-point-up.svg" alt="">
<!--                    <i class="fas fa-hand-point-up color-gray fa-3x"></i>-->
<!--                    <img class="img-fluid" src="--><?php //echo get_template_directory_uri(); ?><!--/ITS-new/img/services/court.png" alt="Автоюрист">-->
                </div>
                <div class="text-center mt-3 service-label">
                    <span><strong>Отраслевые решения</strong></span>
                </div>
                <div class="text-center mt-3">
                    <span class="text-center service-desk color-gray">
                        Учёт в ЖКХ
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--статусы-->
<div class="container-fluid statuses-container mt-4">
    <div class="container">
        <div class="row d-block">
            <div class="col-12 text-center mt-5">
                <h1 class="fs-headers-md">Наши статусы</h1>
            </div>
            <div class="row text-center status-row">
                <?php
                $args = array('category_name' => 'statusyi','tag'=>'', 'start-page-services' => 'post', 'numberposts' => '4');
                $postslist = get_posts($args);
                foreach ($postslist as $key => $post): setup_postdata($post);
                ?>
                <div class="col-lg-3 col-md-6 col-12 col-12 my-md-4 py-2">
                    <div class="w-100 h-100 border-white py-4 px-2">
                        <div class="card w-100 h-100 bg-transparent border-0">

                            <div class="card-header bg-transparent border-0">
                                <?php the_title();?>
                            </div>
                            <div class="card-body bg-transparent border-0 text-center">
                                <div class="row status-image-row">
                                    <div class="col-12 align-self-center px-5">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <div class="more-button">
                                    <div class="border-white border-radius-5 overflow-hidden">
                                        <a href="<?php the_permalink(); ?>" class="btn w-100 bg-transparent hvr-sweep-to-right">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-12">
                <div class="col-12 mx-auto text-center my-4 mb-5">
                    <a class="btn btn-danger px-md-5" data-toggle="collapse" href="#collapseAllStatuses" aria-expanded="false"
                            aria-controls="collapseAllStatuses">
                        Смотреть все статусы
                    </a>
                </div>
                <div class="collapse mx-auto mt-5" id="collapseAllStatuses">
                    <div class="row text-center status-row">
                        <?php
                        $args = array('category_name' => 'statusyi','tag'=>'', 'start-page-services' => 'post', 'numberposts' => '0', 'offset' => '4');
                        $postslist = get_posts($args);
                        foreach ($postslist as $key => $post): setup_postdata($post);
                            ?>
                            <div class="col-lg-3 col-md-6 col-12 col-12 my-md-4 py-2">
                                <div class="w-100 h-100 border-white py-4 px-2">
                                    <div class="card w-100 h-100 bg-transparent border-0">

                                        <div class="card-header bg-transparent border-0">
                                            <?php the_title();?>
                                        </div>
                                        <div class="card-body bg-transparent border-0 text-center">
                                            <div class="row status-image-row">
                                                <div class="col-12 align-self-center px-5">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/fran1c.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-transparent border-0">
                                            <div class="more-button">
                                                <div class="border-white border-radius-5 overflow-hidden">
                                                    <a href="<?php the_permalink(); ?>" class="btn w-100 bg-transparent hvr-sweep-to-right">Подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--статусы-->

<!--Новости и акции-->
<div class="container news-container mt-5">
    <div class="row">
        <div class="col-md-6 col-12 stock-col">
            <div class="row mb-4">
                <div class="col-auto">
                    <div>
                        <h2 class="fs-headers-md"><strong>Последние акции</strong></h2>
                    </div>
                    <div>
                        <a href="/aktsii" class="color-gold">
                            <h3 class="fs-headers-sm">Все акции</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-12 col align-self-center">
                    <hr class="gold">
                </div>
            </div>
            <div class="row">
                <?php
                $args = array('category_name' => 'aktsii', 'post_type' => 'post', 'numberposts' => '3');
                $postslist = get_posts($args);
                foreach ($postslist as $key => $post): setup_postdata($post);
                    ?>
                    <div class="col-12 news-block mb-4">
                        <a href="<?php the_permalink()?>">
                            <div class="news-back p-3">
                                <div class="news-date">
                                    <span class="color-gray"><i class="fas fa-calendar-alt mr-3"></i> <?php the_date() ?></span>
                                </div>
                                <div class="triangle-border">
                                    <div class="left-right-border">
                                        <div class="p-4">
                                            <div class="news-label">
                                            <span class="raleway-medium">
                                                <?php the_title();?>
                                            </span>
                                            </div>
                                            <div class="news-desc">
                                                <span class="color-gray fs-headers-description raleway-light">
                                                    <?php the_excerpt(); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col-md-6 col-12 news-col">
            <div class="row mb-4">
                <div class="col-auto">
                    <div>
                        <h2 class="fs-headers-md"><strong>Последние новости</strong></h2>
                    </div>
                    <div>
                        <a href="/stati" class="color-gold">
                            <h3 class="fs-headers-sm">Все новости</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-md-12 col align-self-center">
                    <hr class="gold">
                </div>
            </div>
            <div class="row">
                <?php
                $args = array('category_name' => 'stati', 'post_type' => 'post', 'numberposts' => '3');
                $postslist = get_posts($args);
                foreach ($postslist as $key => $post): setup_postdata($post);
                    ?>


                    <div class="col-12 news-block mb-4">
                        <a href="<?php the_permalink()?>">
                            <div class="news-back p-3">
                                <div class="news-date">
                                    <span class="color-gray"><i class="fas fa-calendar-alt mr-3"></i>
                                        <?php
                                        the_date()
                                        ?>
                                    </span>
                                </div>
                                <div class="triangle-border">
                                    <div class="left-right-border">
                                        <div class="p-4">
                                            <div class="news-label">
                                            <span class="raleway-medium">
                                                <?php the_title();?>
                                            </span>
                                            </div>
                                            <div class="news-desc">
                                                <span class="color-gray fs-headers-description raleway-light">
                                                    <?php the_excerpt(); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<!--Новости и акции-->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col align-self-center">
            <hr class="gold">
        </div>
        <div class="col-auto">
            <h1 class="font-weight-bold fs-headers-md">Партнёры</h1>
        </div>
        <div class="col align-self-center">
            <hr class="gold">
        </div>
    </div>
</div>

<div class="container partners-container">
    <div class="row align-items-center justify-content-center">

        <?php
        $args = array('category_name' => 'partneryi','tag'=>'', 'start-page-services' => 'post', 'numberposts' => '0');
        $postslist = get_posts($args);
        foreach ($postslist as $key => $post): setup_postdata($post);
            ?>

            <div class="col-auto mb-4 px-3">
                <a target="_blank" href="<?php the_field('partner-link'); ?>">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></a>
            </div>


        <?php endforeach;
        wp_reset_postdata();
        ?>

    </div>
</div>

<!--Карта-->
<div class="container-fluid map-container mt-5 px-0">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A43bf666aaf6e59b1a5616daafeff31ca960a58f6e6448f0917dc82ee84fa0890&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=false"></script>
</div>

<!--Карта-->

<div class="container-fluid callback-form-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h2>Остались вопросы? Мы будем рады всё объяснить!</h2>
            </div>
            <div class="col-md-8 col-12 px-0 mx-auto mb-3">
                    <?php echo do_shortcode('[contact-form-7 id="591" title="Форма обратной связи (подвал)"]') ?>
            </div>
        </div>
    </div>
</div>

    <script src="<?php echo get_template_directory_uri(); ?>/ITS-new/js/main-page.js"></script>

</body>


<!--футер-->
<?php get_footer(); ?>
<!--футер-->

</html>