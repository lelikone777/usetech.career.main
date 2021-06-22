 <section class="foot">
        <div class="site__container">
            <div class="foot__contact-box">
                <a href="/" class="foot__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/usetech_dark_logo.svg" alt=""></a>
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <ul class="foot__contact">
                            <li><strong>Телефон:</strong> <a href="tel:+74956605048" target="_blank" title="Позвонить в Юзтех">+7 (495) 660-50-48</a></li>
                            <li><strong>Электронная почта:</strong> <a href="mailto:hr@usetech.ru" target="_blank" title="Написать в Юзтех">hr@usetech.ru</a></li>
                            <li><strong>Адрес:</strong> <a href="https://yandex.ru/maps/-/CCQ~IIfODD" target="_blank" title="Адрес и карточка Юзтех на карте">Москва, Кожевническая улица, 10с1, <br> БЦ "Спутник", 7 этаж</a></li>
                            <li><strong>Режим работы:</strong> 09:00 - 18:00</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="foot__link">
                            <li><a href="https://usetech.ru" class="blank" target="_blank" title="Usetech | Software development for successful business">Usetech.ru</a></li>
                            <li><a href="/bonus/" title="Реферальная система Приведи Друга в Юзтех">Реферальная система</a></li>
                            <li><a href="/vacancy/" title="Вакансии компании Юзтех">Вакансии Usetech</a></li>
                            <li><a href="https://career.usetech.ru/files/usetech_benefit_2020.pdf" target="_blank" title="Бенефиты компании Юзтех">Наши бенефиты</a></li>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <ul class="foot__link">
                            <li><a href="https://yandex.ru/profile/132741806463" class="blank" target="_blank" title="Написать отзыв о компании Usetech">Написать отзыв</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foot__copyright">
                <span>
                    © 2006 - 2021, <a href="https://usetech.ru" target="_blank" title="Usetech | Software development for successful business">Usetech</a>
                    <span class="agreement"><a href="https://career.usetech.ru/agreement/" target="_blank" title="Соглашение на обработку персональных данных">Соглашение на обработку персональных данных</a></span>
                </span>
                <span class="recaptcha">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</span>
            </div>
        </div>
    </section>


       
    <script>
        new WOW().init();
    </script>
    
   <script>
       jQuery(function(){
           jQuery("#phone-mask").mask("+7 (999) 999-9999");
       });
   </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48339788 = new Ya.Metrika({
                    id:48339788,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48339788" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-343428-gyy32"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-343428-gyy32" style="position:fixed; left:-999px;" alt=""/></noscript>


<!--Чат с яндексом-->
    <script type='text/javascript'>
        (function () {
            window['yandexChatWidgetCallback'] = function() {
                try {
                    window.yandexChatWidget = new Ya.ChatWidget({
                        guid: '787b0271-4837-493d-8b32-df1497099383',
                        buttonText: 'Ищешь работу?',
                        title: 'Чат с рекрутером',
                        theme: 'dark',
                        collapsedDesktop: 'never',
                        collapsedTouch: 'never'
                    });
                } catch(e) { }
            };
            var n = document.getElementsByTagName('script')[0],
                s = document.createElement('script');
            s.async = true;
            s.charset = 'UTF-8';
            s.src = 'https://chat.s3.yandex.net/widget.js';
            n.parentNode.insertBefore(s, n);
        })();
    </script>
    <!--Чат с яндексом-->

<!--Таймлайн-->
<script type="text/javascript">

    //$(".timeline-slider").scrollLeft(1900);

    const slide = 1898;
    const margin = 75;
    let widthWindow = document.body.clientWidth;
    const itemsContainer = document.querySelector('#timeline__nav');

    document.getElementById('timeline-slider').scrollTo({ left: slide, behavior: "smooth" });

    function handleToggleClick(e) {
        if (!e.target.classList.contains('timeline__nav-item')) return;
        for(let i = 0; i < itemsContainer.children.length; i++){
            itemsContainer.children[i].classList.remove('active');
        }
        scrollTo(e.target.id);
        e.target.classList.toggle('active');
    }
    itemsContainer.addEventListener('click', handleToggleClick);

    function scrollTo(element) {
        var shift = 0;
        if (element != 0) shift = (slide * element) + margin;
        document.getElementById('timeline-slider').scrollTo({ left: shift, behavior: "smooth" });
    }

    document.getElementById('timeline-slider').onscroll = logScroll;

    function logScroll(e) {
        for(let i = 0; i < itemsContainer.children.length; i++){
            itemsContainer.children[i].classList.remove('active');
        }
        if (e.target.scrollLeft <= slide - (widthWindow / 2))
            document.getElementById('0').classList.add('active');
        else if (e.target.scrollLeft > slide - (widthWindow  / 2) && e.target.scrollLeft <= slide * 2 - (widthWindow / 2))
            document.getElementById('1').classList.add('active');
        else
            document.getElementById('2').classList.add('active');
    }
</script>
<!--Таймлайн-->


    </body>
<?php wp_footer(); ?>
</html>