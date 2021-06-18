<?php get_header(); ?>
<!--<div class="slider">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="slider-image hidden-xs">-->
<!--                    <a href="/bonus/"><img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/banner/banner_referral_new.svg" alt=""></a>-->
<!--                </div>-->
<!--                <div class="slider-image hidden-lg hidden-md hidden-sm">-->
<!--                    <a href="/bonus/"><img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/banner/banner_referral_mobile_new.svg" alt=""></a>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<section class="slider">-->
<!--   <div class="main-slider">-->
<!--       <img src="{THEME}/images/main-slider.png" alt="">-->
<!--   </div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-5">-->
<!--                <div class="slider-header">-->
<!--                    <h1>Стань частью профессиональной команды Usetech!</h1>-->
<!--                    <a href="#" class="btn btn-success btn-top btn-pad">Присоединиться</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<?php include 'template-parts/top_slider.php'?>



<div class="container">
    <section class="vacancy">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Наши вакансии</h2>
                        <p>Мы постоянно растем, а это значит, у нас есть потребность в новых и перспективных кадрах! Загляните в этот раздел, может быть, Вы тот, кто нам нужен.</p>
                    </div>
                </div>

                <div class="vacancy-item">
                    <div class="row">

                        <?php
                        $args=array(
                            'category__in' => 3, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                            'showposts'=>9, //сколько показать статей
                            'orderby'=>data, //сортировка по дате
                            'caller_get_posts'=>1);
                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>


                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <div>
                                            <h3 class="hidden-sm hidden-xs"><?php trim_title_chars(30, '...'); ?></h3>
                                            <h3 class="hidden-md hidden-lg"><?php the_title(); ?></h3>
                                        </div>

                                        <div class="short-city">
                                            <div class="vacancy-exp">
                                                <strong>Опыт:</strong>
                                                <?php
                                                if(get_field('experience')){
                                                    echo get_field('experience')[label];
                                                }
                                                ?>
                                            </div>
                                            <div class="vacancy-city">
                                                <?php
                                                if(get_field('city')){
                                                    echo get_field('city');
                                                }
                                                ?><?php
                                                if ( in_category( '20' )) {
//                                                echo ", '<a href='/vacancy/remote/'>' удаленно '</a>''";
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            if ( in_category( '12' )) {
                                                echo "<img src='https://career.usetech.ru/wp-content/themes/usetech/images/flame.svg' title='Горящая вакансия, мы находимся в срочном поиске'>";
                                            }
                                            ?>
                                        </div>
                                    </a>
                                </div>
                            <?php } }
                        wp_reset_query(); ?>

                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="none-vacancy">
                            <span>Не нашли для себя подходящей вакансии? <a href="/contacts/#feedback-form">Напишите нам</a></span>
                            <a href="/vacancy/" class="button button-secondary">Смотреть все вакансии</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!--    <section class="about">-->
<!--        <div class="container">-->
<!--            <h2>О компании</h2>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-11">-->
<!--                    <p>Компания <strong>Usetech</strong> была основана в 2006 году, и за это время мы успешно реализовали и внедрили сотни проектов по разработке ПО на заказ. Мы предлагаем своим Заказчикам полный спектр услуг в области заказной разработки программного обеспечения, независимого тестирования и IT-консалтинга. Экспертные знания собственной предметной области, а также глубокое понимание ключевых бизнес-процессов в других областях позволяют Usetech выступать в качестве надежного IT-партнера.</p>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1 relative">-->
<!--                    <div class="about-map">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/about-map.svg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <section class="about-statistic">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">-->
<!--                        <h4>2006 г.</h4>-->
<!--                        <span>год основания компании</span>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">-->
<!--                        <h4>2 тыс.</h4>-->
<!--                        <span>реализованных проектов</span>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">-->
<!--                        <h4>300+ чел.</h4>-->
<!--                        <span>работают в нашей компании</span>-->
<!--                    </div>-->
<!--                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">-->
<!--                        <h4>6 офисов</h4>-->
<!--                        <span>открыто по всей России</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!--            <section class="usetech-main">-->
<!--                <a href="http://usetech.ru" target="_blank" class="button button-secondary">Главный сайт <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/icon-in.svg" alt="" style="width:70px;height: 17px; margin-top: -2px;"></a>-->
<!--            </section>-->
<!--        </div>-->
<!--    </section>-->



<section class="about-company">

    <section class="timeline__header">
        <div class="timeline__header-block">
            <div class="container">
                <h2>О компании</h2>
<!--            <div class="timeline__header-block-title">-->
<!--                О компании-->
<!--            </div>-->
                <div class="timeline__header-block-desc">
                    <p>
                        Компания Usetech была основана в 2006 году, и за это время мы успешно реализовали и внедрили сотни проектов по разработке ПО на заказ. Мы предлагаем своим Заказчикам полный спектр услуг в области заказной разработки программного обеспечения, независимого тестирования и IT-консалтинга.
                    </p>
                    <p>
                        Стабильность, гибкость, прозрачность всех процессов проектирования, использование современных технологий, понимание ключевых бизнес-процессов наших клиентов, а также высокий уровень квалификации специалистов, позволяют Usetech выступать в качестве надежного IT – партнера
                    </p>
                </div>
                <!--
                <div class="timeline__header-block-list">
                    <div class="timeline__header-block-list-item">
                        <div class="title">2006 г.</div>
                        <div class="desc">год основания</div>
                    </div>
                    <div class="timeline__header-block-list-item">
                        <div class="title">6 офисов</div>
                        <div class="desc">открыто по всей России</div>
                    </div>
                    <div class="timeline__header-block-list-item">
                        <div class="title">2 тыс.</div>
                        <div class="desc">реализованных проектов</div>
                    </div>
                    <div class="timeline__header-block-list-item">
                        <div class="title">300+ чел.</div>
                        <div class="desc">работают в нашей компании</div>
                    </div>
                </div>
                -->
                <div class="about__list">
                    <div class="about__list-item">
                        <div class="title title_big">2006</div>
                        <div class="text">год основания</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">6 офисов</div>
                        <div class="text">открыто по всей России</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">2000+</div>
                        <div class="text">реализованных проектов</div>
                    </div>
                    <div class="about__list-item">
                        <div class="title title_big">400+ чел.</div>
                        <div class="text">работают в нашей компании</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>




<section class="history">
    <div class="container">
        <h2>История и достижения</h2>
        <p>Мы стремимся вверх, заботимся о наших сотрудниках и стремительно развиваемся во вне. За все время работы мы зарекомендовали себя как надежные партнеры и компания.</p>
    </div>
        <section class="timeline">
            <section class="timeline__body">
            <!--
                <div class="timeline__body-timeline">
                    <div id="timeline-slider" class="timeline-slider">
                        <div class="timeline-slider__list">
                            <div class="timeline-slider__item timeline-slider__item_2018">
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_jan"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_feb"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_mar"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_apr"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_may"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_jun">
                                    <div class="title">Запуск корпоративного портала</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_cnews timeline-slider__item-event_jul">
                                    <div class="title">
                                        <div class="bold">22 место</div> рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии <a href="https://www.cnews.ru/reviews/mobile2018/review_table/2c5a5660b1d90c1d08ee461fffae20839095a8bd" target="_blank" title="Usetech занял двадцать второе место рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии CNews">CNews</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_tagline timeline-slider__item-event_aug">
                                    <div class="title">
                                        <div class="bold">Золотой призер</div> в номинации «Лучшее приложение услуги» от <a href="https://tagline.ru/cases/development-of-mobile-application--velobike/" target="_blank" title="Usetech золотой призер в номинации «Лучшее приложение услуги» от Tagline с проектом создания мобильного приложения для городского велопроката г. Москвы.">Tagline</a> с проектом создания мобильного приложения для городского велопроката г. Москвы.
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_sept">
                                    <div class="title">Новый офис и новая команда в г. Томск</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_magic-people timeline-slider__item-event_oct">
                                    <div class="title">
                                        <div class="bold">Серебряный призер</div> в номинации «Лучший проект для индустрии» от
                                        <a href="https://axoft.ru/about/press-center/press-releases/10996939/" target="_blank" title="Usetech стал серебрянным призером в номинации «Лучший проект для индустрии» от Value-Added People с проектом разработки системы онлайн трансляции FIDE WorldChess.">Value-Added People</a> с проектом разработки системы онлайн трансляции FIDE WorldChess.
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_nov"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_dec">
                                    <div class="title">Blockchain лаборатория разработала первый в мире криптовалютный индекс «Crypto100»</div>
                                </div>
                            </div>
                            <div class="timeline-slider__item timeline-slider__item_2019">
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_wadline timeline-slider__item-event_jan">
                                    <div class="title">
                                        <div class="bold">2 место</div> рейтинга «Лучшие разработчики программного обеспечения России» по версии <a href="https://wadline.ru/mag/best-it-companies-russia-2019" target="_blank" title="Usetech занял второе место рейтинга «Лучшие разработчики программного обеспечения России» по версии Wadline">Wadline</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_tagline timeline-slider__item-event_feb">
                                    <div class="title">
                                        <div class="bold">Серебрянный призер</div> в номинации «Лучший проект для индустрии» от <a href="https://tagline.ru/cases/razrabotka-sistemy-shahmatnogo-landshafta-dlya-turnirov-i-olimpiad-fide-worldchess/" target="_blank" title="Usetech серебрянный призер в номинации «Лучший проект для индустрии» от Tagline с проектом разработки системы онлайн трансляции FIDE WorldChess">Tagline</a> с проектом разработки системы онлайн трансляции FIDE WorldChess
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_mar">
                                    <div class="title">1600 + успешно завершенных проектов</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_tadviser timeline-slider__item-event_apr">
                                    <div class="title">
                                        <div class="bold">19 место</div> рейтинга «Крупнейшие игроки рынка ИТ для ритейла» по версии <a href="http://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%98%D0%A2_%D0%B2_%D1%80%D0%B8%D1%82%D0%B5%D0%B9%D0%BB%D0%B5_2019_%D0%9E%D0%B1%D0%B7%D0%BE%D1%80_TAdviser" target="_blank" title="Usetech занял девятнадцатое место рейтинга «Крупнейшие игроки рынка ИТ для ритейла» по версии Tadviser">Tadviser</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_rndtech timeline-slider__item-event_may">
                                    <div class="title">
                                        <div class="bold">2 место</div> рейтинга «Самые узнаваемые и привлекательные IT-компании в Ростовской области, QA» по версии RndTech
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_jun">
                                    <div class="title">Новый офис и новая команда в г. Барнаул</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_cnews timeline-slider__item-event_jul">
                                    <div class="title">
                                        <div class="bold">11 место</div> рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии <a href="https://www.cnews.ru/tables/75f139c48fb6a2f636d0d9e4b38e832eba0578a4?fbclid=IwAR24QXC5toKffYq9GZ_u39C0iraSq-F_oXMbbl_bV9FogDJ-Rl0ETgox-Nw" target="_blank" title="Usetech занял одинадцатое место рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии CNewsMobile">CNewsMobile</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_hh timeline-slider__item-event_aug">
                                    <div class="title">
                                        <div class="bold">15 место</div> рейтинга «Самые вовлеченные сотрудники» по версии <a href="https://plus.rbc.ru/news/5c984a937a8aa92a00cc2949?fbclid=IwAR1CXoLn3dXB-VonCaMCfB413WN_l-Y0GsScCX4QeUGhx4DuBkUAfiim5eE" target="_blank" title="Usetech занял пятнадцатое место рейтинга «Самые вовлеченные сотрудники» по версии HeadHunter">HeadHunter</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_sept">
                                    <div class="title">250+ вовлеченных и мотивированных IT специалистов</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_rbk timeline-slider__item-event_oct">
                                    <div class="title">
                                        <div class="bold">15 место</div> рейтинга «Лидеры ИТ и Интернет индустрии» по версии <a href="https://plus.rbc.ru/news/5c984a937a8aa92a00cc2949?fbclid=IwAR1CXoLn3dXB-VonCaMCfB413WN_l-Y0GsScCX4QeUGhx4DuBkUAfiim5eE" target="_blank" title="Usetech занял пятнадцатое место рейтинга «Лидеры ИТ и Интернет индустрии» по версии РБК">РБК</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_neufund timeline-slider__item-event_nov">
                                    <div class="title">
                                        <div class="bold">Золотой призёр</div> в номинации «Breavest heart» от Neufund
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_dec">
                                    <div class="title">
                                        На карте рынка «Информационные технологии в ритейле» по версии <a href="https://www.tadviser.ru/images/c/cb/It_retail_final2.jpg" target="_blank" title="Usetech на карте рынка «Информационные технологии в ритейле» по версии Tagline">Tagline</a>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-slider__item timeline-slider__item_2020">
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_hh timeline-slider__item-event_jan">
                                    <div class="title">
                                        <div class="bold">1 место</div> в категории «Самые вовлеченные сотрудники» ежегодного рейтинга работодателей России от компании <a href="https://plus.rbc.ru/news/5e9316f87a8aa9dd75c6e475" target="_blank" title="Usetech занял первое место в категории «Самые вовлеченные сотрудники» ежегодного рейтинга работодателей России от компании HeadHunter">HeadHunter</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_habr timeline-slider__item-event_feb">
                                    <div class="title">
                                        <div class="bold">7 место</div> рейтинга «Лучшие ИТ-работодатели России, качество компании» по версии <a href="https://habr.com/ru/company/habr_career/blog/501966/" target="_blank" title="Usetech занял седьмое место рейтинга «Лучшие ИТ-работодатели России, качество компании» по версии Хабр Карьера">Хабр Карьера</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_mar">
                                    <div class="title">2000+ успешно завершенных проектов</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_rbk timeline-slider__item-event_apr">
                                    <div class="title">
                                        <div class="bold">8 место</div> рейтинга «Лидеры ИТ и Интернет индустрии России» по версии <a href="https://plus.rbc.ru/news/5e9316f87a8aa9dd75c6e475" target="_blank" title="Usetech занял восьмое место рейтинга «Лидеры ИТ и Интернет индустрии России» по версии РБК">РБК</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_hh timeline-slider__item-event_may">
                                    <div class="title">
                                        <div class="bold">56 место</div> рейтинга «Топ-100 лучших работодателей России» по версии <a href="https://hh.ru/article/26564" target="_blank" title="Usetech занял пятьдесят шестое место рейтинга «Топ-100 лучших работодателей России» по версии HeadHunter">HeadHunter</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_jun">
                                    <div class="title">Запуск корпоративной геймификации</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_topb2b timeline-slider__item-event_jul">
                                    <div class="title">
                                        <div class="bold">13 место</div> международного рейтинга «Competent App Developers in RUSSIA» по версии <a href="https://www.topdevelopers.co/press-releases/leading-mobile-app-developers-february-2020" target="_blank" title="Usetech занял тринадцатое место международного рейтинга «Competent App Developers in RUSSIA» по версии Top B2B Mobile App Development Companies of 2020">Top B2B Mobile App Development Companies of 2020</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_habr timeline-slider__item-event_aug">
                                    <div class="title">
                                        <div class="bold">8 место</div> рейтинга «Лучшие ИТ-работодатели России 2019» по версии <a href="https://career.habr.com/companies/ratings?sort=av&y=2019&sz=3&_ga=2.82459220.373710903.1581924806-1565580954.1573040356" target="_blank" title="Usetech занял восьмое место рейтинга «Лучшие ИТ-работодатели России 2019» по версии Хабр Карьера">Хабр Карьера</a>
                                    </div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_sept">
                                    <div class="title">300+ вовлеченных и мотивированных IT специалистов</div>
                                </div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_oct"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-570 timeline-slider__item-event_nov"></div>
                                <div class="timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green timeline-slider__item-event_dec">

                                    <div class="title">На карте рынка «Информационные технологии 2020» по версии <a
                                                href="https://www.tadviser.ru/images/9/90/IT2020_ver2_%281%29.jpg" target="_blank" title="Usetech на карте рынка Информационные технологии 2020 по версии Tagline">Tagline</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="timeline__nav" class="timeline__nav">
                        <li id="0" class="timeline__nav-item">2018</li>
                        <li id="1" class="timeline__nav-item active">2019</li>
                        <li id="2" class="timeline__nav-item">2020</li>
                    </ul>
                </div>
                -->
                <?php get_template_part('template-parts/timeline'); ?>
            </section>
        </section>
    </section>




<!-- <section class="values">
    <div class="container">
        <h2>Ценности компании</h2>
        <p>Мы постоянно улучшаем наши сервисы и стараемся сделать работу наших сотрудников максимально комфортной. Мы ценим некоторые вещи и придерживаемся этих вещей.</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_head.svg" alt="">
                    <h3>Внимательность</h3>
                    <p>Мы любим концентрацию и внимание и очень ценим внимательность наших сотрудников к мелочам и деталям</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_sv.svg" alt="">
                    <h3>Наставничество</h3>
                    <p>Каждый новый сотрудник получает наставника и сильное плечо для адаптации на новом месте</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_search.svg" alt="">
                    <h3>Прозрачность работы</h3>
                    <p>Наши процессы выстроены и отлажены как часы. Мы заботимся о четкой постановке и выполнений задач</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_happiness.svg" alt="">
                    <h3>Счастье</h3>
                    <p>Показателей хорошей работы - счастливый сотрудник. Мы заботимся о том, чтобы наши сотрудники улыбались</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_sport.svg" alt="">
                    <h3>Здоровое окружение</h3>
                    <p>Мы за здоровье и спорт. Все чаще наши сотрудники бросают курить и все чще приобщаются к спорту и здоровому питанию</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="values__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/values_heart.svg" alt="">
                    <h3>Преимущества</h3>
                    <p>Мы готовы дать нашим дорогим и любимым сотрудникам те преимущества, которые они не получат ни где</p>
                </div>
            </div>
        </div>
    </div>
</section> -->



    <div class="container">
        <section class="company">
            <h2>Компания = команда</h2>
            <p>Наши офисы - цифровые лаборатории. Наши клиенты - крупнейшие мировые бренды. Мы постоянно ищем талантливых сотрудников. Вы готовы стать частью нашей команды? </p>
            <div class="infographics">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                        <div class="company-item">
                            <span>Удобное расположение офисов</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/001.svg" alt="">
                        </div>
                        <div class="company-item">
                            <span>Свободный стиль одежды</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/002.svg" alt="">
                        </div>
                        <div class="company-item">
                            <span>Удаленная работа</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/003.svg" alt="">
                        </div>
                        <div class="company-item">
                            <span>Корпоративное такси</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/008.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 relative hidden-xs">
                        <section class="company-pic">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coffee.png" alt="" class="">
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="company-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/006.svg" alt=""> <span>Гибкий график работы </span>
                        </div>
                        <div class="company-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/005.svg" alt=""> <span>Обучение и сертификация </span>
                        </div>
                        <div class="company-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/004.svg" alt=""> <span>Турниры на PlayStation </span>
                        </div>
                        <div class="company-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/007.svg" alt=""> <span>Корпоративный ДМС </span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                        <div class="company-item company-item-xs"><span>
                        Чай, кофе и печеньки идут в комплекте с рабочим оффером
                    </span>
                            <a href="/contacts/#feedback-form" class="button button-primary">Стать частью команды</a></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<!--    <section class="instagram">-->
<!--        <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                <h2>Наш Instagram</h2>-->
<!--                <p>Для наших сотрудников Usetech - это не просто работа. Они приходят в большую семью, дружный коллектив и команду профессионалов, где готовы поделиться не только знаниями, но и интересами. Посмотрите, чем мы занимаемся в нерабочее время.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                --><?php //echo do_shortcode('[instagram-feed]'); ?>
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
<!--    </section>-->

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>Наши новости</h2>
                <p>Новости компании Usetech</p>
            </div>
        </div>
        <div class="news-item">
            <div class="row">
                <?php
                $args=array(
                    'category__in' => 14, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
                    'showposts'=>3, //сколько показать статей
                    'orderby'=>data, //сортировка по дате
                    'caller_get_posts'=>1);
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>


                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="<?php the_permalink(); ?>">
                                <div>
                                    <div class="news-item-img" style="background-image: url(<?php echo first_post_image() ?>)"></div>
                                    <h3><?php trim_title_chars(50, '...'); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <span class="button button-primary">Читать далее</span>
                                </div>
                            </a>
                        </div>
                    <?php } }
                wp_reset_query(); ?>
            </div>
    </div>
        <a href="/news/" class="button button-secondary">Читать все новости</a>
</section>






<?php get_footer(); ?>
