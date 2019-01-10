<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header('no-slider'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center"><?php printf('Результаты поиска по строке: %s', get_search_query()); ?></h1>
                    <div class="text-dark page-news">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                            <hr class="bg-warning">
                        <?php endwhile;
                        else: echo '<p class="h6 text-center mt-5" style="margin-bottom: 20rem" >Нет записей.</p>'; endif; ?>
                        <?php pagination(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>