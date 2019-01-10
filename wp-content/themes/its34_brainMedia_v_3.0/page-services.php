<?php
/**
 * Страница Наши Услуги
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Услуги
 */
get_header(); ?>
    <section class="main-section">
        <div class="container page-services page-software">
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
            <div class="row justify-content-center scrollme">

                <?php
                $args = array('category_name' => 'services', 'post_type' => 'post', 'numberposts' => '0');
                $postslist = get_posts($args);
                foreach ($postslist as $post): setup_postdata($post);
                    ?>

                    <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                        <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                        <?php $iconClass = get_field('service-icon-class'); ?>
                        <?php $servicePrice = get_field('service-price'); ?>
                        <?php $serviceBgColor = get_field('service-bg-color'); ?>
                        <div class="media service-content-wrapper" style="
                        <?php if($serviceBgColor): ?>
                                border-bottom: 5px solid <?php echo $serviceBgColor; ?>;
                        <?php else: ?>
                                border-bottom: 5px solid #dc3545;
                        <?php endif; ?>">

                            <div class="block-color" style="
                            <?php if($serviceBgColor): ?>
                                    background-color:<?php echo $serviceBgColor; ?>;
                                            <?php else: ?>
                                    background-color:#dc3545;
                            <?php endif; ?>">
                                <?php if($thumb): ?>
                                    <?php if (file_exists($thumb)): ?>
                                        <img src="<?php echo $thumb; ?>" alt="Img">
                                    <?php else: ?>
                                        <span class="service-font-icon fas fa-database"></span>
                                    <?php endif; ?>
                                <?php elseif($iconClass): ?>
                                    <span class="service-font-icon <?php echo $iconClass; ?>"></span>
                                <?php else: ?>
                                    <span class="service-font-icon fas fa-database"></span>
                                <?php endif; ?>
                            </div>
                            <div class="media-body">
                                <h5 class="h5"><?php the_title(); ?></h5>
                                <div class="service-description-wrapper"><?php the_excerpt(); ?></div>
                                <div class="service-price-wrapper"><?php if($servicePrice){echo $servicePrice;}else{ echo 0;} ?> <span class="fas fa-ruble-sign"></span></div>
                                <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
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