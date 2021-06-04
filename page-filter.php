<?php get_header(); ?>

    <link rel="stylesheet/less" type="text/css"
          href="<?php echo get_stylesheet_directory_uri(); ?>/css/filter/all.less"/>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>


    <div class="filter">
        <div class="filter__left">
            <div class="filter__left-block" id="hot">
                <div class="filter__left-list">
                    <div>
                        <input class="filter__left-cbox" data-id="hot" type="checkbox" name="hot" value="hot">
                        <label class="filter__left-label">Горячая вакансия</label>
                    </div>
                </div>
            </div>
            <div class="filter__left-block" id="work">
                <div class="filter__left-title">График</div>
                <div class="filter__left-list">
                    <div>
                        <input class="filter__left-cbox" data-id="work" type="checkbox" name="Удаленная работа" value="Удаленная работа">
                        <label class="filter__left-label">Удаленная работа</label>
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
        </div>
        <div class="filter__right"></div>
    </div>


    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/filter.js"></script>


<?php get_footer(); ?>