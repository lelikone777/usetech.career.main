<div class="site__container">
    <div class="home-filter">

        <div class="home-filter__box">


            <div class="home-filter__wrap">
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
                        <button class="home-filter__button" id="sendBtn" disabled>Найти классную работу</button>
                        <div class="home-filter__footer-info">или посмотреть <a href="https://career.usetech.ru/vacancy">все
                                вакансии</a></div>
                    </div>
                </div>


                <div class="home-filter__right">
                    <?php $catID = 4; // id категории hot = 12, id категории development = 4
                    $countcat = get_category($catID, false); ?>

                    <div class="home-filter__right-title">
                        <div class="home-filter__right-title_wrap">
                            <div class="home-filter__right-title_img"></div>
                            <h3 class="home-filter__right-title_title">Горящие вакансии <?php echo $countcat->count ?></h3>
                        </div>

                        <?php if ($countcat->count >= 4) { ?>
                            <div class="home-filter__right-title_buttons"></div>
                        <?php } ?>
                    </div>
                    <div class="home-filter__slider">
                        <?php
                        $postList = get_posts(array('category' => $catID, 'numberposts' => 100));
                        $newPostList = array_chunk($postList, 3);

                        foreach ($newPostList as $postTop) { ?>
                            <div class="home-filter__slide">
                                <?php foreach ($postTop as $post) { ?>
                                    <div class="home-filter__slide-card">
                                        <a href="<?php the_permalink() ?>" class="home-filter__slide-card">
                                            <div class="home-filter__slide-card_top">
                                                <h4 class="home-filter__slide-card_position"> <?php trim_title_chars(100,'...') ?></h4>
                                                <div class="home-filter__slide-card_logo"></div>
                                            </div>
                                            <div class="home-filter__slide-exp">Опыт: <span>от 3 до 6 лет</span></div>
                                            <div class="home-filter__slide-card_bottom">
                                                <div class="home-filter__slide-card_location">Рязань, офис</div>
                                                <?
                                                    $industry = get_field('industry');
                                                    if($industry)
                                                        echo '<div class="home-filter__slide-card_offer">'.$industry.'</div>';
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /.home-filter__wrap -->


        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript"
                src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.selectric.js"></script>
        <script type="text/javascript"
                src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>

        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/home-filter.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/home-filter-slider.js"></script>
