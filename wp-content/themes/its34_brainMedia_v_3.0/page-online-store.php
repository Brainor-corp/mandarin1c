<?php
/**
 * Страница Интернет Магазин
 * @package WordPress
 * @subpackage its34_brainMedia_v_2.0
 * Template Name: Страница Интернет магазин
 */
get_header(); ?>
    <section class="main-section">
        <div class="container page-store">
            <div class="row">
                <div class="col-12">
                    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                        <div class="row block-line">
                            <div class="col-auto">
                                <h1 class="h1"><?php the_title(); ?></h1>
                            </div>
                            <div class="col">
                                <div class="line">&nbsp;</div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>