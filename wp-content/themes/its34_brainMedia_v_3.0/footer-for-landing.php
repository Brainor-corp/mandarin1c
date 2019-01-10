<!--футер-->
<footer>

    <div class="container nav-container">
        <div class="row my-md-5 my-0 justify-content-around">
            <div class="col-md-auto mb-4 col-12 text-md-right text-center">
                ООО"ИнформТехСервис"<br>
                улица Михаила Балонина, 2А, <br>
                Волгоград, Россия, 400066
            </div>
            <div class="col-md-auto mb-4 col-12 text-center decoration-none">
                <a class="text-dark" href="tel:+78442781050">+7(8442)78-10-50,</a><br>
                <a class="text-dark" href="tel:+79616919960">+7(961)691-99-60</a>
            </div>
            <div class="col-md-auto mb-4 col-12 text-center decoration-none">
                <a class="text-danger" href="mailto:its@itservis1c.ru">its@itservis1c.ru</a>
            </div>
            <div class="col-md-auto col-12 decoration-none text-center">
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/about-us">О нас</a>
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/products">Тарифы</a>
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/catalog">Каталог</a>
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/stati">Новости</a>
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/calculator">Калькулятор</a>
                <a class="text-dark mr-2" href="<?php echo get_site_url(); ?>/contacts">Контакты</a>
            </div>
        </div>
    </div>


    <div class="modal fade margin-banner" id="Modalfree" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Бесплатная консультация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="991" title="Форма в модали бесплатная консультация"]') ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'> (function () {
            var widget_id = 'B98YwYCwU2';
            var d = document;
            var w = window;

            function l() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//code.jivosite.com/script/widget/' + widget_id;
                var ss = document.getElementsByTagName('script')[0];
                ss.parentNode.insertBefore(s, ss);
            }

            if (d.readyState == 'complete') {
                l();
            } else {
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })(); </script> <!-- {/literal} END JIVOSITE CODE -->

    <?php wp_footer(); ?>
    <!--    <script src="-->
    <?php //echo get_template_directory_uri(); ?><!--/ITS-new/plugins/jquery/jquery-3.3.1.min.js"></script>-->
    <!--    <script src="-->
    <?php //echo get_template_directory_uri(); ?><!--/ITS-new/js/bootstrap/bootstrap.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/ITS-new/js/inside-page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/ITS-new/js/general.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/ITS-new/plugins/aos/js/aos.js"></script>
</footer>
<!--футер-->