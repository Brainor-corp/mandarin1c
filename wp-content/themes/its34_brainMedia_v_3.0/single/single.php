<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage your-clean-template-3
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
                                            <div class="col-lg-4 col-sm-4 col-12 single-thumb"><?php the_post_thumbnail ('news_page_img');?></div>

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
