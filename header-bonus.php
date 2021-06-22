<!DOCTYPE html>
<html lang="ru">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="yandex-verification" content="fd4bb99f16c8692d"/>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.selectric.js"></script>


    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <?php wp_head(); ?>

    <script>
        document.addEventListener('wpcf7mailsent', function (event) {
            if (event.detail.contactFormId !== '3156') {
                setInterval(function () {
                    location.reload();
                }, 5000);
            }
        }, false);
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146971130-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-146971130-1');
    </script>

    <script type="text/javascript">!function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?162", t.onload = function () {
                VK.Retargeting.Init("VK-RTRG-401374-bgyf6"), VK.Retargeting.Hit()
            }, document.head.appendChild(t)
        }();</script>
    <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-401374-bgyf6" style="position:fixed; left:-999px;" alt=""/>
    </noscript>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '961762550839590');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=961762550839590&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

<!--    vk pixel-->
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=https://vk.com/js/api/openapi.js?168,t.onload=function(){VK.Retargeting.Init("VK-RTRG-863642-21u5T"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
    <noscript><img src=https://vk.com/rtrg?p=VK-RTRG-863642-21u5T style="position:fixed; left:-999px;" alt=""/></noscript>
    <!--    vk pixel-->



</head>

<div <?php body_class(); ?>>


    <div class="xs-top visible-xs">
        <div class="site__container">
            <div class="row">
                <div class="col-xs-7">
                    <a href="tel:+74956605048" class="top-phone">+ 7 (495) 660-50-48</a>
                </div>
                <div class="col-xs-5 text-right">
                    <ul class="list-inline top-social">
                        <li>
                            <a href="https://www.instagram.com/usetech.pro/" target="_blank"
                               title="Usetech Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/usetech.ru/" target="_blank" title="Usetech Facebook"><i
                                    class="fa fa-facebook-official"></i></a>
                        </li>
                        <li>
                            <a href="https://vk.com/usetech_pro" target="_blank" title="Usetech Вконтакте"><i
                                    class="fa fa-vk"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/usetech-integration/" target="_blank"
                               title="Usetech LinkedIn"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="mailto:hr@usetech.ru" target="_blank" title="Отправить письмо в Usetech"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="menu__wrap">
        <div class="site__container">
            <section class="top">
                <div class="row hidden-xs">
                    <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs">
                        <div class="logo">
                            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-usetech.svg"
                                             alt="" class="img-responsive"></a>
                            <!--                            <a href="/"><img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/ut_ny.svg"-->
                            <!--                                             alt="" class="img-responsive"></a>-->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-2 hidden-sm hidden-xs">
                        <div class="header__menu">
                            <!-- вывод главного меню -->
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary', // показываем расположение, в каком меню
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', //присваиваем параметры
                                'menu_class' => 'menu-top', // классы <ul></ul>
                                'menu_id' => '', // id ul (сейчас не присвоен)
                                'depth' => 1 // глубина вложенности меню
                            ));
                            ?>
                            <!-- вывод главного меню -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <div class="top__action">
                            <a href="#" class="button button-primary" data-toggle="modal" data-target="#resume">Отправить
                                резюме</a>
                        </div>
                    </div>
                    <!--                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-right">-->
                    <!--                    <div class="row">-->
                    <!--                        <div class="col-lg-12">-->
                    <!--                            <a href="tel:+74956605048" class="top-phone">+ 7 (495) 660-50-48</a>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-lg-12">-->
                    <!--                            <ul class="list-inline top-social">-->
                    <!--                                <li>-->
                    <!--                                    <a href="https://www.instagram.com/usetech.pro/" target="_blank" title="Usetech Instagram"><i class="fa fa-instagram"></i></a>-->
                    <!--                                </li>-->
                    <!--                                <li>-->
                    <!--                                    <a href="https://www.facebook.com/usetech.ru/" target="_blank" title="Usetech Facebook"><i class="fa fa-facebook-official"></i></a>-->
                    <!--                                </li>-->
                    <!--                                <li>-->
                    <!--                                    <a href="https://vk.com/usetech_pro" target="_blank" title="Usetech Вконтакте"><i class="fa fa-vk"></i></a>-->
                    <!--                                </li>-->
                    <!--                                <li>-->
                    <!--                                    <a href="https://www.linkedin.com/company/usetech-integration/" target="_blank" title="Usetech LinkedIn"><i class="fa fa-linkedin"></i></a>-->
                    <!--                                </li>-->
                    <!--                                <li><a href="mailto:hr@usetech.ru" target="_blank">hr@usetech.ru</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>


            </section>

            <nav class="navbar navbar-default hidden-lg hidden-md">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="/"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-usetech.svg" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <!-- вывод главного меню -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary', // показываем расположение, в каком меню
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', //присваиваем параметры
                        'menu_class' => 'nav navbar-nav', // классы <ul></ul>
                        'menu_id' => '', // id ul (сейчас не присвоен)
                        'depth' => 1 // глубина вложенности меню
                    ));
                    ?>
                    <!-- вывод главного меню -->

                    <ul class="nav navbar-nav">
                        <!--
                                                <li><a href="/about/">О компании</a></li>
                                                <li><a href="/vacancy/">Вакансии</a></li>
                                                <li><a href="/contacts/">Контакты</a></li>
                        -->
                    </ul>
                    <!--                    <a href="https://usetech.ru" target="_blank" class="btn btn-success btn-top navbar-right">Главный сайт <img src="-->
                    <?php //echo get_stylesheet_directory_uri(); ?><!--/images/icon-inverse.svg" alt="" style="width:70px;height: 17px;"></a>-->
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- /.container -->

    </div>

    <!--Отклик на вакансию-->
    <!-- Modal -->
    <div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="resume">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Отправить резюме</h4>
                    <p class="feedback-notes">Поля, помеченные <span>*</span>, обязательны к заполнению.</p>
                </div>
                <div class="modal-body">
                    <div class="modal-form">

                        <?php echo do_shortcode('[contact-form-7 id="785" title="Форма из вакансии_3поля"]'); ?>


                    </div>
                </div>

            </div>
        </div>
    </div>
