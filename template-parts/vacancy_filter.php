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
                        <div class="home-filter__footer-info">или посмотреть <a
                                    href="https://career.usetech.ru/vacancy">все
                                вакансии</a></div>
                    </div>
                </div>


                <div class="home-filter__right">
                        <?php include 'hot-vacancy-slider.php' ?>
                    </div>
                </div>
            </div>
            <!-- /.home-filter__wrap -->
        </div>
    </div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.selectric.js"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-1.8.1/slick/slick.min.js"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/js/home-filter.js"></script>
