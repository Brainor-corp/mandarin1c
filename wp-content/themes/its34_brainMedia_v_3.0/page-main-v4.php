<?php
/**
 * Главная v4.0
 * @package WordPress
 * @subpackage its34_brainMedia_v_3.0
 * Template Name: Главная v4.0
 */
?>

<!DOCTYPE html>
<html lang="en">

<body class="raleway">


<!--шапка-->
<?php get_header('v4'); ?>
<!--шапка-->

<!--Слайдер-->

<div class="container-fluid margin-banner">
    <?php echo do_shortcode('[rev_slider alias="slider_for_banner"]') ?>
<!--    <div class="col-md-6 col-12 float-md-right text-left text-white p-md-5">-->
<!--        <h1 class="my-5 fs-4"><b>Последний шанс!</b></h1>-->
<!--            <p class="fs-1-3 text-bold">Спешите воспользоваться праздничным предложением</p>-->
<!--            <p class="fs-1-3">-->
<!--                "Обучение 1С Торговля всего за 6000 руб"<br>-->
<!--                + 2 часа персанального коучинга от тренера,<br>-->
<!--                + флешка с тренингом в подарок!<br>-->
<!--            </p>-->
<!--            <p class="fs-1-3">Акция действует до 31 января!</p>-->
<!--        <button class="btn btn-danger header-btn-with my-4" href="#" data-toggle="modal" data-target="#Modalfree">-->
<!--            Подробнее-->
<!--        </button>-->
<!--    </div>-->
</div>
<div class="container-fluid head-linear text-md-left text-center">
    <div class="container">
        <div class="row d-md-flex d-none">
            <div class="col-md-4 col-12 text-white box-crew">
                <p class="mt-3 mb-1">
                    Программное обеспечение
                </p>
                    <article class="decoration-border-red">

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
                            <br><a class="black-red-link" href="/software">Все услуги</a>

                    </article>
                <p>
                    <small class="mb-3">
                        Каталог продуктов с возможностью заказа
                    </small>
                </p>
            </div>
            <div class="col-md-4 col-12 text-white white-border-left box-crew">
                <p class="mt-3 mb-1">
                    Обслуживание 1с
                </p>
                <article class="decoration-border-red">
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

                    <br><a class="black-red-link" href="/1c-support">Все услуги</a>

                </article>
                <p>
                    <small class="mb-3">
                        Каталог продуктов с возможностью заказа
                    </small>
                </p>
            </div>
            <div class="col-md-4 col-12 text-white white-border-left box-crew">
                <p class="mt-3 mb-1">
                    Обслуживание ПК
                </p>
                    <article class="decoration-border-red">
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

                        <br><a class="black-red-link" href="/pc-support">Все услуги</a>

                    </article>
                <p>
                    <small class="mb-3">
                        Каталог продуктов с возможностью заказа
                    </small>
                </p>
            </div>
        </div>
        <div class="row d-md-none d-block">
            <div class="col-12 text-white decoration-border-red">
                <a class="text-white" href="/software">
                    <p class="mt-3 mb-1">
                        Программное обеспечение
                    </p>
                    <p>
                        <small class="mb-3">
                            Каталог продуктов с возможностью заказа
                        </small>
                    </p>
                </a>
            </div>
            <div class="col-12 text-white decoration-border-red">
                <a class="text-white" href="/1c-support">
                    <p class="mt-3 mb-1">
                        Обслуживание 1с
                    </p>
                    <p>
                        <small class="mb-3">
                            Каталог продуктов с возможностью заказа
                        </small>
                    </p>
                </a>
            </div>
            <div class="col-12 text-white decoration-border-red">
                <a class="text-white" href="/pc-support">
                    <p class="mt-3 mb-1">
                        Обслуживание ПК
                    </p>
                    <p>
                        <small class="mb-3">
                            Каталог продуктов с возможностью заказа
                        </small>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Слайдер-->

<!--статусы-->
<div class="container-fluid statuses-container">
    <div class="container nav-container statuses-layout">
        <div class="row">
            <div class="col-md-6 col-12 mt-5 text-md-left text-center">
                <h1 class="fs-3 mb-5">Наши статусы</h1>
                <p class="fs-1-3">
                    Компания "Мандарин 1с" является официальным партнером
                    фирмы "1С" и обладает статусами, подтверждающими
                    высокие компетенции компании в области внедрения и
                    сопровождения программных продуктов 1С,
                    а также обучения пользователей работе с ними.
                </p>
                <div class="my-md-5 d-md-block d-none">
                    <a class="btn btn-danger px-md-5" data-toggle="collapse" href="#collapseAllStatuses"
                       aria-expanded="false"
                       aria-controls="collapseAllStatuses">
                        Смотреть все статусы
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-md-5 mt-0">
                <div class="row text-center status-row mx-0">
                    <?php
                    $args = array('category_name' => 'statusyi', 'tag' => '', 'start-page-services' => 'post', 'numberposts' => '3');
                    $postslist = get_posts($args);
                    foreach ($postslist as $key => $post): setup_postdata($post);
                        ?>
                        <div class="col-lg-4 col-md-6 col-12 col-12 my-md-4 my-3">
                            <div class="w-100 h-100 border-white">
                                <div class="card w-100 h-100 bg-transparent border-0">
                                    <div class="card-header bg-transparent border-0">
                                        <?php the_title(); ?>
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
                                            <div class="border-white border-radius-5 overflow-hidden my-md-0 my-2">
                                                <a href="<?php the_permalink(); ?>"
                                                   class="btn w-100 bg-transparent hvr-sweep-to-right">Подробнее
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                    <div class="col-12 text-center">
                        <div class="my-3 d-md-none d-block">
                            <a class="btn btn-danger px-md-5" data-toggle="collapse" href="#collapseAllStatuses"
                               aria-expanded="false"
                               aria-controls="collapseAllStatuses">
                                Смотреть все статусы
                            </a>
                        </div>
                    </div>
                    <div class="collapse" id="collapseAllStatuses">
                        <div class="row text-center status-row mx-0">
                            <?php
                            $args = array('category_name' => 'statusyi', 'tag' => '', 'start-page-services' => 'post', 'numberposts' => '0', 'offset' => '3');
                            $postslist = get_posts($args);
                            foreach ($postslist as $key => $post): setup_postdata($post);
                                ?>
                                <div class="col-lg-4 col-md-6 col-12 col-12 my-md-4 my-3">
                                    <div class="w-100 h-100 border-white">
                                        <div class="card w-100 h-100 bg-transparent border-0">

                                            <div class="card-header bg-transparent border-0">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="card-body bg-transparent border-0 text-center">
                                                <div class="row status-image-row">
                                                    <div class="col-12 align-self-center px-5">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/fran1c.png"
                                                             alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div class="more-button">
                                                    <div class="border-white border-radius-5 overflow-hidden my-md-0 my-2">
                                                        <a href="<?php the_permalink(); ?>"
                                                           class="btn w-100 bg-transparent hvr-sweep-to-right">Подробнее</a>
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
</div>
<!--статусы-->

<div class="container nav-container news-container mt-md-5">
    <div class="row">
        <div class="col-xl-6 col-12">
            <?php
            $args = array('category_name' => 'aktsii', 'post_type' => 'post', 'numberposts' => '2');
            $postslist = get_posts($args);

            $tags = get_the_tags();
            foreach ($postslist as $key => $post): setup_postdata($post); ?>
                <div class="news-block">
                    <div class="news-back row mx-1">
                        <div class="col-5 d-md-flex d-none thumbnail-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="news-label my-3">
                                <?php $tags = get_the_tags(); ?>
                                <?php if($tags): ?>
                                    <?php foreach($tags as $tag): ?>
                                        <div class="tag btn btn-sm btn-danger text-white"><a href="<?php echo get_site_url(); ?>/tag?tag=/<?php echo $tag->slug; ?>">#<?php echo $tag->name; ?></a></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="headings-post-main mb-3">
                                    <span class="raleway-medium">
                                            <b class="fs-1-3"><?php the_title(); ?></b>
                                    </span>
                            </div>
                            <div>
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-danger black-text">Читать
                                    полностью</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
        <div class="col-xl-6 col-12 px-1 news-block">
            <?php
            $args = array('category_name' => 'video', 'post_type' => 'post', 'numberposts' => '1');
            $postslist = get_posts($args);
            foreach ($postslist

                     as $key => $post):
                setup_postdata($post);
                ?>
                <div class="col-12 h-100">
                    <div class=" h-100">
                        <a href="<?php the_permalink() ?>">
                            <div class="youtube-btn"></div>
                        </a>
                        <article class="post h-100" style="background-image: url(<?php if (has_post_thumbnail()) { $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo '' . $full_image_url[0] . '';} ?>); background-repeat: no-repeat; background-size: cover">
                            <div class="p-4 video-block-h">
                                <div class="news-label">
                                    <span class="raleway-medium">
                                        <h3 class="text-white"><?php the_title(); ?></h3>
                                    </span>
                                </div>
                                <?php $tags = get_the_tags(); ?>
                                <?php if($tags): ?>
                                    <?php foreach($tags as $tag): ?>
                                        <div class="tag btn btn-sm btn-danger text-white video-tag">
                                            <a href="<?php echo get_site_url(); ?>/tag?tag=/<?php echo $tag->slug; ?>">#<?php echo $tag->name; ?></a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-12 px-1 news-block">
            <?php
            $args = array('category_name' => 'video', 'post_type' => 'post', 'numberposts' => '1', 'offset' => '1');
            $postslist = get_posts($args);
            foreach ($postslist

                     as $key => $post):
                setup_postdata($post);
                ?>
                <div class="col-12 h-100">
                    <div class="h-100">
                        <a href="<?php the_permalink() ?>">
                            <div class="youtube-btn"></div>
                        </a>
                        <article class="post h-100" style="background-image: url(<?php
                        if (has_post_thumbnail()) {
                            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            echo '' . $full_image_url[0] . '';
                        }
                        ?>); background-repeat: no-repeat; background-size: cover">
                            <div class="p-4 video-block-h">
                                <div class="news-label">
                                    <span class="raleway-medium">
                                        <h3 class="text-white"><?php the_title(); ?></h3>
                                    </span>
                                </div>
                                <?php $tags = get_the_tags(); ?>
                                <?php if($tags): ?>
                                    <?php foreach($tags as $tag): ?>
                                        <div class="tag btn btn-sm btn-danger text-white video-tag"><a href="<?php echo get_site_url(); ?>/tag?tag=/<?php echo $tag->slug; ?>">#<?php echo $tag->name; ?></a></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
        <div class="col-xl-6 col-12">
            <?php
            $args = array('category_name' => 'stati', 'post_type' => 'post', 'numberposts' => '2');
            $postslist = get_posts($args);
            foreach ($postslist

                     as $key => $post):
                setup_postdata($post);
                ?>
                <div class="news-block">
                    <div class="news-back row mx-1">
                        <div class="col-md-5 d-md-flex d-none thumbnail-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="news-label my-3">
                                <?php $tags = get_the_tags(); ?>
                                <?php if($tags): ?>
                                    <?php foreach($tags as $tag): ?>
                                        <div class="tag btn btn-sm btn-danger text-white"><a href="<?php echo get_site_url(); ?>/tag?tag=/<?php echo $tag->slug; ?>">#<?php echo $tag->name; ?></a></div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="headings-post-main mb-3">
                                    <span class="raleway-medium">
                                            <b class="fs-1-3"><?php the_title(); ?></b>
                                    </span>
                            </div>
                            <div>
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-danger black-text">Читать
                                    полностью</a>
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


<!--Новости и акции-->

<div class="container-fluid margin-banner school-banner">
    <div class="col-md-5 col-12 text-md-left text-center text-white p-md-5 ml-md-5 mt-5">
        <h1 class="my-5">Учебный центр</h1>
        <p class="my-5 fs-1-3">
            Компания мандарин проводит высококвалифицированное
            обечение по всем направлениям деятиельности
            связанной с развертыванием , сопровождением 1с,
            а также работе персонала в системах 1с-управления.
        </p>
        <button class="btn btn-outline-light header-btn-with my-4" href="#" data-toggle="modal"
                data-target="#Modalfree">
            Записаться на курс
        </button>
    </div>
</div>

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
        $args = array('category_name' => 'partneryi', 'tag' => '', 'start-page-services' => 'post', 'numberposts' => '0');
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
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A43bf666aaf6e59b1a5616daafeff31ca960a58f6e6448f0917dc82ee84fa0890&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=false"></script>
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