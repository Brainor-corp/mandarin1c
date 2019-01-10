<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); ?>
<!-- Content -->
<div class="content">
    <?php
    include 'calculator.php';
    ?>

<!--Programm-->
<div style="overflow: hidden;">
    <div class="programm">
        <div class="container">
            <div class="row block-line">
                <div class="col-auto overflow-scrollme">
                    <h4>Направления деятельности</h4>
                    <a href="/software">ознакомиться с прайсом</a>
                </div>
                <div class="col">
                    <div class="line">&nbsp;</div>
                </div>
            </div>
            <div class="row scrollme">
                <!--Колонка-->
                <div class="col-lg-3 col-md-6 col-sm-12 block-child animateme"
                data-when="enter"
                data-from="1"
                data-to="0"
                data-opacity="0"
                data-translatex="-500"
                >
                <div class="block-img mx-auto">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/tap-2.png" alt="Icon">
                </div>
                <div class="block-shadow text-center w-100">
                    <h4 class="h4">ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ</h4>
                    <div class="programm-content">
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
                    <div class="programm-price">
                        <!--                                <div class="price">--><?php //the_field('price'); ?><!--<br>руб./мес.</div>-->
                        <a href="/software"><button class="btn">Все продукты</button></a>
                    </div>
                </div>
            </div>
            <!--Колонка конец-->

            <!--Колонка-->
            <div class="col-lg-3 col-md-6 col-sm-12 block-child animateme"
            data-when="enter"
            data-from="1"
            data-to="0"
            data-opacity="0"
            data-translatex="-500"
            >
            <div class="block-img mx-auto">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/tap-3.png" alt="Icon">
            </div>
            <div class="block-shadow text-center w-100">
                <h4 class="h4">ОБСЛУЖИВАНИЕ 1С</h4>
                <div class="programm-content">
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
                <div class="programm-price">
                    <!--                                <div class="price">--><?php //the_field('price'); ?><!--<br>руб./мес.</div>-->
                    <a href="/1c-support"><button class="btn">Все продукты</button></a>
                </div>
            </div>
        </div>
        <!--Колонка конец-->

        <!--Колонка-->
        <div class="col-lg-3 col-md-6 col-sm-12 block-child animateme"
        data-when="enter"
        data-from="1"
        data-to="0"
        data-opacity="0"
        data-translatex="+500"
        >
        <div class="block-img mx-auto">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/tap-4.png" alt="Icon">
        </div>
        <div class="block-shadow text-center w-100">
            <h4 class="h4">ОБСЛУЖИВАНИЕ ПК</h4>
            <div class="programm-content">
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
            <div class="programm-price">
                <!--                                <div class="price">--><?php //the_field('price'); ?><!--<br>руб./мес.</div>-->
                <a href="/pc-support"><button class="btn">Все продукты</button></a>
            </div>
        </div>
    </div>
    <!--Колонка конец-->

    <!--Колонка-->
    <div class="col-lg-3 col-md-6 col-sm-12 block-child animateme"
    data-when="enter"
    data-from="1"
    data-to="0"
    data-opacity="0"
    data-translatex="+500"
    >
    <div class="block-img mx-auto">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/tap-1.png" alt="Icon">
    </div>
    <div class="block-shadow text-center w-100">
        <h4 class="h4">ОТРАСЛЕВЫЕ РЕШЕНИЯ</h4>
        <div class="programm-content">
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
        <div class="programm-price">
            <!--                                <div class="price">--><?php //the_field('price'); ?><!--<br>руб./мес.</div>-->
            <a href="/industry-solutions"><button class="btn">Все продукты</button></a>
        </div>
    </div>
</div>
<!--Колонка конец-->
</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <!--Articles-->
        <div class="articles col-lg-6 col-md-12 col-12">
            <div class="container">
                <div class="row block-line">
                    <div class="col-auto">
                        <h4>Акции</h4>
                        <a href="/aktsii">все акции</a>
                    </div>
                    <div class="col">
                        <div class="line">&nbsp;</div>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">

                    <?php
                    $args = array('category_name' => 'aktsii', 'post_type' => 'post', 'numberposts' => '3');
                    $postslist = get_posts($args);
                    foreach ($postslist as $key => $post): setup_postdata($post);
                        ?>

                        <div class="col-lg-12 col-md-10 col-sm-10 block-child stock">
                            <a class="link-news" href="<?php the_permalink()?>">
                                <div class="media shadow-news service-content-wrapper">
                                    <div class="block-color">
                                        <span class="service-font-icon fas"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h5"><?php the_title();?></h5>
                                        <div class="service-description-wrapper"><?php the_excerpt(); ?></div>
                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
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
        <!--Articles-->
        <div class="articles col-lg-6 col-md-12 col-12">
            <div class="container">
                <div class="row block-line">
                    <div class="col-auto">
                        <h4>Новости</h4>
                        <a href="/stati">все новости</a>
                    </div>
                    <div class="col">
                        <div class="line">&nbsp;</div>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">

                    <?php
                    $args = array('category_name' => 'stati', 'post_type' => 'post', 'numberposts' => '3');
                    $postslist = get_posts($args);
                    foreach ($postslist as $key => $post): setup_postdata($post);
                        ?>
                        <div class="col-lg-12 col-md-10 col-sm-10 block-child">
                            <a class="link-news" href="<?php the_permalink()?>">
                                <div class="media shadow-news service-content-wrapper">

                                    <div class="block-color">
                                        <span class="service-font-icon fas"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="h5"><?php the_title()?></h5>
                                        <div class="service-description-wrapper"><?php the_excerpt()?></div>
                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                    </div>   
                                </div>
                            </a>
                        </div>
                        
                    <!--<div class="col-lg-4 col-sm-9 child <?= $key == 2 ? 'col-md-12' : 'col-md-6'; ?>">
                        <div class="row">
                            <div class="col-12 <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-img <?= $key == 2 ? 'float-md-left' : ''; ?> scrollme">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Img"
                                    class="animateme"
                                    data-when="enter"
                                    data-from="0.6"
                                    data-to="0"
                                    data-opacity="0"
                                    data-rotatex="-90"
                                    data-rotatey="90"
                                    data-rotatez="-90"
                                    >
                                    <div class="arrow">
                                        <i class="fa fa-arrows-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 <?= $key == 1 ? 'order-first' : ''; ?> <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-text">
                                    <p class="data"><?php echo get_the_date('d.m.Y  G:i'); ?></p>
                                    <div class="content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="float-right">далее</a>
                                </div>
                            </div>
                        </div>
                    </div>-->

                <?php endforeach;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>
</div>
<!--Partner-->
<div class="statuses">
    <div class="container">
        <div class="row block-line">
            <div class="col-auto mt-4">
                <h4 class="text-white">Наши статусы</h4>
            </div>
            <div class="col">
                <div class="line">&nbsp;</div>
            </div>
        </div>
        <div class="row pb-3">
            <!-- <div class="col-lg-12 col-md-6 col-12 mb-4 text-white text-center"> -->

                <?php
                $args = array('category_name' => 'statusyi','tag'=>'', 'start-page-services' => 'post', 'numberposts' => '0');
                $postslist = get_posts($args);
                foreach ($postslist as $key => $post): setup_postdata($post);
                    ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-12 service mx-auto">
                                <div class="row align-items-center h-100">
                                    <div class="col-lg-12 col-md-12 col-12 p-2 font-size-service">
                                        <a href="<?php the_permalink(); ?>" class="text-light statuses-list-type fa fa-check">
                                            <?php the_title();?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach;
                wp_reset_postdata();
                ?>


               <!--      <ul>
                        <li class="statuses-list-type fa fa-check">Статус очень важный</li>
                        <li class="statuses-list-type fa fa-check">Статус очень важный</li>
                        <li class="statuses-list-type fa fa-check">Статус очень важный</li>
                        <li class="statuses-list-type fa fa-check">Статус очень важный</li>
                        <li class="statuses-list-type fa fa-check">Статус очень важный</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!--Partner-->
    <div class="partner mb-4">
        <div class="container">
            <div class="row block-line">
                <div class="col-auto">
                    <h4 class="mt-4">Наши партнеры</h4>
                </div>
                <div class="col">
                    <div class="line">&nbsp;</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $args = array('category_name' => 'partneryi','tag'=>'', 'start-page-services' => 'post', 'numberposts' => '0');
                        $postslist = get_posts($args);
                        foreach ($postslist as $key => $post): setup_postdata($post);
                            ?>

                            <div class="item text-center">
                                <a target="_blank" href="<?php the_field('partner-link'); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></a>
                            </div>

                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A495f272bbabea4c4a7573751738bb4b2435f2d2d97938957efa76a3d5d2beaba&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

</div>
<?php get_footer(); ?>