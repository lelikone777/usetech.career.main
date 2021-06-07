<div class="header-new" >
    <div class="header-new__container site__container">
        <div class="header-new__wrapper">


            <a href="#" class="header-new__logo"></a>
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
                      <a href="#" class="header-new__socials-link header-new__socials-link--facebook"><div class="icon icon-facebook"></div></a>
                      <a href="#" class="header-new__socials-link header-new__socials-link--instagram"><div class="icon icon-instagram"></div></a>
                      <a href="#" class="header-new__socials-link header-new__socials-link--linkedin"><div class="icon icon-linkedin"></div></a>
                      <a href="#" class="header-new__socials-link header-new__socials-link--twitter"><div class="icon icon-twitter"></div></a>
                      <a href="#" class="header-new__socials-link header-new__socials-link--vk"><div class="icon icon-vk"></div></a>
                      <a href="#" class="header-new__socials-link header-new__socials-link--youtube"><div class="icon icon-youtube"></div></a>
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