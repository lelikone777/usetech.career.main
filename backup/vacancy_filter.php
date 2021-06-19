<link rel="stylesheet/less" type="text/css"
      href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_less/all.less"/>
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/new_less/all.less"/>
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/career_less/rt_less/all.less"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


<div class="development__container">
    <div class="home-filter">

        <div class="home-filter__box">

            <div class="home-filter__left">
                <h2>Поиск вакансий</h2>
                <p>Наши сотрудники работают на проектах по всему миру, <br> присоединяйся к нам!</p>
                <div class="home-filter__left-box">
                    <div class="home-filter__left-left">
                        <div class="home-filter__line">
                            <label class="home-filter__label" for="">Я классный:</label>
                            <select id="selectProfile">
                                <option value="all">Выберите значение</option>
                            </select>
                        </div>
                        <div class="home-filter__line">
                            <label class="home-filter__label" for="">Ищу работу в городе:</label>
                            <select id="selectCity">
                                <option value="all">Выберите значение</option>
                            </select>
                        </div>
                    </div>
                    <div class="home-filter__left-right">
                        <div class="home-filter__line">
                            <label class="home-filter__label" for="">Мой опыт:</label>
                            <select id="selectExperience">
                                <option value="all">Выберите значение</option>
                            </select>
                        </div>
                        <div class="home-filter__line">
                            <label class="home-filter__label" for="">Тип занятости:</label>
                            <select id="selectTypeEmployment">
                                <option value="all">Выберите значение</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="home-filter__footer">
                    <button class="home-filter__button" id="sendBtn" disabled >Найти классную работу</button>
                    <div class="home-filter__footer-info">или посмотреть <a href="https://career.usetech.ru/vacancy">все вакансии</a></div>
                </div>
            </div>




            <div class="home-filter__right">

                <?php
                $countcat = count(get_category(get_query_var('hot') , false));
                if ($countcat <=3) {  ?>


                <div class="home-filter__right-title">
                    <div class="home-filter__right-title_img"></div>
                    <h3 class="home-filter__right-title_title">Горящие вакансии</h3>
                    <div stye="display: none" class="home-filter__right-title_buttons">
                    </div>
                </div>


                <div class="home-filter__slider">
                    <div class="home-filter__slide">

                        <?php
                        global $post;
                        $query = new WP_Query([
                            'posts_per_page' => 3,
                            'category_name' => 'hot',
                        ]);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>


                                <a href="<?php the_permalink() ?>" class="home-filter__slide-card">
                                    <div class="home-filter__slide-card_top">
                                        <h4 class="home-filter__slide-card_position"> <?php trim_title_chars(100,'...') ?></h4>
                                        <div class="home-filter__slide-card_logo"></div>
                                    </div>
                                    <div class="home-filter__slide-exp">Опыт: <span>от 3 до 6 лет</span></div>
                                    <div class="home-filter__slide-card_bottom">
                                        <div class="home-filter__slide-card_location">Рязань, офис</div>
                                        <div class="home-filter__slide-card_offer">телемедицина</div>
                                    </div>
                                </a>
                                <?php
                            }
                        } else {
                            ?> <p>Постов не найдено</p> <?php
                        }

                        wp_reset_postdata(); // Сбрасываем $post

                        } elseif ($countcat >3 && $countcat <= 6 ) {
                        ?>
                        <div class="home-filter__right-title">
                            <div class="home-filter__right-title_img"></div>
                            <h3 class="home-filter__right-title_title">Горящие вакансии</h3>
                            <div class="home-filter__right-title_buttons"></div>
                        </div>

                        <div class="home-filter__slider">
                            <div class="home-filter__slide">


                                <?php
                                global $post;
                                $query = new WP_Query([
                                    'posts_per_page' => 3,
                                    'category_name' => 'hot',
                                ]);
                                if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>

                                    <a href="<?php the_permalink() ?>" class="home-filter__slide-card">
                                        <div class="home-filter__slide-card_top">
                                            <h4 class="home-filter__slide-card_position"> <?php trim_title_chars(100,'...') ?></h4>
                                            <div class="home-filter__slide-card_logo"></div>
                                        </div>
                                        <div class="home-filter__slide-exp">Опыт: <span>от 3 до 6 лет</span></div>
                                        <div class="home-filter__slide-card_bottom">
                                            <div class="home-filter__slide-card_location">Рязань, офис</div>
                                            <div class="home-filter__slide-card_offer">телемедицина</div>
                                        </div>
                                    </a>

                                    <?php
                                }

                                ?>


                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.selectric.js"></script>
        <script type="text/javascript"
                src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/home-filter.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/hot-career-slider.js"></script>