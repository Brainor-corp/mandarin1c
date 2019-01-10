<?php
/**
 * Страница Наши Тарифы
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Наши тарифы
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
                                    <div class="container tarif">
                                        <?php
                                        include 'calculator.php';
                                        ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                                    <div class="row block-line">
                                                        <div class="col">
                                                            <div class="line">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                            <div class="col-12 text-center">
                                                <div class="row">
                                                    <div class="col-12 content">
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $args = array('category_name' => 'tariffs', 'post_type' => 'post', 'numberposts' => '0', 'orderby'=>'date', 'order'=>'ASC');
                                            $postslist = get_posts($args);?>
                                            <div class="col-12">
                                                <div class="owl-carousel">
                                                    <?php foreach ($postslist as $post): setup_postdata($post);?>
                                                        <div class="item">
                                                            <div class="pricingTable orange">
                                                                <div class="pricingTable-header">
                                                                    <h3 class="title"><?php the_title(); ?></h3>
                                                                    <span class="price-value">
                            <?php the_field('tariff-price'); ?><span class="fas fa-ruble-sign"></span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="pricing-content">
                                                                    <?php the_field('tariff-table'); ?>
                                                                </div>
                                                                <a href="<?php the_field('tariff-link'); ?>" class="pricingTable-signup">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; wp_reset_postdata();?>
                                                </div>
                                            </div>
                                            <script>
                                                $('.owl-carousel').owlCarousel({
                                                    loop:false,
                                                    margin:10,
                                                    nav:true,
                                                    navText: ["<i class='fas fa-chevron-left slide-nav slide-previous' aria-hidden='true'></i>","<i class='fas fa-chevron-right slide-nav slide-next' aria-hidden='true'></i>"],
                                                    responsive:{
                                                        0:{
                                                            items:1
                                                        },
                                                        600:{
                                                            items:2
                                                        },
                                                        1000:{
                                                            items:3
                                                        }
                                                    }
                                                })
                                            </script>

                                            <!--                <div class="col-12 shadow" id="shadow" role="tablist">-->
                                            <!--                    <div class="row">-->
                                            <!--                        <div id="accordion" >-->
                                            <!--                            <div class="">-->
                                            <!--                                <div class="text-center block-btn">-->
                                            <!--                                    --><?php //foreach ($postslist as $post):?>
                                            <!---->
                                            <!--                                        <button class="btn btn-prof btn-change" data-toggle="collapse" href="#collapse--><?php //echo $post->ID; ?><!--"-->
                                            <!--                                                aria-expanded="true" aria-controls="collapse--><?php //echo $post->ID; ?><!--">-->
                                            <!--                                            --><?php //the_title(); ?>
                                            <!--                                        </button>-->
                                            <!--                                    --><?php //endforeach; ?>
                                            <!--                                </div>-->
                                            <!--                                --><?php //foreach ($postslist as $post): setup_postdata($post);?>
                                            <!--                                    <div id="collapse--><?php //echo $post->ID; ?><!--" class="collapse --><?php //if($post->post_title == 'Базовый'): ?><!-- show --><?php //endif; ?><!--" role="tabpanel" aria-labelledby="heading--><?php //echo $post->ID; ?><!--" data-parent="#accordion">-->
                                            <!--                                        --><?php //the_content(); ?>
                                            <!--                                        <div class="tariff-table-wrapper">-->
                                            <!--                                            --><?php //the_field('tariff-table'); ?>
                                            <!--                                        </div>-->
                                            <!--                                    </div>-->
                                            <!--                                --><?php //endforeach;
                                            //                                wp_reset_postdata();
                                            //                                ?>
                                            <!--                            </div>-->
                                            <!--                        </div>-->
                                            <!--                        <div class="col-12 text-center">-->
                                            <!--                            <button class="btn btn-cons">Проконсультироваться</button>-->
                                            <!--                        </div>-->
                                            <!--                    </div>-->
                                            <!--                </div>-->
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