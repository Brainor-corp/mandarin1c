<?php
/**
 * Страница Программное обеспечение
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Программное обеспечение
 */
get_header('no-slider'); ?>
    <section class="main-section">
        <div class="container page-software">
            <?php
            include 'calculator.php';
            ?>
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
            <div class="row justify-content-center">

                <?php
                $args = array('category_name' => 'stranitsa-programmnoe-obespechenie', 'post_type' => 'post', 'numberposts' => '0');
                $postslist = get_posts($args);
                foreach ($postslist as $key => $post): setup_postdata($post);
                ?>
                    <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                        <div class="media">
                            <div class="block-color">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Img">
                            </div>
                            <div class="media-body">
                                <h5 class="h5"><?php the_title(); ?></h5>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>
<?php get_footer(); ?>