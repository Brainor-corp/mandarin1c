<?php
/**
 * Посадочная страница (landing)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Посадочная страница (landing)
 */
get_header('for-landing'); ?>

    <section class="main-section">
    <div class="col-12 mt-5 row marginFor1cv8 text-md-left text-justify">
        <div class="col-md-6 col-12 headings-1cv8">
            <h2>ОНЛАЙН-КАССА ПОД КЛЮЧ</h2><br>

            <h3>Комплексное готовое решение по проведению полного спектра кассовых операций, в соответствии с
                требованиями ФЗ №54.</h3><br>

            <p>Мы предлагаем Вам приобрести полный кассовый комплект для ведения Вашего БИЗНЕСА или выбрать любую
                понравившуюся модель касс и необходимую комплектацию по МАКСИМАЛЬНО ВЫГОДНЫМ ЦЕНАМ С ЛУЧШИМ ТЕХНИЧЕСКИМ
                СОПРОВОЖДЕНИЕМ!
                МЫ выполняем подключение сервиса ОФД для передачи фискальных данных в НАЛОГОВУЮ ИНСПЕКЦИЮ; осуществляем
                комплексную настройку, помощь в регистрации; оказываем оперативные консультации и обеспечиваем
                круглосуточную техническую поддержку.
            </p>
        </div>
        <div class="col-md-6 col-12 text-center mx-md-auto">
            <img class="w-75 my-md-0 my-3" src="<?php echo get_template_directory_uri(); ?>/img/online-kassa.jpg">
        </div>
    </div>
    <!--строка с "возможности цены услуги"-->
    <div class="container-fluid PurpleStripe hght-hdr-top"
         style="position: fixed;bottom: 0;z-index: 10; border-top: 1px solid white">
        <div class="row stripeLinks">
            <nav id="menu" class="mt-1">
                <a href="#capabilities" class="scroll-naw ml-5 pl-md-3 pl-0">Возможности</a>
                <a href="#price" class="scroll-naw ml-4">Цены</a>
                <a href="#services" class="scroll-naw ml-4">Услуги</a>
            </nav>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            $("#menu").on("click", "a", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();

                //забираем идентификатор бока с атрибута href
                var id = $(this).attr('href'),

                    //узнаем высоту от начала страницы до блока на который ссылается якорь
                    top = $(id).offset().top;

                //анимируем переход на расстояние - top за 1500 мс
                13
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
    </script>
    <!--строка с "возможности цены услуги"-->
    <div class="col-12 mt-5 headings-1cv8">
        <div class="col-12 text-center">
            <div style="position: absolute; top: -70px" id="capabilities"></div><!--якорь-->
            <h2 style="margin-top: 130px">Наши готовые комплекты для ПРОЦВЕТАНИЯ и РОСТА ВАШЕГО БИЗНЕСА <br>
                По МАКСИМАЛЬНО ВЫГОДНЫМ ЦЕНАМ!
            </h2>
        </div>
    </div>
    <div>
        <div class="container col-9 row no-gutters justify-content-center mx-auto">

            <?php
            $args = array('category_name' => 'aktsii-onlayn-kassa-pod-klyuch', 'post_type' => 'post', 'numberposts' => '2');
            $postslist = get_posts($args);
            foreach ($postslist as $key => $post): setup_postdata($post);
                ?>
                <div class="p-md-5 p-0 pt-md-0 pt-5 col-lg-6 col-md-6 col-12 block-child">
                    <a class="link-news" href="<?php the_permalink() ?>">
                        <div class="media shadow-news service-content-wrapper">

                            <div class="block-color">
                                <span class="service-font-icon fas"><img class="img-fluid"
                                                                         src="<?php the_post_thumbnail_url(); ?>"></span>
                            </div>
                            <div class="media-body p-3">
                                <h5 class="h5"><?php the_title() ?></h5>
                                <div class="service-description-wrapper"><?php the_excerpt() ?></div>
                                <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!--<div class="col-lg-4 col-sm-9 child <?= $key == 2 ? 'col-md-12' : 'col-md-6'; ?>">
                        <div class="row">
                            <div class="col-12 <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-img <?= $key == 2 ? 'float-md-left' : ''; ?> scrollme">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Img"
                                    class="animateme"
                                    data-when="enter"
                                    data-from="0.6"
                                    data-to="0"
                                    data-opacity="0"
                                    data-rotatex="-90"
                                    data-rotatey="90"
                                    data-rotatez="-90"
                                    >
                                    <div class="arrow">
                                        <i class="fa fa-arrows-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 <?= $key == 1 ? 'order-first' : ''; ?> <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-text">
                                    <p class="data"><?php echo get_the_date('d.m.Y  G:i'); ?></p>
                                    <div class="content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="float-right">далее</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
            <?php endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="col-12 mt-5 row marginFor1cv8">
        <div class="col-md-12 col-12 headings-1cv8">
            <div class="row block-line">
                <div class="col-md-auto col-12">
                    <h2><!-- <?php the_title(); ?> -->Покупая у нас Вы получаете: </h2>
                </div>
                <div class="col">
                    <div class="line">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center container">
        <div class="col-12 row mx-auto">
            <div class="col-md-4 col-12"><i class="fas fa-chart-line fa-3x mb-3" style="color: #c40700"></i><br>Полный
                спектр необходимого функционала для успешного СТАРТА и РОСТА Вашего БИЗНЕСА
            </div>
            <div class="col-md-4 col-12"><i class="fas fa-calculator fa-3x mb-3" style="color: #d29400"></i><br>Широкий
                выбор онлайн-касс для любого вида Бизнеса, готовые комплекты автоматизации, торговое оборудование с
                учётом Ваших пожеланий
            </div>
            <div class="col-md-4 col-12"><i class="fas fa-user-circle fa-3x mb-3" style="color: #15d279"></i><br>Упрощённая
                система регистрации Вашей онлайн-кассы в Личном кабинете ОФД и ФНС
            </div>
        </div>
        <div class="col-12 row mx-auto mt-5">
            <div class="col-md-4 col-12"><i class="fas fa-laptop fa-3x mb-3" style="color: #007dd2"></i><br>Полностью
                автоматизированная система ведения Вашего Бизнеса, удобный и понятный Личный Кабинет, функциональный
                сервис удалённого мониторинга и контроля торговли, учёт товаров от поставки до продажи, печать
                номенклатурной продукции в чеке
            </div>
            <div class="col-md-4 col-12"><i class="fas fa-clipboard fa-3x mb-3" style="color: #d2177d"></i><br>Расширенный
                набор возможностей использования онлайн-касс для полноценной работы Вашего Бизнеса
            </div>
            <div class="col-md-4 col-12"><i class="fas fa-cart-plus fa-3x mb-3" style="color: #a719bf"></i><br>Полное
                техническое сопровождение: подключение к <strong>"1С:Кассе"</strong>, получение <strong>КЭП</strong>
                (электронной цифровой подписи) для регистрации онлайн-касс в ФНС и обмена документами в ЭДО, настройка
                онлайн-касс, сервисное обслуживание. программное обеспечение
            </div>
        </div>
    </div>

    <section class="main-section">
        <div class="col-12 mt-5 row marginFor1cv8">
            <div class="col-md-12 col-12 headings-1cv8">
                <div class="row block-line">
                    <div class="col-md-auto col-12">
                        <div style="position: absolute; top: -70px" id="price"></div><!--якорь-->
                        <h2><!-- <?php the_title(); ?> -->Наши онлайн кассы</h2>
                    </div>
                    <div class="col">
                        <div class="line">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-services">
            <?php
            include 'calculator.php';
            ?>
            <!--            <div class="row">-->
            <!--                <div class="col-12">-->
            <!--                    --><?php //if (have_posts()) while (have_posts()) : the_post(); ?>
            <!--                        <div class="row block-line">-->
            <!--                            <div class="col-auto">-->
            <!--                                <h1 class="h1">--><?php //the_title(); ?><!--</h1>-->
            <!--                            </div>-->
            <!--                            <div class="col">-->
            <!--                                <div class="line">&nbsp;</div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    --><?php //endwhile; ?>
            <!--                </div>-->
            <!--            </div>-->
            <div class="row justify-content-center mt-5 scrollme">

                <?php
                $args = array('tag' => 'torgovoe-oborudovanie', 'post_type' => 'post', 'numberposts' => '4');
                $postslist = get_posts($args);
                foreach ($postslist as $post): setup_postdata($post);
                    ?>

                    <div class="col-lg-3 col-md-10 col-sm-10 " style="padding: 30px; display: flex;">
                        <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                        <?php $iconClass = get_field('service-icon-class'); ?>
                        <!--                        --><?php //$servicePrice = get_field('service-price'); ?>
                        <?php $serviceBgColor = get_field('service-bg-color'); ?>
                        <div class="service-content-wrapper border" style="
                        <?php if ($serviceBgColor): ?>
                                <?php echo $serviceBgColor; ?>;
                        <?php else: ?>
                        <?php endif; ?>">

                            <div class="block-color-cashbox-online border rounded-top" style="background-color:#fff;"
<!--                                --><?php //if ($thumb): ?>
<!--                                    --><?php //if (file_exists($thumb)): ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" style="z-index: 2;">
<!--                                    --><?php //else: ?>
<!--                                        <span class="service-font-icon fas fa-database"></span>-->
<!--                                    --><?php //endif; ?>
<!--                                --><?php //elseif ($iconClass): ?>
<!--                                    <span class="service-font-icon --><?php //echo $iconClass; ?><!--"></span>-->
<!--                                --><?php //else: ?>
<!--                                    <span class="service-font-icon fas fa-database"></span>-->
<!--                                --><?php //endif; ?>
                            </div>
                            <div class="media-body" style="padding-top: 130px;margin-left: 5px;margin-bottom: 55px">
                                <h5 class="h5"><?php the_title(); ?></h5>
                                <div class="service-description-wrapper"><?php the_excerpt(); ?></div>
                                <!--                                <div class="service-price-wrapper">-->
                                <?php //if($servicePrice){echo $servicePrice;}else{ echo 0;} ?><!-- <span class="fas fa-ruble-sign"></span></div>-->
                                <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                            </div>
                            <button href="#" data-toggle="modal" data-target="#Modalbuy" class="btn btn-warning text-light col-10" style="margin: 0 auto;width: 100%;margin-left: 1.15rem;display: block; margin-bottom: 20px; position: absolute; bottom: 0; background-color: #dc3545!important; border-color: #dc3545!important;">Купить</button>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-12 more-link text-center">
                <a data-toggle="collapse" href="#collapseAllProducts" aria-expanded="false"
                   aria-controls="collapseExample">Все продукты<i
                            class="fas fa-caret-down"></i></a>
            </div>
            <div class="collapse mx-auto" id="collapseAllProducts">
                <div class="row justify-content-center scrollme" style="margin-top: 8rem">

                    <?php
                    $args = array('tag' => 'torgovoe-oborudovanie', 'post_type' => 'post', 'numberposts' => '0', 'offset' => '4');
                    $postslist = get_posts($args);
                    foreach ($postslist as $post): setup_postdata($post);
                        ?>

                        <div class="col-lg-3 mb-5 col-md-10 col-sm-10 block-child">
                            <?php $thumb = get_the_post_thumbnail_url('full'); ?>
                            <?php $iconClass = get_field('service-icon-class'); ?>
                            <?php $servicePrice = get_field('service-price'); ?>
                            <?php $serviceBgColor = get_field('service-bg-color'); ?>
                            <div class="service-content-wrapper border" style="
                            <?php if ($serviceBgColor): ?>
                                    border-bottom: 5px solid <?php echo $serviceBgColor; ?>;
                            <?php else: ?>
                                    border-bottom: 5px solid #dc3545;
                            <?php endif; ?>">

                                <div class="block-color-cashbox-online border rounded-top" style="background-color:#fff;">
                                    <!--                                --><?php //if ($thumb): ?>
                                    <!--                                    --><?php //if (file_exists($thumb)): ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" style="z-index: 2;">
                                    <!--                                    --><?php //else: ?>
                                    <!--                                        <span class="service-font-icon fas fa-database"></span>-->
                                    <!--                                    --><?php //endif; ?>
                                    <!--                                --><?php //elseif ($iconClass): ?>
                                    <!--                                    <span class="service-font-icon --><?php //echo $iconClass; ?><!--"></span>-->
                                    <!--                                --><?php //else: ?>
                                    <!--                                    <span class="service-font-icon fas fa-database"></span>-->
                                    <!--                                --><?php //endif; ?>
                                </div>
                                <div class="media-body" style="padding-top: 130px;margin-left: 5px; margin-bottom: 55px">
                                    <h5 class="h5"><?php the_title(); ?></h5>
                                    <div class="service-description-wrapper"><?php the_excerpt(); ?></div>
                                    <!--                                <div class="service-price-wrapper">-->
                                    <?php //if($servicePrice){echo $servicePrice;}else{ echo 0;} ?><!-- <span class="fas fa-ruble-sign"></span></div>-->
                                    <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                </div>
                                <button href="#" data-toggle="modal" data-target="#Modalbuy" class="btn btn-warning text-light col-10" style="margin: 0 auto;width: 100%;margin-left: 1.15rem;display: block; margin-bottom: 20px; position:absolute; bottom: 0; background-color: #dc3545!important; border-color: #dc3545!important;">Купить</button>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5 row marginFor1cv8">
            <div class="col-md-12 col-12 headings-1cv8">
                <div class="row block-line">
                    <div class="col-md-auto col-12">
                        <div style="position: absolute; top: -70px" id="price"></div><!--якорь-->
                        <h2><!-- <?php the_title(); ?> -->Вместе с онлайн кассами у нас покупают</h2>
                    </div>
                    <div class="col">
                        <div class="line">&nbsp;</div>
                    </div>
                </div>
            </div>
            <!--            <div class="col-md-12 col-12 headings-1cv8">-->
            <!--                <div class="row block-link-1cv8">-->
            <!--                    <div class="col-md-auto col-12">-->
            <!--                        <h3><a data-toggle="collapse" href="#collapseExample1" aria-expanded="false"-->
            <!--                               aria-controls="collapseExample"><!-- --><?php //the_title(); ?><!-- -->
            <!--            Вместе с ОНЛАЙН-КАССАМИ у-->
            <!--                                нас покупают <i-->
            <!--                                        class="fas fa-caret-down"></i></a>-->
            <!--                        </h3>-->
            <!--                    </div>-->
            <!--                    <div class="col">-->
            <!--                        <div class="line">&nbsp;</div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="collapse mx-auto" id="collapseExample1">-->
            <div class="container link-decoration-none">
                <h3 class="my-4 text-center"></h3>
                <div class="col-12 row mx-auto">
                    <div class="col-md-4 col-12 border p-4">
                        <a href="<?php echo get_site_url(); ?>/torgovoe-oborudovanie/" target="_blank">
                            <h5 class="mb-3">Торговое оборудование</h5>
                            Мы предлагаем Вам широкий ассортимент контрольно-кассовой техники, онлайн-кассы,
                            терминалы сбора данных, смарт-терминалы, мобильные терминалы, сканеры штрих-кодов,
                            принтеры этикеток, компьютерная техника. При клике на данный раздел ссылка должна вести
                            на страницу торговое оборудование
                            <div class="text-right">
                                <i class="fas fas fa-balance-scale fa-3x"
                                   style="color: #c40700;margin-top: -2px;margin-bottom: -20px;"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-12 border p-4">
                        <a href="<?php echo get_site_url(); ?>/services/1s-buhgalteriya-8/" target="_blank">
                            <h5 class="mb-3">1С:Бухгалтерия 8</h5>
                            Готовый комплект автоматизированных решений для ведения бухгалтерского и налогового
                            учета и составления всех видов отчётности.
                            <div class="text-right">
                                <i class="fas fa-calculator fa-3x"
                                   style="color: #d29400;margin-top: 118px;margin-bottom: -20px;"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-12 border p-4">
                        <a href="<?php echo get_site_url(); ?>/services/1s-upravlenie-torgovley-8/" target="_blank">
                            <h5 class="mb-3">1С:Управление торговлей 8</h5>
                            Готовое программное решение для эффективного управления предприятием, позволяющее в
                            автоматическом режиме производить оперативный учёт, анализ и планирование различных
                            торговых операций.
                            <div class="text-right">
                                <i class="fas fa-cogs fa-3x"
                                   style="color: #15d279;margin-top: 70px;margin-bottom: -20px;"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 row mx-auto mt-5">

                    <div class="col-md-4 col-12 border p-4">
                        <a href="<?php echo get_site_url(); ?>/services/1c-obnovlenie-programm/" target="_blank">
                            <h5 class="mb-3">1С:Обновление Программ</h5>
                            Мы обеспечиваем быстрое и качественное обновление наиболее актуальных версий
                            используемого программного обеспечения, в соответствии с последними изменениями
                            законодательства.
                            <div class="text-right">
                                <i class="far fa-address-card fa-3x"
                                   style="color: #007dd2;margin-top: 24px;margin-bottom: -20px;"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-12 border p-4">
                        <a href="<?php echo get_site_url(); ?>/services/1s-edo-3/" target="_blank">
                            <h5 class="mb-3">1С:ЭДО</h5>
                            Уникальный web-интерфейс для формирования, подписания и обмена счетами-фактурами и
                            другими юридическими документами между поставщиками, покупателями и прочими
                            контрагентами в электронной форме прямо из программ «1С».
                            <div class="text-right">
                                <i class="fas fa-sitemap fa-3x"
                                   style="color: #d2177d;margin-top: 0px;margin-bottom: -20px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12 border p-4">
                    <a href="<?php echo get_site_url(); ?>/services/liniya-konsultatsiy/" target="_blank">
                        <h5 class="mb-3">Круглосуточная техническая поддержка 24/7</h5>
                        Мы поможем Вам разобраться в сервисах, программных обеспечениях 1С и настроить связь с
                        кассовым оборудованием. Мы работаем оперативно, профессионально и по выгодным ценам.
                        <div class="text-right">
                            <i class="fas fa-calendar-check fa-3x"
                               style="color: #a719bf;margin-top: 0px;margin-bottom: -20px;"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!--            </div>-->

            <!--                <div class="card card-block mt-4">-->
            <!--                    <table class="table table-hover table-responsive fa-check-style">-->
            <!--                        <thead>-->
            <!---->
            <!--                        </thead>-->
            <!--                        <tbody>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание1</th>-->
            <!--                            <td class="text-center"></td>-->
            <!--                            <td class="text-center">4 800</td>-->
            <!--                            <td class="text-center">-->
            <!--                                <button class="btn btn-buy">Купить</button>-->
            <!--                            </td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание2</th>-->
            <!--                            <td class="text-center">+3 часа</td>-->
            <!--                            <td class="text-center">13 000</td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание3</th>-->
            <!--                            <td class="text-center">+5 часов</td>-->
            <!--                            <td class="text-center">33 600</i></td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание4</th>-->
            <!--                            <td class="text-center">+5 часов</td>-->
            <!--                            <td class="text-center">26 500</i></td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание5</th>-->
            <!--                            <td class="text-center"></td>-->
            <!--                            <td class="text-center">4 800</i></td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание6</th>-->
            <!--                            <td class="text-center"></td>-->
            <!--                            <td class="text-center">300</i></td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание7</th>-->
            <!--                            <td class="text-center"></td>-->
            <!--                            <td class="text-center">18 000</i></td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание8</th>-->
            <!--                            <td class="text-center">+3 часа</td>-->
            <!--                            <td class="text-center">4 800</td>-->
            <!--                            <td class="text-center"></td>-->
            <!--                        </tr>-->
            <!--                        </tbody>-->
            <!--                    </table>-->
            <!--                </div>-->
        </div>
        <div class="col-12 mt-5 row">
            <div class="col-md-12 col-12 headings-1cv8">
                <div class="row block-line">
                    <div class="col-md-auto col-12">
                        <div style="position: absolute; top: -70px" id="price"></div><!--якорь-->
                        <h2><!-- <?php the_title(); ?> -->Актуальная информация по работе с онлайн-кассами</h2>
                    </div>
                    <div class="col">
                        <div class="line">&nbsp;</div>
                    </div>
                </div>
            </div>
            <!--            <div class="col-md-12 col-12 headings-1cv8">-->
            <!--                <div class="row block-link-1cv8">-->
            <!--                    <div class="col-md-auto col-12">-->
            <!--                        <h3><a data-toggle="collapse" href="#collapseExample2" aria-expanded="false"-->
            <!--                               aria-controls="collapseExample"><!-- --><?php //the_title(); ?><!-- -->
            <!--            Актуальная информация по-->
            <!--                                работе с ОНЛАЙН-КАССАМИ <i-->
            <!--                                        class="fas fa-caret-down"></i></a>-->
            <!--                        </h3>-->
            <!--                    </div>-->
            <!--                    <div class="col">-->
            <!--                        <div class="line">&nbsp;</div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
<!--            <div class="collapse mx-auto" id="collapseExample2">-->
                <div class="container col-9 row no-gutters justify-content-center mx-auto">
                    <?php
                    $args = array('category_name' => 'novosti-onlayn-kassa-pod-klyuch', 'post_type' => 'post', 'numberposts' => '4');
                    $postslist = get_posts($args);
                    foreach ($postslist as $key => $post): setup_postdata($post);
                        ?>
                        <div class="p-md-5 p-0 pt-md-0 pt-5 col-lg-6 col-md-6 col-12 block-child">
                            <a class="link-news" href="<?php the_permalink() ?>">
                                <div class="media shadow-news service-content-wrapper">

                                    <div class="block-color">
                                <span class="service-font-icon fas"><img class="img-fluid"
                                                                         src="<?php the_post_thumbnail_url(); ?>"></span>
                                    </div>
                                    <div class="media-body p-3">
                                        <h5 class="h5"><?php the_title() ?></h5>
                                        <div class="service-description-wrapper"><?php the_excerpt() ?></div>
                                        <div class="more-link"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!--<div class="col-lg-4 col-sm-9 child <?= $key == 2 ? 'col-md-12' : 'col-md-6'; ?>">
                        <div class="row">
                            <div class="col-12 <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-img <?= $key == 2 ? 'float-md-left' : ''; ?> scrollme">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Img"
                                    class="animateme"
                                    data-when="enter"
                                    data-from="0.6"
                                    data-to="0"
                                    data-opacity="0"
                                    data-rotatex="-90"
                                    data-rotatey="90"
                                    data-rotatez="-90"
                                    >
                                    <div class="arrow">
                                        <i class="fa fa-arrows-v"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 <?= $key == 1 ? 'order-first' : ''; ?> <?= $key == 2 ? 'col-md-6 col-lg-12' : ''; ?>">
                                <div class="block-text">
                                    <p class="data"><?php echo get_the_date('d.m.Y  G:i'); ?></p>
                                    <div class="content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="float-right">далее</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>


            <!--                <div class="card card-block mt-4">-->
            <!--                    <table class="table table-responsive fa-check-style">-->
            <!--                        <thead>-->
            <!--                        <tr>-->
            <!--                            <th scope="col"></th>-->
            <!--                            <th scope="col" class="text-center">БАЗОВАЯ</th>-->
            <!--                            <th scope="col" class="text-center">ПРОФ</th>-->
            <!--                            <th scope="col" class="text-center">КОРП</th>-->
            <!--                        </tr>-->
            <!--                        </thead>-->
            <!--                        <tbody>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание1</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание2</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание3</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание4</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание5</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание6</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание7</th>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание8</th>-->
            <!--                            <td class="text-center"><i class="fas fa-times" style="color: #c5c3c5"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание9</th>-->
            <!--                            <td class="text-center"><i class="fas fa-times" style="color: #c5c3c5"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-times" style="color: #c5c3c5"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        <tr>-->
            <!--                            <th scope="row">ОписаниеОписаниеОписаниеОписание10</th>-->
            <!--                            <td class="text-center"><i class="fas fa-times " style="color: #c5c3c5"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                            <td class="text-center"><i class="fas fa-check"></i></td>-->
            <!--                        </tr>-->
            <!--                        </tbody>-->
            <!--                    </table>-->
            <!--                </div>-->
        </div>
        </div>


        <div class="bg-lightgray">
            <div class="col-12 mt-5 row marginFor1cv8">
                <div class="col-md-12 col-12 headings-1cv8">
                    <div class="row block-line">
                        <div class="col-md-auto col-12 mt-3">
                            <div style="position: absolute; top: -70px" id="services"></div><!--якорь-->
                            <h3><!-- <?php the_title(); ?> -->Как начать работу с ОНЛАЙН-КАССОЙ?</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-md-5 mx-auto text-justify">
                <div class="col-md-6 col-12 pr-md-5">
                    <div class="triangle-gradient-border">
                        <div class="left-right-border" style="margin-bottom: 7rem">
                            <h3 class="headings-1cv8 text-left">
                                <i class="far fa-comments fa-2x mr-4" style="color: #f39613"></i>1. Оставить заявку</h3>
                            Для Заявки Вам необходимо лишь оставить свой контактный номер телефона или электронный адрес
                            E-mail. Мы обязательно свяжемся с Вами в максимально короткие сроки и расскажем всё по
                            Вашему вопросу.
                        </div>
                    </div>
                    <div class="triangle-gradient-border my-5">
                        <div class="left-right-border">
                            <h3 class="headings-1cv8 text-left"><i class="fas fa-mobile-alt fa-2x mr-4"
                                                                   style="color: #f39613"></i>3. Подключить сервис услуг по
                                работе с Онлайн-Кассой</h3>
                            Мы поможем Вам быстро и качественно настроить Онлайн-Кассу и подключить необходимые для
                            ведения Вашего бизнеса программные сервисные приложения.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 pl-md-5 mt-5 mt-md-0">
                    <div class="triangle-gradient-border">
                        <div class="left-right-border" style="margin-bottom: 7rem">
                            <h3 class="headings-1cv8 text-left"><i class="fas fa-laptop fa-2x mr-4"
                                                                   style="color: #f39613"></i>2. Приобрести Онлайн-Кассу
                            </h3>
                            <p>Мы осуществляем быструю доставку в любой регион России. <br></p>
                        </div>
                    </div>
                    <div class="triangle-gradient-border my-5">
                        <div class="left-right-border">
                            <h3 class="headings-1cv8 text-left"><i class="far fa-handshake fa-2x mr-4"
                                                                   style="color: #f39613"></i>4. Начать продавать вместе с
                                Онлайн-Кассой</h3>
                            Правильно выбранная Онлайн-Касса и качественный сервис с информационно-техническим
                            обеспечением – успешный залог РОСТА Вашего БИЗНЕСА!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="callback-discount"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/callGirl.png'); height: 470px; max-width: 100%">
            <div class="col-xl-3 col-lg-3 col-md-4 col-12 ml-md-5 ml-0">
                <div class="callback-discount-form callback-form text-light">
                    <div class="col-12 text-center pt-2">
                        <h3>СКИДКА 20% <br> до конца месяца</h3>
                    </div>
                    <div class="col-12 text-center my-3">
                        <h4>Оставьте свой контакт <br> и наш оператор свяжется с Вами</h4>
                    </div>
                    <div class="col-12 mt-2">
                        <?php echo do_shortcode('[contact-form-7 id="990" title="Форма скидка 20% до конца месяца"]') ?>
                    </div>
                    <p class="text-center" style="font-size: 10px; color: #8a8f94">*Количество предложений ограничено.
                        <br> Подробности узнавайте у оператора</p>
                </div>
            </div>
        </div>
        <div>
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A495f272bbabea4c4a7573751738bb4b2435f2d2d97938957efa76a3d5d2beaba&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
        <div class="container-fluid" style="background-color: #f5f5f5">
            <div class="col-md-12 col-sm-12 col-12 callback-form">
                <div class="col-12 row marginFor1cv8">
                    <div class="col-md-12 col-12 headings-1cv8">
                        <div class="row block-line">
                            <div class="col-12 text-center">
                                <h3 class="mt-4">Остались вопросы? Мы будем рады все объяснить!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-12 mx-auto">
                        <?php echo do_shortcode('[contact-form-7 id="989" title="Остались вопросы? Будем рады все объяснить!"]') ?>
                        <!--<input class="form-control mt-4 col-8" type="" name="" placeholder="Имя">
                        <input class="form-control mt-2 col-8" type="" name="" placeholder="E-mail или телефон">
                        <button type="button" class="mt-2 col-8 btn btn-warning">Отправить</button>-->
                    </div>
                </div>
            </div>


    </section>
<?php get_footer(); ?>

        <!-- Modal -->
        <div class="modal fade" id="Modalbuy" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode( '[contact-form-7 id="992" title="Форма в модали бесплатная консультация"]' ) ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
