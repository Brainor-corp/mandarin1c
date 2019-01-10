<?php
/**
 * @package WordPress
 * @subpackage its34_brainMedia_v_3.0
 * Template Name: Страница Отзывы
 */
get_header(); // подключаем header.php ?>
<section class="main-section">
    <div class="container page-store">
        <div class="row mt-100">
            <div class="col-12">
                <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <div class="row block-line">
                        <div class="col-auto mt-5">
                            <h1 class="h1"><?php the_title(); ?></h1>
                        </div>
                        <div class="col-12">
                            <article>
                                <p class="text-center">
                                    <a href="#commentform">
                                        <button type="button" class="btn btn-default btn-lg">ОСТАВИТЬ ОТЗЫВ</button>
                                    </a>
                                </p>
                                <div class="page_content">
                                    <?php the_content(); // контент ?>
                                </div>
                            </article>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php if (comments_open() || get_comments_number()) comments_template('', true); // если комментирование открыто - мы покажем список комментариев и форму, если закрыто, но кол-во комментов > 0 - покажем только список комментариев ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>
