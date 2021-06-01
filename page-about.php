<?php get_header(); ?>

    <!--Вывод хлебных крошек-->
<?php get_template_part('template-parts/breadcrumbs');?>
<!--
<div class="container m-t-b-45">
        <div class="row">
            <div class="col-lg-12">
               <div class="speedbar">
                
                </div>
            </div>
        </div>
    </div>
-->


<!--    <section class="about about-inside">-->
<!--        <div class="container">-->
<!--            <h1>О компании</h1>-->
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
<!--                <a href="http://usetech.ru" target="_blank" class="btn btn-default btn-use-inverse">Главный сайт <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/icon-in.svg" alt="" style="width:70px;height: 17px;"></a>-->
<!--            </section>-->
<!--        </div>-->
<!--    </section>-->


    <section class="about-company">
        <section class="timeline__header">
            <div class="timeline__header-block">
                <div class="container">
                    <h1>О компании</h1>
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
            <!--
            <div class="timeline__body-timeline">
                <div id="timeline-slider" class="timeline-slider">
                    <div class="timeline-slider__list" id="slider-move">
                        <div class='timeline-slider__item timeline-slider__item_2018'>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>Запуск полноценного корпоративного портала</div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_cnews'>
                                <div class='title-item'>
                                    <div class='bold'>22 место </div>
                                    «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии <a href='https://cnews.ru' target='_blank'>CNews</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_tagline'>
                                <div class='title-item'>
                                    <div class='bold'>Золотой призер </div>
                                    в номинации «Лучшее приложение услуги» от <a href='https://tagline.ru' target='_blank'>Tagline</a> с проектом создания мобильного приложения для городского велопроката г. Москвы
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>Новый офис и новая команда в г. Томск</div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_tagline'>
                                <div class='title-item'>
                                    <div class='bold'>Серебряный призер </div>
                                    в номинации «Лучший проект для индустрии» от <a href='https://tagline.ru' target='_blank'>Tagline</a> с проектом разработки системы онлайн трансляции FIDE WorldChess
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>Blockchain Usetech – первый в мире криптовалютный индекс «Crypto100»</div>
                            </div>
                        </div>
                        <div class='timeline-slider__item timeline-slider__item_2019'>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_wadline'>
                                <div class='title-item'>
                                    <div class='bold'>2 место </div>
                                    рейтинга «Лучшие разработчики программного обеспечения России» по версии <a href='https://wadline.ru' target='_blank'>Wadline</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_tagline'>
                                <div class='title-item'>
                                    <div class='bold'>Серебряный призер </div>
                                    в номинации «Лучший проект для индустрии» от <a href='https://tagline.ru' target='_blank'>Tagline</a> с проектом разработки системы онлайн трансляции FIDE WorldChess
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>1500 + успешных проектов</div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_tadviser'>
                                <div class='title-item'>
                                    <div class='bold'>19 место </div>
                                    рейтинга «Крупнейшие игроки рынка ИТ для ритейла» по версии <a href='https://tadviser.ru' target='_blank'>Tadviser</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_rndtech'>
                                <div class='title-item'>
                                    <div class='bold'>2 место </div>
                                    рейтинга «Узнаваемость и привлекательность IT-компаний в Ростовской области, QA» по версии <a href='https://rndtech.pro' target='_blank'>RndTech</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>Новый офис и новая команда в г. Барнаул</div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_cnews'>
                                <div class='title-item'>
                                    <div class='bold'>10 место </div>
                                    рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии <a href='https://cnews.ru' target='_blank'>CNewsMobile</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_hh'>
                                <div class='title-item'>
                                    <div class='bold'>15 место </div>
                                    рейтинга «Самые вовлеченные сотрудники» по версии <a href='http://hh.ru' target='_blank'>HeadHunter</a>
                                </div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'>250+ экспертов</div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_rbk'>
                                        <div class='title-item'>
                                        <div class='bold'>15 место </div>
                                        рейтинга «Лидеры ИТ и Интернет индустрии» по версии <a href='https://rbc.ru' target='_blank'>РБК</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-270 timeline-slider__item-event_neufund'>
                                        <div class='title-item'>
                                        <div class='bold'>Золотой призёр </div>
                                        от <a href='https://neufund.org' target='_blank'>Neufund</a> в номинации «Breavest heart»
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-370 timeline-slider__item-event_tadviser'>
                                        <div class='title-item'>
                                        <div class='bold'>16 место </div>
                                        рейтинга «Крупнейшие поставщики услуг ИТ-аутсорсинга, 2019» по версии <a href='https://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%98%D0%A2-%D0%B0%D1%83%D1%82%D1%81%D0%BE%D1%80%D1%81%D0%B8%D0%BD%D0%B3_(%D1%80%D1%8B%D0%BD%D0%BE%D0%BA_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8)#.D0.A1.D0.BE.D1.81.D1.82.D0.BE.D1.8F.D0.BD.D0.B8.D0.B5_.D1.80.D0.BE.D1.81.D1.81.D0.B8.D0.B9.D1.81.D0.BA.D0.BE.D0.B3.D0.BE_.D1.80.D1.8B.D0.BD.D0.BA.D0.B0_.D0.98.D0.A2-.D0.B0.D1.83.D1.82.D1.81.D0.BE.D1.80.D1.81.D0.B8.D0.BD.D0.B3.D0.B0' target='_blank'>Tadviser</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>1700 + успешных проектов</div>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item timeline-slider__item_2020'>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_hh'>
                                        <div class='title-item'>
                                        <div class='bold'>1 место </div>в категории «Самые вовлеченные сотрудники» ежегодного рейтинга работодателей России от компании <a href='http://hh.ru' target='_blank'>HeadHunter</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_habr'>
                                        <div class='title-item'><div class='bold'>7 место </div>рейтинга «Лучшие ИТ-работодатели России, качество компании» по версии <a href='https://career.habr.com' target='_blank'>Хабр Карьера</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>2000+ успешных проектов</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_rbk'>
                                        <div class='title-item'>
                                        <div class='bold'>8 место </div>рейтинга «Лидеры ИТ и Интернет индустрии России» по версии <a href='https://rbc.ru' target='_blank'>РБК</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_hh'>
                                        <div class='title-item'>
                                        <div class='bold'>56 место </div>рейтинга «Топ-100 лучших работодателей России» по версии <a href='http://hh.ru' target='_blank'>HeadHunter</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'><div class='title-item'>Запуск геймификации</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_topb2b'>
                                        <div class='title-item'>
                                        <div class='bold'>1 место </div>международного рейтинга «Top 10+ Mobile App Developers & App Development Companies in Russia» по версии <a href='https://www.topdevelopers.co/directory/mobile-app-developers/country/russia' target='_blank'>TopDevelopers.co</a>
                                        </div></div><div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_habr'>
                                        <div class='title-item'>
                                        <div class='bold'>8 место </div>
                                        рейтинг «Лучшие ИТ-работодатели России 2019» по версии <a href='https://career.habr.com' target='_blank'>Хабр Карьера</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>300+ экспертов</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_itawards'>
                                        <div class='title-item'>
                                        <div class='bold'>Золотой призер </div>
                                        в номинации «IT Products & Services for Media and Entertainment» престижной американской премии <a href='https://networkproductsguide.com/winners/2020-it-world-awards/' target='_blank'>IT World Award 2020</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_hackusama'>
                                        <div class='title-item'>
                                        <div class='bold'>Победитель </div>
                                        международного хакатона <a href='https://devpost.com/software/unique-network' target='_blank'>«Hackusama - Hack on Polkadot&rsquo;s Wild Cousin»</a> с продуктом «Unique Network»
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>На карте рынка «Информационные технологии 2020» по версии <a href='https://www.tadviser.ru/' target='_blank'>Tadviser</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_hackusama'>
                                        <div class='title-item'>
                                        <div class='bold'>Победитель </div>в номинации «Community Choice» международного хакатона <a href='https://devpost.com/software/unique-network' target='_blank'>«Hackusama - Hack on Polkadot&rsquo;s Wild Cousin»</a> с продуктом «Unique Network»
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_itstars'>
                                        <div class='title-item'>
                                        <div class='bold'>Финалист </div>премии <a href='https://itstars-award.ru/' target='_blank'>IT Stars</a> имени Георгия Генса в номинации «Инновационный проект в бизнесе»
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>На карте рынка экосистемы <a href='#' target='_blank'>Polkadot</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_cnews'>
                                        <div class='title-item'>
                                        <div class='bold'>12 место </div>
                                        рейтинга «Крупнейшие разработчики мобильных приложений для бизнеса и госструктур» по версии <a href='https://www.cnews.ru/reviews/mobilnost_v_biznese_2020/review_table/4f66b8911b27e1ff43752e1ac889dc063c07fbea' target='_blank'>CNews</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_tadviser'>
                                        <div class='title-item'>
                                        <div class='bold'>20 место </div>рейтинга «Крупнейшие поставщики BI-решений в России» по версии <a href='https://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:Business_Intelligence_(%D1%80%D1%8B%D0%BD%D0%BE%D0%BA_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8)#.D0.9A.D1.80.D1.83.D0.BF.D0.BD.D0.B5.D0.B9.D1.88.D0.B8.D0.B5_.D0.BF.D0.BE.D1.81.D1.82.D0.B0.D0.B2.D1.89.D0.B8.D0.BA.D0.B8_BI-.D1.80.D0.B5.D1.88.D0.B5.D0.BD.D0.B8.D0.B9_.D0.B2_.D0.A0.D0.BE.D1.81.D1.81.D0.B8.D0.B8' target='_blank'>Tadviser</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>Новый офис и команда в г. Рязань</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_tadviser'>
                                        <div class='title-item'>
                                        <div class='bold'>14 место </div>рейтинга «Крупнейшие ИТ-аутсорсеры в России» по версии <a href='https://www.tadviser.ru/index.php/%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F:%D0%98%D0%A2-%D0%B0%D1%83%D1%82%D1%81%D0%BE%D1%80%D1%81%D0%B8%D0%BD%D0%B3_(%D1%80%D1%8B%D0%BD%D0%BE%D0%BA_%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8)#.D0.9A.D1.80.D1.83.D0.BF.D0.BD.D0.B5.D0.B9.D1.88.D0.B8.D0.B5_.D0.98.D0.A2-.D0.B0.D1.83.D1.82.D1.81.D0.BE.D1.80.D1.81.D0.B5.D1.80.D1.8B' target='_blank'>Tadviser</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_dcs'>
                                        <div class='title-item'>
                                        <div class='bold'>Финалист </div>международной премии «<a href='https://dcsawards.com/vote' target='_blank'>Data Centre Solutions Awards</a>, 2020» в номинации «Managed Services Project of the Year»</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'>Новый офис у московской команды Usetech</div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_topb2b'>
                                        <div class='title-item'>
                                        <div class='bold'>2 место </div>международного рейтинга «Top Blockchain Development Companies | Top Blockchain Developers» по версии <a href='https://www.topdevelopers.co/directory/blockchain-developers?country=russia' target='_blank'>TopDevelopers.co</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330 timeline-slider__item-event_cnews'>
                                        <div class='title-item'>Экспертная статья А. Митровича «Как блокчейн поможет построить Web 3.0» для <a href='https://www.cnews.ru/articles/2020-12-07_ekspertiza_kak_blokchejn_pomozhet?fbclid=IwAR3pJwDroBbAhTDvn-0n9eKKCo-U8_b0j3pDBd4Zg8DMBy5Jw3jOo-BXJhE' target='_blank'>Cnews</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                        <div class='title-item'></div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-160 timeline-slider__item-event_wadline'>
                                        <div class='title-item'>
                                        <div class='bold'>5 место </div>рейтинга «Лучшие разработчики программного обеспечения России 2020» по версии <a href='https://wadline.ru/mag/best-it-companies-russia-2020'>Wadline</a>
                                        </div>
                                        </div>
                                        <div class='timeline-slider__item-event timeline-slider__item-event_height-330'>
                                        <div class='title-item'></div>
                            </div>
                            <div class='timeline-slider__item-event timeline-slider__item-event_height-425 timeline-slider__item-event_green'>
                                <div class='title-item'></div>
                            </div>
                        </div>            
                    </div>
                </div>
                <div id="timeline__nav" class="timeline__nav">
                    <span='0' class='timeline__nav-item'>2018</span>
                    <span id='1' class='timeline__nav-item'>2019</span>
                    <span id='2' class='timeline__nav-item active'>2020</span>
                </div>
            </div>
            -->
            <?php get_template_part('template-parts/timeline'); ?>
        </section>
    </section>

    <?php /* get_template_part('../../../../usetech.design/wp-content/themes/utdesign/template-parts/timeline');*/ ?>


    
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
    </section>

<?php get_footer(); ?>
