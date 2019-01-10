
<?php
/*
Template Name: Список по ярлыку
*/

get_header()?>
<body class="raleway">

<!--контент-->
<section>
    <?php
    include 'calculator.php';
    ?>
<div class="container">

    <div class="row mt-100">
        <div class="col-12">
            <div class="align-items-start">
                <div class="text-justify">
                    <div class="text-justify">
<!--                        <div class="mb-5 fs-breadcrumbs decoration-links">-->
<!--                            asdasdasd-->
<!--                        </div>-->
                        <div class="my-5"><h2><?php the_title() ?></h2></div>
                        <div class="fs-text-post page-news">

                            <?php

                            $post_obj = $wp_query->get_queried_object();
                            $post_slug = $post_obj->post_name;
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            if ( have_posts() ) : // если имеются записи в блоге.
                                query_posts( array('category_name' => $post_slug, 'paged' => $paged ) );   // указываем ID рубрик, которые необходимо вывести.
                                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                                    ?>
                                    <div class="row">
                                        <div class="col-12 news-blocks">
                                            <div class="row">
                                                <div class="col-12 news-block">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-12 news-blocks-img">
                                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ('news_page_img');?></a>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-12 news-block-description">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <h3><?php the_title(); ?></h3>
                                                                <span class="content"><?php the_excerpt(); ?></span>
                                                                <a class="news_button_more btn" href="<?php the_permalink()?>">Подробднее</a>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;  // завершаем цикл.?>
                            <?php endif; // если записей нет, напишим "простите"?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="pagination_wraper"><?php wp_pagenavi(); ?></div>
        </div>
    </div>
</div>


<!--контент-->

</section>

</body>

<?php get_footer()?>


