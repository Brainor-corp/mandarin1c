<?php
/**
 * Страница новости
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Новости
 */
get_header(); ?>
    <section class="main-section">
        <div class="container page-news">
            <?php
            include 'calculator.php';
            ?>
            <div class="row">
                <div class="col-12">
                    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                        <div class="row block-line">
                            <div class="col-auto">
                                <h1 style="word-break: break-word;" class="h1" ><?php the_title(); ?></h1>
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