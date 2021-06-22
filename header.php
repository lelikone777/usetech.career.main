<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="yandex-verification" content="fd4bb99f16c8692d"/>
<!--    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>-->


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.selectric.js"></script>


<!--    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">-->

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


</head>

<div <?php body_class(); ?>>


    

    <?php include 'template-parts/header-new.php'?>

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
