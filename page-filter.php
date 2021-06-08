<?php get_header(); ?>

    <link rel="stylesheet/less" type="text/css"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/filter/all.less"/>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>

    <div  class="site__container">
        <div class="filter">
            <div class="filter__left">
                <div class="filter__left-block" id="hot">
                    <div class="filter__left-list">
                        <div>
                            <div class="filter__left-cbox-wrap">
                                <input class="filter__left-cbox" data-id="hot" type="checkbox" id="hot_vac" value="hot">
                                <label class="filter__left-label" for="hot_vac"> <i class="filter__hot-icon"></i>Горящая вакансия</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter__left-block" id="work">
                    <div class="filter__left-title">График</div>
                    <div class="filter__left-list">
                        <div>
                            <div class="filter__left-cbox-wrap">
                                <input class="filter__left-cbox" data-id="work" type="checkbox" id="distant_work" value="Удаленная работа">
                                <label class="filter__left-label" for="distant_work">Удаленная работа</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter__left-block" id="location">
                    <div class="filter__left-title">Локация</div>
                    <div class="filter__left-list"></div>
                </div>
                <div class="filter__left-block" id="profile">
                    <div class="filter__left-title">Профиль</div>
                    <div class="filter__left-list"></div>
                </div>
                <div class="filter__left-block" id="industry">
                    <div class="filter__left-title">Отрасль</div>
                    <div class="filter__left-list"></div>
                </div>
                <div class="filter__left-block" id="exp">
                    <div class="filter__left-title">Опыт работы</div>
                    <div class="filter__left-list"></div>
                </div>
                <div class="filter__left-block" id="emp">
                    <div class="filter__left-title">Тип занятости</div>
                    <div class="filter__left-list"></div>
                </div>

                <div class="filter__btns">
                    <div class="filter__btns-reset">Очистить фильтр</div>
                </div>

            </div>
            <div class="filter__right">
                <div class="filter__search">
                    <input class="filter__search-input" type="text">
                </div>
                <div class="filter__right-result"></div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/filter.js"></script>


<?php get_footer(); ?>