<?php /* Template Name: Внешняя реферальная система  */ ?>
<?php get_header(bonus); ?>

<section class="referral">
<section class="referral__slide">
    <div class="site__container">
        <div class="row">
            <div class="col-lg-5 hidden-lg hidden-md hidden-sm">
                <div class="referral__image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/header_image.svg" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-8">
                <div class="referral__heading">
                    <h1><?php the_title(); ?></h1>
                    <p>Это хороший шанс помочь своим талантливым друзьям получить отличные возможности для карьерного роста, порекомендовав их в Usetech, даже не будучи сотрудником компании (и получить за это весомый бонус)!</p>
                    <a href="#send-form" class="btn btn-success btn-top">Рекомендовать друга</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="referral__about">
    <div class="site__container">
        <h2>Рекомендуй друга</h2>
        <div class="row">
            <div class="col-lg-9">
                <p>Принять участие в программе <strong>«Пригласи друга в Usetech»</strong> может любой человек, не
                являющийся сотрудником компании. Бывшие сотрудники Usetech участвуют в программе
                на общих основаниях. Но прежде, чем предоставлять персональные данные кандидата,
                пожалуйста, убедитесь в том, что у вас есть согласие кандидата, хотя бы устное, на
                обработку этой личной информации компанией Usetech.</p>

                <p>Порекомендовать кандидата вы можете, заполнив форму обратной связи, представленную ниже.</p>
<!--                <p>Порекомендовать кандидата вы можете, отправив письмо с информацией по форме,-->
<!--                представленной ниже, на почту <a href="mailto:referral@usetech.ru">referral@usetech.ru</a> или на почту знакомого вам рекрутера-->
<!--                Usetech. В будущем к этому добавится возможность заполнить форму на карьерном-->
<!--                сайте.</p>-->

                <p>После получения рекомендации, мы в течение 24 часов ответим на ваше письмо и сообщим, принята ли рекомендация и каковы сроки выплаты бонуса в случае найма кандидата*.</p>

                <blockquote><strong>ВАЖНО!</strong> Хотим обратить ваше внимание, что кандидат, которого вы рекомендуете, <b>должен быть заинтересован присоединиться к нашей команде</b> (вам необходимо предварительно связаться с ним, предупредить о том, что в будущем с ним свяжется рекрутер Usetech, и заручиться готовностью конструктивно общаться о сотрудничестве), также вы должны знать его лично. Рекомендация действует - <b>в течение 3-х месяцев</b>.</blockquote>


            </div>

        </div>
    </div>
</section>
    <section class="referral__size">
        <div class="site__container">
            <h2>Размер бонуса за рекомендацию</h2>
            <div class="row">
                <div class="col-lg-9">
                    <p>Размер бонуса за успешную рекомендацию зависит от уровня закрытой <a href="/vacancy/" target="_blank" title="Вакансии компании Юзтех">вакансии:</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="referral__level">
                        <div class="referral__skill">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                        </div>
                        <h4>Уровень "Middle"</h4>
                        <h3>30 000 руб.</h3>
                        <a href="#send-form" class="btn btn-success btn-top">Рекомендовать</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="referral__level">
                        <div class="referral__skill">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                        </div>
                        <h4>Уровень "Senior"</h4>
                        <h3>45 000 руб.</h3>
                        <a href="#send-form" class="btn btn-success btn-top">Рекомендовать</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="referral__level">
                        <div class="referral__skill">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/referral/skill.svg" alt="">
                        </div>
                        <h4>Уровень "Team Lead"</h4>
                        <h3>60 000 руб.</h3>
                        <a href="#send-form" class="btn btn-success btn-top">Рекомендовать</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3">
                    <div class="referral__level">
                        <div class="referral__skill">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flame.svg" alt="">
                        </div>
                        <h4>Вакансия с огоньком</h4>
                        <h3 class="referral__hot">+ 10 000 руб.</h3>
                        <a href="#send-form" class="btn btn-success btn-top">Рекомендовать</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote><strong>Важно!</strong>На кандидатов уровня <span>«Junior»</span> реферальная система не распространяется.</blockquote>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="referral__level deadlines">
                        <h3>*Сроки выплаты бонуса за рекомендацию</h3>
                    <ul>
                        <li>50% суммы вы получите после 1 месяца работы кандидата</li>
                        <li>50% суммы вы получите после успешного завершения испытательного срока сотрудника</li>
                    </ul>
                    <p>Если вы помогли закрыть вакансию с пометкой «<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flame.svg" alt=""> HOT», вы также дополнительно
                        получаете 5 000 руб. в момент выхода сотрудника на работу и 5 000 руб. по завершению
                        испытательного срока.</p>
                    <h3>Денежный бонус не будет выплачиваться</h3>
                    <ul>
                        <li>Если рекрутеры компании уже работают с кандидатом или работали ранее в
                            течение последних 3 месяцев или</li>
                        <li>Если по итогам технического интервью кандидат будет оценен на уровень ниже
                            «middle»</li>
                    </ul>
                    <blockquote><strong>Важно!</strong>Если кандидат проработает в Usetech менее 3-х месяцев, вторая часть бонуса выплачена не будет.</blockquote>
                        <p class="referral__small">Денежный бонус рекомендателю выплачиваться только в безналичной форме по реквизитам любого банка, действующего на территории России, и указанным в Договоре гражданско-правового характера, предварительно заключаемым с рекомендателем. Перед выплатой с вами свяжется рекрутер и запросит информацию для заключения Договора.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="referral__faq">
        <div class="site__container">
            <h2>Часто задаваемые вопросы</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="refferal__faq__item">
                        <h3>Кого можно порекомендовать?</h3>
                        <p>Вы можете рекомендовать только человека, которого знаете лично, с которым вы
                            предварительно связались, предупредили о том, что в будущем с ним свяжется рекрутер
                            Usetech, и заручились интересом и готовностью конструктивно общаться о
                            сотрудничестве. Нам нужны самые лучшие, т.к. мы строим команду звезд!</p>
                    </div>
                    <div class="refferal__faq__item">
                        <h3>Как я узнаю, что мой кандидат устроился в компанию?</h3>
                        <p>Мы выстраиваем максимально прозрачную систему. В любой момент вы можете запросить у рекрутера обратную связь по кандидату.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="refferal__faq__item">
                        <h3>Где я могу узнать об открытых вакансиях?</h3>
                        <p>На карьерном <a href="/vacancy/" target="_blank">сайте</a>. Помните, пожалуйста, что на вакансии уровня «Junior» данная система не распространяется.</p>
                    </div>
                    <div class="refferal__faq__item">
                        <h3>Что значит пометка «HOT»</h3>
                        <p>С пометкой «HOT» публикуются «горящие» вакансии, которые необходимо закрыть в
                            самые короткие сроки. За успешное закрытие такой вакансии вы получаете +10.000 руб.</p>
                    </div>
                    <div class="refferal__faq__item">
                        <h3>У меня есть вопрос, на который я не нахожу здесь ответа, как мне его задать?</h3>
                        <p>Напишите на почту <a href="mailto:referral@usetech.ru">referral@usetech.ru</a>, и мы обязательно вам ответим!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="referral__send-form" id="send-form">
        <div class="site__container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Рекомендуйте друга</h2>
                    <div class="referral__form">
                        <?php echo do_shortcode('[contact-form-7 id="1390" title="Форма рекомендации друга"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<!--Отклик на вакансию-->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="referral__close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Порекомендуй друга</h4>
                <p class="feedback-notes">Поля, помеченные <span>*</span>, обязательны к заполнению.</p>
            </div>
            <div class="modal-body">
                <div class="modal-form">
<!--                    --><?php //echo do_shortcode('[contact-form-7 id="1390" title="Форма рекомендации друга"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(bonus); ?>
