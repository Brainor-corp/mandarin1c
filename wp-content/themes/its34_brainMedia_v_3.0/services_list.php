
<?php
/*
Template Name: Услуги все
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
                                <div class="container page-services page-software">
                                    <?php
                                    include 'calculator.php';
                                    ?>
                                    <div class="row">
                                        <!--Тип услуг-->
                                        <?php
                                        $args = array('name' => 'software', 'post_type' => 'page', 'numberposts' => '1');
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $post): setup_postdata($post);
                                            ?>

                                            <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                                                <?php $iconClass = get_field('service-icon-class'); ?>
                                                <?php $servicePrice = get_field('service-price'); ?>
                                                <?php $serviceBgColor = get_field('service-bg-color'); ?>
                                                <div class="media service-content-wrapper">

                                                    <div class="block-color">
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
                                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata();
                                        ?>
                                        <!--конец Тип услуг-->

                                        <!--Тип услуг-->
                                        <?php
                                        $args = array('name' => '1c-support', 'post_type' => 'page', 'numberposts' => '1');
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $post): setup_postdata($post);
                                            ?>

                                            <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                                                <?php $iconClass = get_field('service-icon-class'); ?>
                                                <?php $servicePrice = get_field('service-price'); ?>
                                                <?php $serviceBgColor = get_field('service-bg-color'); ?>
                                                <div class="media service-content-wrapper">

                                                    <div class="block-color">
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
                                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata();
                                        ?>
                                        <!--конец Тип услуг-->

                                        <!--Тип услуг-->
                                        <?php
                                        $args = array('name' => 'pc-support', 'post_type' => 'page', 'numberposts' => '1');
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $post): setup_postdata($post);
                                            ?>

                                            <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                                                <?php $iconClass = get_field('service-icon-class'); ?>
                                                <?php $servicePrice = get_field('service-price'); ?>
                                                <?php $serviceBgColor = get_field('service-bg-color'); ?>
                                                <div class="media service-content-wrapper">

                                                    <div class="block-color">
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
                                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata();
                                        ?>
                                        <!--конец Тип услуг-->

                                        <!--Тип услуг-->
                                        <?php
                                        $args = array('name' => 'torgovoe-oborudovanie', 'post_type' => 'page', 'numberposts' => '1');
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $post): setup_postdata($post);
                                            ?>

                                            <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                                                <?php $iconClass = get_field('service-icon-class'); ?>
                                                <?php $servicePrice = get_field('service-price'); ?>
                                                <?php $serviceBgColor = get_field('service-bg-color'); ?>
                                                <div class="media service-content-wrapper">

                                                    <div class="block-color">
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
                                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata();
                                        ?>
                                        <!--конец Тип услуг-->
                                        <!--Тип услуг-->
                                        <?php
                                        $args = array('name' => 'industry-solutions', 'post_type' => 'page', 'numberposts' => '1');
                                        $postslist = get_posts($args);
                                        foreach ($postslist as $post): setup_postdata($post);
                                            ?>

                                            <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                                                <?php $iconClass = get_field('service-icon-class'); ?>
                                                <?php $servicePrice = get_field('service-price'); ?>
                                                <?php $serviceBgColor = get_field('service-bg-color'); ?>
                                                <div class="media service-content-wrapper">

                                                    <div class="block-color">
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
                                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata();
                                        ?>
                                        <!--конец Тип услуг-->
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

