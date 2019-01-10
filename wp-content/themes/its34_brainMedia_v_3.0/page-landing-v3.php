<?php
/**
 * Лендинг v3.0
 * @package WordPress
 * @subpackage its34_brainMedia_v_2.0
 * Template Name: Лендинг v3.0
 */
?>

<?php get_header('for-landing') ?>

<!--банер-->
<div class="container-fluid border-banner margin-banner">
    <div class="container nav-container">

        <div class="row banner">
            <div class="col-md-10 col-12 text-md-left text-center">
                <h2>1с ОБЛАКО - это отличное решение
                    для ведения бухгалтерии, как для малого бизнеса,
                    так и для крупных компаний
                </h2>
                <h4 class="mt-5 mb-5">Онлайн отчетность, расчет зарплат, электронная подпись и многое другое.</h4>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-10 col-10 my-2 action rounded row align-items-center d-sm-flex d-none mx-md-3 mx-auto">
                <div class="col-auto text-center action-red rounded-left">
                    <div class="action-text"><h4>АКЦИЯ</h4></div>
                </div>
                <div class="action-red-arrow"></div>
                <div class="text-left">Первый месяц - <b>бесплатно</b></div>
            </div>
            <div class="col-12 px-0">
                <?php echo do_shortcode('[contact-form-7 id="1047" title="Landing-form v.3.0"]')?>
            </div>
        </div>
    </div>
</div>
<!--банер-->


<!--контент-->
<div class="container-fluid border-content">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 my-5">
                <h1>Чем хорош сервис 1с?</h1>
            </div>
                <div class="col-lg-3 col-md-6 col-12 col-12 my-5">
                    <b>Контролируйте свой бизнес из любой точки</b>
                    <div class="mt-3">
                        Работайте везде, где есть интернет – на компьютере или смартфоне.

                        Выставляйте счета клиентам и принимайте онлайн-платежи на ходу.
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-12 my-5">
                    <b>Качество и надежность от фирмы «1С»</b>
                    <div class="mt-3">
                        Более 30 лет фирма «1С» разрабатывает программы для учета и сдачи отчетности.
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-12 my-5">
                    <b>Специально для предпринимателей</b>
                    <div class="mt-3">
                        Вы можете вести учет сами – не нужно знать бухучет и специальные термины.

                        Круглосуточная поддержка 24/7
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-12 my-5">
                    <b>Программа сама рассчитает налоги, напомнит о сроках сдачи отчетности и сформирует отчеты.</b>
                    <div class="mt-3">
                        Сдавайте отчетность в налоговую через Интернет, не выходя из дома.
                    </div>
                </div>
            <div class="col-12">
                <div class="col-12 mx-auto text-center my-5">
                    <button class="btn btn-danger" href="#" data-toggle="modal" data-target="#Modalfree">Попробовать бесплатно</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid border-content">
    <div class="container">

    </div>
</div>


<!--<div class="container-fluid bg-tariffs">-->
<!--    <div class="container">-->
<!--        <div class="row text-center">-->
<!--            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt-5">-->
<!--                <div class="w-100 bg-white rounded">-->
<!--                    <div class="pt-5">Название 1</div>-->
<!--                    <div class="my-3">-->
<!--                        <h5>Название тарифа 2</h5>-->
<!--                    </div>-->
<!--                    <div class="my-4 align-items-center px-2">-->
<!--                        <div class="text-center font-weight-bold mx-auto yellow-block-flag">-->
<!--                            <div class="price">От 1500 руб. в месяц</div>-->
<!--                        </div>-->
<!--                        <div class="yellow-block-white-arrow-right"></div>-->
<!--                    </div>-->
<!--                    <div class="my-5">-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                    </div>-->
<!--                    <div class="mb-5 pb-5 px-3">-->
<!--                        <button class="btn btn-danger w-100" href="#" data-toggle="modal" data-target="#Modalfree">Попробовать бесплатно</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt-5">-->
<!--                <div class="w-100 bg-white rounded">-->
<!--                    <div class="pt-5">Название 1</div>-->
<!--                    <div class="my-3">-->
<!--                        <h5>Название тарифа 2</h5>-->
<!--                    </div>-->
<!--                    <div class="my-4 align-items-center px-2">-->
<!--                        <div class="text-center font-weight-bold mx-auto yellow-block-flag">-->
<!--                            <div class="price">От 1500 руб. в месяц</div>-->
<!--                        </div>-->
<!--                        <div class="yellow-block-white-arrow-right"></div>-->
<!--                    </div>-->
<!--                    <div class="my-5">-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                    </div>-->
<!--                    <div class="mb-5 pb-5 px-3">-->
<!--                        <button class="btn btn-danger w-100" href="#" data-toggle="modal" data-target="#Modalfree">Попробовать бесплатно</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt-5">-->
<!--                <div class="w-100 bg-white rounded">-->
<!--                    <div class="pt-5">Название 1</div>-->
<!--                    <div class="my-3">-->
<!--                        <h5>Название тарифа 2</h5>-->
<!--                    </div>-->
<!--                    <div class="my-4 align-items-center px-2">-->
<!--                        <div class="text-center font-weight-bold mx-auto yellow-block-flag">-->
<!--                            <div class="price">От 1500 руб. в месяц</div>-->
<!--                        </div>-->
<!--                        <div class="yellow-block-white-arrow-right"></div>-->
<!--                    </div>-->
<!--                    <div class="my-5">-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                    </div>-->
<!--                    <div class="mb-5 pb-5 px-3">-->
<!--                        <button class="btn btn-danger w-100" href="#" data-toggle="modal" data-target="#Modalfree">Попробовать бесплатно</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-lg-6 col-md-6 col-12 mt-5">-->
<!--                <div class="w-100 bg-white rounded">-->
<!--                    <div class="pt-5">Название 1</div>-->
<!--                    <div class="my-3">-->
<!--                        <h5>Название тарифа 2</h5>-->
<!--                    </div>-->
<!--                    <div class="my-4 align-items-center px-2">-->
<!--                        <div class="text-center font-weight-bold mx-auto yellow-block-flag">-->
<!--                            <div class="price">От 1500 руб. в месяц</div>-->
<!--                        </div>-->
<!--                        <div class="yellow-block-white-arrow-right"></div>-->
<!--                    </div>-->
<!--                    <div class="my-5">-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                        особенности тарифа-->
<!--                    </div>-->
<!--                    <div class="mb-5 pb-5 px-3">-->
<!--                        <button class="btn btn-danger w-100" href="#" data-toggle="modal" data-target="#Modalfree">Попробовать бесплатно</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="container-fluid bg-month-free">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 my-4">
                <h1>Хотите месяц бесплатного использования?</h1>
            </div>
            <div class="col-12">
                <h2>Это просто как</h2>
                <h2>Раз -> Два -> Три</h2>
            </div>
            <div class="col-lg-4 col-md-12 col-12 my-4">
                <div class="w-100 bg-white boxshadow-cards rounded py-3">
                    <div class="my-4">
                        <img class="three-step-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/document.png" alt="">
                    </div>
                    <h4>Подайте заявку</h4>
                    <div class="my-4">
<!--                        Описание того что нужно сделать. <br>-->
<!--                        Четко и по делу.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 my-4">
                <div class="w-100 bg-white boxshadow-cards rounded py-3">
                    <div class="my-4">
                        <img class="three-step-img" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/key.png" alt="">
                    </div>
                    <h4>Загрузите или создайте базу</h4>
                    <div class="my-4">
<!--                        Описание того что нужно сделать. <br>-->
<!--                        Четко и по делу.-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 my-4">
                <div class="w-100 bg-white boxshadow-cards rounded py-3">
                    <div class="my-4">
                        <img class="three-step-img-calendar" src="<?php echo get_template_directory_uri(); ?>/ITS-new/img/calendar.png" alt="">
                    </div>
                    <h4>Работайте</h4>
                    <div class="my-4">
<!--                        Описание того что нужно сделать. <br>-->
<!--                        Четко и по делу.-->
                    </div>
                </div>
            </div>
            <div class="mb-5 mx-auto col-12">
                <button class="btn btn-danger w-25" href="#" data-toggle="modal" data-target="#Modalfree">Подать заявку</button>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row mb-5">
        <div class="col-12 my-5 text-center">
            <h1>Частые вопросы</h1>
        </div>
        <div class="col-12 question-row">
            <a class="text-dark collapsing" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
               aria-controls="collapseExample">
                <h5 class="collapse-symbol active-symbol">Можно ли загрузить свою базу?</h5>
            </a>
            <div class="collapse show" id="collapseExample1">
                <div class="card card-body mb-5">
                    Ответ: Да. Загрузить базу в сервис 1С:ГРМ можно с помощью dt-файла. Для загрузки базы создайте новое приложение или используйте уже существующее.
                </div>
            </div>
        </div>
        <div class="col-12 question-row">
            <a class="text-dark collapsing" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
               aria-controls="collapseExample">
                <h5 class="collapse-symbol answer-symbol">Если я хочу вернуться в локальную версию работы, как я могу выгрузить базу?</h5>
            </a>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body mb-5">
                    Ответ: Копия базы выгружается через личный кабинет, необходимо обратиться в ООО "ИТС".
                </div>
            </div>
        </div>
        <div class="col-12 question-row">
            <a class="text-dark collapsing" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
               aria-controls="collapseExample">
                <h5 class="collapse-symbol answer-symbol">Как происходит обновление базы и сколько это стоит?</h5>
            </a>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body mb-5">
                    Ответ: Обновление баз производит ООО "ИТС", без дополнительной платы.
                </div>
            </div>
        </div>
        <div class="col-12 question-row">
            <a class="text-dark collapsing" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
               aria-controls="collapseExample">
                <h5 class="collapse-symbol answer-symbol">Можно ли подключить торговое оборудование к 1С ГРМ?</h5>
            </a>
            <div class="collapse" id="collapseExample4">
                <div class="card card-body mb-5">
                    Ответ: Можно. С рекомендуемым списком поддерживаемого торгового оборудования вы можете ознакомиться по ссылкам:
                    <br>
                    <a href="http://v8.1c.ru/libraries/cel/certified.htm" target="_blank">http://v8.1c.ru/libraries/cel/certified.htm</a>
                    <a href="http://v8.1c.ru/libraries/cel/vs_drivers.htm" target="_blank">http://v8.1c.ru/libraries/cel/vs_drivers.htm</a>
                </div>
            </div>
        </div>
        <div class="col-12 question-row">
            <a class="text-dark collapsing" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
               aria-controls="collapseExample">
                <h5 class="collapse-symbol answer-symbol">Заканчивается демо-период, как мне перейти на платную версию?</h5>
            </a>
            <div class="collapse" id="collapseExample5">
                <div class="card card-body mb-5">
                    Ответ: Переход из демо-версии в платную будет происходить автоматически. 31-ый день использования базы будет считаться платным.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid callback-form-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h2>Остались вопросы? Мы будем рады всё объяснить!</h2>
            </div>
            <div class="col-8 mx-auto">
                <?php echo do_shortcode( '[contact-form-7 id="621" title="Форма обратной связи (подвал)"]' ) ?>
            </div>
        </div>
    </div>
</div>
<!--контент-->


</body>
<?php get_footer('for-landing') ?>
</html>