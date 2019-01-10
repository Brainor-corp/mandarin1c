<?php
/**
 * Страница Программное обеспечение
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница Калькулатор
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
                                    <div class="container page-software">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="row">
                                                    <?php
                                                    global $wpdb;
                                                    $tableS = $wpdb->get_blog_prefix().'bmcalc_services';
                                                    $tableP = $wpdb->get_blog_prefix().'bmcalc_packages';
                                                    $tableR = $wpdb->get_blog_prefix().'bmcalc_package_service';
                                                    $sql = '
                            SELECT 
                            S.id,
                            S.name,
                            S.order_id,
                            S.description,
                            S.price,
                            S.need_quantity,
                            S.url,
                            S.icon_class,
                            S.icon_path,
                            S.color,
                            group_concat("{\"id\":\"",P.id,"\",\"name\":\"",P.name,"\",\"priority\":\"",IFNULL(P.priority, "NULL"),"\",\"description\":\"",IFNULL(P.description, "NULL"),"\",\"icon_class\":\"",IFNULL(P.icon_class, "NULL"),"\",\"icon_path\":\"",IFNULL(P.icon_path, "NULL"),"\",\"required\":\"",R.required,"\"}") as packages 
                            from '.$tableS.' S
                            LEFT JOIN '.$tableR.' R on R.service_id = S.id
                            LEFT JOIN '.$tableP.' P on R.package_id = P.id
                            GROUP BY S.id
                            ORDER BY S.order_id';
                                                    $services = $wpdb->get_results( $sql , ARRAY_A );

                                                    $sql = "SELECT * from `$tableP` ORDER BY `name` ";
                                                    $packages = $wpdb->get_results( $sql , ARRAY_A );
                                                    ?>
                                                    <?php foreach($services as $service): ?>
                                                        <div class="col-lg-6 col-md-10 col-sm-10 block-child">
                                                            <label class="service-calculator-label" for="service-calculator-checkbox-<?php echo $service['id']; ?>">
                                                                <div class="media service-content-wrapper"  style="
                                                                <?php if(isset($service['color'])): ?>
                                                                        border-bottom: 5px solid <?php echo $service['color']; ?>;
                                                                <?php else: ?>
                                                                        border-bottom: 5px solid #dc3545;
                                                                <?php endif; ?>">>

                                                                    <div class="block-color" style="
                                                                    <?php if(isset($service['color'])): ?>
                                                                            background-color:<?php echo $service['color']; ?>;
                                            <?php else: ?>
                                                                            background-color:#dc3545;
                                                                    <?php endif; ?>">
                                                                        <?php if(isset($service['icon_path'])): ?>
                                                                            <?php if ($service['icon_path'] !== ''): ?>
                                                                                <img src="<?php echo $service['icon_path']; ?>" alt="Img">
                                                                            <?php else: ?>
                                                                                <span class="service-font-icon fas fa-database"></span>
                                                                            <?php endif; ?>
                                                                        <?php elseif(isset($service['icon_class'])): ?>
                                                                            <span class="service-font-icon <?php echo $service['icon_class']; ?>"></span>
                                                                        <?php else: ?>
                                                                            <span class="service-font-icon fas fa-database"></span>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="h5"><?php echo $service['name']; ?></h5>
                                                                        <div class="service-description-wrapper"><?php echo $service['description']; ?></div>
                                                                        <div class="service-price-wrapper"><?php echo $service['price']; ?> <span class="fas fa-ruble-sign"></span></div>
                                                                        <div class="service-packages-wrapper">
                                                                            <?php
                                                                            $servicePackages = json_decode('['.$service['packages'].']',true);
                                                                            ?>
                                                                            <?php if(count($servicePackages)>0):?>
                                                                                <h6>Входит в пакеты:</h6>
                                                                                <?php foreach($servicePackages as $servicePackage):?>
                                                                                    <div>
                                                                                        <span class="service-package-name"><?php echo $servicePackage['name'];?></span>
                                                                                        <?php if($servicePackage['required'] == 1):?>
                                                                                            <span class="service-package-required s-<?php echo $service['id'];?>-p-r p-<?php echo $servicePackage['id'];?>-r" data-required-package-name="<?php echo $servicePackage['name'];?>" data-required-package-id="<?php echo $servicePackage['id'];?>" data-required-service-id="<?php echo $service['id'];?>">(Обязательное)</span>
                                                                                        <?php endif;?>
                                                                                    </div>
                                                                                <?php endforeach;?>
                                                                            <?php endif;?>
                                                                        </div>
                                                                        <?php if(isset($service['url'])): ?>
                                                                            <?php if($service['url'] !== ''): ?>
                                                                                <div class="more-link"><a href="<?php echo $service['url']; ?>" target="_blank">Подробнее</a></div>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <input type="checkbox" id="service-calculator-checkbox-<?php echo $service['id']; ?>" class="service-calculator-checkbox" data-service-calculator-id="<?php echo $service['id']; ?>" data-service-calculator-price="<?php echo $service['price']; ?>" data-service-calculator-name="<?php echo $service['name']; ?>">
                                                                </div>
                                                            </label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 sticky-wrapper">
                                                <div class="row sticky">
                                                    <div class="col-xs-12 block-child sticky-inner">
                                                        <div class="media service-content-wrapper"  style="border-bottom: 5px solid #dc3545;">
                                                            <div class="block-color" style="background-color:#dc3545;">
                                                                <span class="service-font-icon fas fa-calculator"></span>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="h5">Калькулятор стоимости</h5>
                                                                <div class="calculator-services-count"><span>Выбрано услуг: </span><span id="calculator-services-count-value">0</span></div>
                                                                <div class="calculator-services-total"><span>Итого: </span><span id="calculator-services-total-value">0</span> <span class="fas fa-ruble-sign"></span></div>
                                                                <div class="calculator-services-all-packages"></div>
                                                                <button type="button" class="btn btn-success calculator-offer-btn" data-toggle="modal" data-target="#calculator-offer-modal">Предзаказ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="calculator-offer-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form role="form" method="post" action="/wp-content/themes/its34_brainMedia_v_3.0/send-calculate.php" id="calculatorForm">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Детали заказа</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="fio">ФИО</label>
                                                            <input type="text" class="form-control" id="fio" name="fio" placeholder="Иванов Иван Иванович" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tel">Телефон</label>
                                                            <input type="text" class="form-control" id="tel" name="tel" placeholder="+7(888)888-88-88" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.ru">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Выбранные услуги</label>
                                                            <div class="row" id="modal-selected-services">
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="services[]['name']" value="" disabled="disabled">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="text" class="form-control" name="services[]['price']" value="" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Итого</label>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <span class="calculator-offer-span">Услуг: </span><input type="text" class="form-control" id="calculator-modal-services-count-value" name="service_count" value="0" disabled="disabled">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <span class="calculator-offer-span">Сумма: </span> <input type="text" class="form-control" id="calculator-modal-services-total-value" name="service_total" value="0" disabled="disabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="pda">
                                                                <input type="checkbox" id="pda" name="pda" required> Согласен(-на) на обработку моих данных
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="alert d-none" role="alert" id="ajaxResult">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить выбор</button>
                                                        <button type="submit" class="btn btn-success" id="submitButton">Отправить</button>
                                                    </div>
                                                </form>
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