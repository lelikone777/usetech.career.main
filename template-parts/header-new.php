<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet/less" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/css/new_less/all.less"/>-->
<!--<link rel="stylesheet/less" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/css/rt_less/all.less"/>-->
<link rel="stylesheet" type="text/css"
      href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!--<script src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/js/less.js" type="text/javascript"></script>-->
<div class="header-new__layout"></div>
<div class="header-new__flop" ></div>
<div class="header-new" >
    <div class="header-new__container site__container">
        <div class="header-new__wrapper">
            <a href="https://career.usetech.ru/" class="header-new__logo"></a>
            <!-- /.header-new__logo -->
            <div class="header-new__wrap">
           <div class="header-new__wrap-menu">
               <?php
               wp_nav_menu( [
                   'menu'            => 'Main_menu',
                   'menu_class'      => 'header-new__menu',
                   'container'       => 'none',
                   'depth'           => 0,
               ] );
               ?>
               <div class="header-new__feedback">
                   <a href="mailto:hr@usetech.ru" class="header-new__feedback-email">hr@usetech.ru</a>
                   <a href="tel:+74956605048" class="header-new__feedback-tel">+7(495)660-50-48</a>
                   <div class="header-new__feedback-address"> Москва, Кожевническая улица, 10с1,
                       БЦ "Спутник", 7 этаж</div>
               </div>
               <!-- /.header-new__feedback -->
           </div>
                <div class="header-new__socials">
                  <div class="header-new__socials-wrap">
                      <a title="Usetech Facebook" href="https://www.facebook.com/usetech.ru/"  target="_blank" class="header-new__socials-link header-new__socials-link--facebook"><div class="icon icon-facebook"></div></a>
                      <a title="Usetech Instagram" href="https://www.instagram.com/usetech.pro/"  target="_blank" class="header-new__socials-link header-new__socials-link--instagram"><div class="icon icon-instagram"></div></a>
                      <a title="Usetech LinkedIn" href="https://www.linkedin.com/company/usetech-integration/mycompany/"  target="_blank" class="header-new__socials-link header-new__socials-link--linkedin"><div class="icon icon-linkedin"></div></a>
                      <a title="Usetech Twitter" href="https://twitter.com/usetech_pro"  target="_blank" class="header-new__socials-link header-new__socials-link--twitter"><div class="icon icon-twitter"></div></a>
                      <a title="Usetech VK" href="https://vk.com/usetech_pro" target="_blank" class="header-new__socials-link header-new__socials-link--vk"><div class="icon icon-vk"></div></a>
                      <a title="Usetech Youtube" href="https://www.youtube.com/channel/UCeB2o9T5qb5cG0O70AicDeQ"  target="_blank" class="header-new__socials-link header-new__socials-link--youtube"><div class="icon icon-youtube"></div></a>
                  </div>
                </div>
                <!-- /.header-new__socials -->
            </div>
            <!-- /.header-new__menu-wrap -->
            <div class="header-new__button">
                <div class="header-new__button-line header-new__button-line_top"></div>
                <div class="header-new__button-line header-new__button-line_middle"></div>
                <div class="header-new__button-line header-new__button-line_bottom"></div>
            </div>
            <!-- /.header-new__button -->
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/top_menu.js"></script>