<?php get_header(); ?>


<link rel="stylesheet/less" type="text/css"
      href="<?php echo get_stylesheet_directory_uri(); ?>/css/gifts_less/all.less"/>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


<div class="banner">
    <div class="banner__content">
        <h2 class="banner__title">Выберите подарок!</h2>
        <div class="banner__text">Уважаемый коллега! У нас в компании принято дарить подарки тем, кто нам понравился
            настолько сильно, что мы решили пригласить его в нашу команду. Этот подарок, разумеется, не накладывает на
            Вас никаких обязательств, это просто знак нашего внимания к Вам, как финалисту на эту вакансию.
        </div>
        <a href="#giftBox" class="button button-primary">Выберите подарок</a>

    </div>
</div>
<div class="list">
    <h2 class="list__title" id="giftBox">Наши подарки</h2>
    <div class="list__title-text">Понимая, что у каждого человека — свои предпочтения, мы предлагаем Вам выбор из
        следующих вариантов:
    </div>
    <!--    список подарков-->
    <div class="list__box"></div>

</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/gifts.js " type="text/javascript"></script>
<?php get_footer(bonus); ?>


<div class="modal modal-gift fade" id="gift" tabindex="-1" role="dialog" aria-labelledby="resume">
    <div class="modal-dialog modal-gift-dialog2" role="document">
        <div class="modal-gift-content" id="form1">

            <div class="modal-gift-body">
                <div class="modal-gift__sert"></div>
                <div class="modal-gift__form-toptext">Поля, помеченные <sup>*</sup>, обязательны к заполнению.</div>
                <?php echo do_shortcode('[contact-form-7 id="3156"]'); ?>
            </div>

        </div>
        <div class="modal-gift-content hidden" id="form2">

            <div class="modal-gift-body">

                <div class="modal-gift__result">
                    <div class="modal-gift__result-img"></div>
                    <div class="modal-gift__result-text">Спасибо за выбор, в ближайшее время мы отправим ваш подарок
                        вам на почту!
                    </div>
                    <div class="modal-gift__result-btns">
                        <button class="button button-primary" data-toggle="modal" data-target="#gift">Закрыть
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


