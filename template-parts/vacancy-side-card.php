<div class="vacancy__side-card">
        <!--                            //проверяем на "горячую" -->
        <?php if (get_field('hot')) { ?>
            <div class="vacancy__side-card_top">
                <div class="vacancy__side-card_hot">
                    <img class="vacancy__side-card_hot-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tinder.svg"
                         alt="Город вакансии Usetech">
                    <div class="vacancy__side-card_hot-text">Горячая вакансия</div>
                </div>
                <!--                            //проверяем на "зелёный лейбл" внутри хот-->
                <?php if (get_field('industry')) { ?>
                    <div class="industry vacancy__side-card_industry">
                        <?php echo get_field('industry'); ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <!--                            //проверяем на "город" -->
        <?php if (get_field('city')) { ?>
            <div class="vacancy__side-card_city">
                <!--                                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/MapPin21.svg"-->
                <!--                                         alt="Город вакансии Usetech">-->
                <div class="vacancy__side-card_city-text"><?php echo get_field('city'); ?>, офис</div>
                <div class="vacancy__side-card_city-subtext">вакансия не подразумевает удаленной работы и необходим выход в офис в данном городе</div>
            </div>
        <?php } else { ?>
            <div class="vacancy__side-card_city">
                <!--                                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/MapPin21.svg"-->
                <!--                                         alt="Город вакансии Usetech">-->
                <div class="vacancy__side-card_city-text">Любой город, удаленно</div>
                <div class="vacancy__side-card_city-subtext">но можно работать и в офисе: Москва, Ростов-на-Дону, Томск, Барнаул</div>
            </div>
        <?php }?>

        <!--                            //проверяем на "опыт"  -->
        <?php if (get_field('experience')) { ?>
            <div class="vacancy__side-card_exp">
                <!--                                    <img class="vacancy__side-card_exp-img" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/calendarblank.svg"-->
                <!--                                         alt="">-->
                <div class="vacancy__side-card_exp-text"><span>Опыт: </span> <?php echo get_field('experience')[label]; ?></div>
            </div>
        <?php } ?>

        <!--                            //проверяем на "занятость" -->
        <?php
        if (get_field('employment')) { ?>
            <div class="vacancy__side-card_employment"> <?php echo get_field('employment'); ?> </div>
        <?php } ?>

        <!--                                --><?php
        //                                if (get_field('schedule')) { ?>
        <!--                            <div> --><?php //echo get_field('schedule'); ?>
        <!--                            </div>--><?php //} ?>
        <!--                            -->
        <!--                                --><?php //if (get_field('work_remote')) { ?>
        <!--                                    <div>-->
        <!--                                        Удаленная работа-->
        <!--                                    </div>-->
        <!--                                --><?php //} ?>
        <!---->
        <!--                                --><?php //if (get_field('work_format')) { ?>
        <!--                                    <div class="vacancy__side-card_format">-->
        <!--                                        <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/clock.svg"-->
        <!--                                             alt="">-->
        <!--                                        <p> format--><?php //echo get_field('work_format'); ?><!--</p>-->
        <!--                                    </div>-->
        <!--                                --><?php //} ?>

        <a href="#" data-toggle="modal" data-target="#offer" class="btn-green vacancy__callback-button">Откликнуться
            на вакансию</a>
    </div>

    <div class="vacancy__callback">
        <div class="vacancy__callback-text">
            Если Вы не нашли подходящую вакансию, пожалуйста, пришлите Ваше резюме, мы обязательно подберем для Вас работу мечты.
        </div>



        <div class="vacancy__callback-form">
            <div class="vacancy__callback-form_name">
                <label class="vacancy__callback-form_name-label" for="callback-name">Фамилия Имя:</label>
                <input id="callback-name" type="text" class="vacancy__callback-form_name-input">
            </div>
            <div class="vacancy__callback-form_contacts">
                <label class="vacancy__callback-form_contacts-label" for="callback-contacts">Телефон или Email:</label>
                <input id="callback-contacts" type="text" class="vacancy__callback-form_contacts-input">
            </div>
            <a type="submit" class="btn-green vacancy__callback-button">Отправить</a>
        </div>
    </div>
    <!--                        <div id="star-frame" class="vacancy__side-frame">-->
    <!--                            <div class="vacancy__side-frame_text">-->
    <!--                                работать можно удаленно или в офисе: Москва, Ростов-на-Дону, Томск, Барнаул-->
    <!--                            </div>-->
    <!--                        </div>-->
