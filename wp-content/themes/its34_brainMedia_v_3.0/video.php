<?php
/**
 * Шаблон для страницы с видео
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Видео
 */
get_header(); ?>
<section class="main-section">
    <div class="container">
        <div class="row mt-100">
            <div class="col-lg-12">
                <div class="align-items-start">
                    <div class="text-justify">
                        <div class="text-justify">
                            <div class="my-5"><h2><?php the_title() ?></h2></div>
                            <div class="fs-text-post">
                                <div class="container page-single">
                                    <?php
                                    include 'calculator.php';
                                    ?>
                                    <div class="row">
                                        <div class="col-12">
                                            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                                                <div class="row block-line">
                                                    <div class="col">
                                                        <div class="line">&nbsp;</div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                        <div class="col-12">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
