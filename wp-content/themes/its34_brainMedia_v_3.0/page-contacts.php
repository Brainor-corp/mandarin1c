<?php
/**
 * Страница Наши Тарифы
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Контакты
 */
get_header(); ?>
    <section class="main-section">
        <div class="container">
            <div class="row mt-100">
                <div class="col-12">
                    <div class="align-items-start">
                        <div class="text-justify">
                            <div class="text-justify">
                                <div class="my-5"><h2><?php the_title() ?></h2></div>
                                <div class="fs-text-post">
                                    <div class="container page-contacts">
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

                                            <div class="contacts col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <?php
                                                        $args = array('include' => '69', 'post_type' => 'post', 'numberposts' => '1');
                                                        $postslist = get_posts($args);
                                                        foreach ($postslist as $post): setup_postdata($post);
                                                            ?>
                                                            <p class="adress"><i class="fa fa-home"></i><?php the_field('adress') ?></p>
                                                            <p class="adress"><i class="fa fa-mobile"></i><?php the_field('tel') ?></p>
                                                            <p class="email"><i class="fa fa-envelope"></i><?php the_field('email') ?></p>
                                                        <?php endforeach;
                                                        wp_reset_postdata();
                                                        ?>
                                                    </div>
                                                    <div class="col-12 mapa">
                                                        <?php
                                                        $args = array('include' => '6', 'post_type' => 'post', 'numberposts' => '1');
                                                        $postslist = get_posts($args);
                                                        foreach ($postslist as $post): setup_postdata($post);

                                                            the_content();

                                                        endforeach;
                                                        wp_reset_postdata();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-contacts">
                                                <div class="row block-line">
                                                    <div class="col-auto">
                                                        <h2 class="h2">Связаться с нами</h2>
                                                    </div>
                                                    <div class="col">
                                                        <div class="line">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 px-0">
                                                        <div class="col-md-7 col-lg-5 mx-auto">
                                                            <?php echo do_shortcode('[contact-form-7 id="88" title="Контактная форма контакты"]') ?>
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
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>